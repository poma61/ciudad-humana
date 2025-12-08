
function search() {
    const query = document.getElementById('searchInput').value.toLowerCase().trim();
    const termino = document.getElementById('termino');
    const resultadosDiv = document.getElementById('resultados');
    const contenido = document.getElementById('contenido');

    resultadosDiv.innerHTML = '';
    resultadosDiv.style.display = "block";

    termino.innerHTML = 'Resultados para: ' + query;
    termino.style.display = "block"

    if (query === '') return;

    // Ocultar el contenido original
    contenido.style.display = 'none';

    const bloques = contenido.querySelectorAll('.bloque');
    let encontrados = false;

    bloques.forEach(bloque => {
        if (bloque.innerText.toLowerCase().includes(query)) {
            const clone = bloque.cloneNode(true);
            resultadosDiv.appendChild(clone);
            encontrados = true;
        }
    });

    if (!encontrados) {
        resultadosDiv.innerHTML = '<p class="mx-5">No se encontraron resultados.</p>';
    }

    modal = document.getElementById("modal_search")
    modal.close();
}


// Se ejecutar al presionar la tecla enter cuando estamos en el input
document.getElementById('searchInput').addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault();   // Evita que el formulario se envíe
        search();                 // Ejecuta tu función
    }
});


