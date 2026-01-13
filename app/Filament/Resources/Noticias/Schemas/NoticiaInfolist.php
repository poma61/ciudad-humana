<?php

namespace App\Filament\Resources\Noticias\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString; // <--- Importante

class NoticiaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('epigrafe')
                    ->label('Epígrafe'),
                TextEntry::make('titular')
                    ->label('Titular'),
                ImageEntry::make('image')
                    ->label('Imagen')
                    ->placeholder('-'),
                TextEntry::make('subtitulo')
                    ->label('Subtítulo')
                    ->columnSpanFull(),
                TextEntry::make('lead')
                    ->label('Lead')
                    ->columnSpanFull(),
                TextEntry::make('cuerpo')
                    ->label('Cuerpo')
                    ->html()
                    ->columnSpanFull()
                    ->formatStateUsing(fn (string $state): HtmlString => new HtmlString(
                        // 2. Envolvemos el contenido en un div con clase 'prose'
                        // 'dark:prose-invert' es vital para que se vea bien en modo oscuro
                        '<div class="prose dark:prose-invert max-w-none">'.$state.'</div>'
                    )),

                IconEntry::make('published')
                    ->label('Publicado')
                    ->boolean(),
                TextEntry::make('date')
                    ->label('Fecha de la noticia')
                    ->date(),
            ]);
    }
}
