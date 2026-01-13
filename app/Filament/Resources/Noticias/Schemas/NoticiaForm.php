<?php

namespace App\Filament\Resources\Noticias\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NoticiaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('epigrafe')
                    ->label('Epígrafe')
                    ->required()
                    ->columnSpanFull(),

                // 1. Campo Título (Detecta cambios y rellena el slug)
                TextInput::make('titular')
                    ->label('Titular')
                    ->live(onBlur: true) // Se activa cuando sales del campo (o usa live() para tiempo real)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                        // Solo genera el slug si el campo slug está vacío o quieres que siempre cambie
                        if (! $get('is_slug_customized')) {
                            $set('slug', Str::slug($state));
                        }
                    })
                    ->required(),

                // 2. Campo Slug (Único y validado)
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true) // Valida unicidad
                   // ->disabled(fn (string $operation) => $operation === 'create') // Opcional: Bloquear en creación
                    // ->dehydrated() // Necesario si usas disabled() para que se guarde igual
                    ->maxLength(255),
                //

                FileUpload::make('image')
                    ->label('Imagen destacada')
                    ->image() // Asegura que solo suban fotos (jpg, png, webp)
                    ->directory('noticias-img') // Carpeta donde se guardarán en storage/app/public
                    ->imageEditor() // ¡Permite recortar la imagen antes de subirla!
                    ->columnSpanFull()
                    ->maxSize(30000), // Ejemplo: 5120 KB = 5 MB

                TextInput::make('subtitulo')
                    ->label('Subtítulo')
                    ->columnSpanFull(),
                    

                Textarea::make('lead')
                    ->label('Lead')
                    ->required()
                    ->columnSpanFull(),

                RichEditor::make('cuerpo')
                    ->label('Cuerpo')
                    ->required()
                    ->columnSpanFull() // Ocupa todo el ancho
                    ->toolbarButtons([ // Opcional: Personaliza qué botones aparecen
                        'blockquote',
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                Toggle::make('published')
                    ->label('Publicado')
                    ->required(),

                DatePicker::make('date')
                    ->label('Fecha de la noticia')
                    ->required(),
            ]);
    }
}
