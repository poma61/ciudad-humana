document.addEventListener('contextmenu', function (event) {
    event.preventDefault();
});

document.onkeydown = function (e) {
    // Bloquear F12
    if (e.keyCode == 123) {
        return false;
    }
    // Bloquear Ctrl+Shift+I (Inspector)
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
    }
    // Bloquear Ctrl+Shift+J (Consola)
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
    }
    // Bloquear Ctrl+U (Ver código fuente)
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
    }
}




