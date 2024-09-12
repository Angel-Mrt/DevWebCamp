(function () {
    const sidebar = document.querySelector('#sidebar');
    const ocultar = document.querySelector('#ocultar__sidebar');
    if (sidebar) {

        updateSidebarState;
    }

        function updateSidebarState(isHidden) {
                if (isHidden) {
                    sidebar.classList.add('hidden');
                    sidebar.classList.add('display-none');
                    ocultar.classList.remove('fa-chevron-left');
                    ocultar.classList.add('fa-chevron-right');
                } else {
                    sidebar.classList.remove('hidden', 'display-none');
                    ocultar.classList.remove('fa-chevron-right');
                    ocultar.classList.add('fa-chevron-left');
                }
                // Guardar el estado en localStorage
                localStorage.setItem('sidebarHidden', isHidden);
        }
        // Alternar el estado del sidebar
            function toggleSidebar() {
                const isHidden = sidebar.classList.contains('hidden');
                updateSidebarState(!isHidden);
        }
         // Leer el estado guardado y ajustar el estado del sidebar al cargar la página
            const sidebarHidden = localStorage.getItem('sidebarHidden') === 'true';
            updateSidebarState(sidebarHidden);

            if (ocultar) {
                ocultar.addEventListener('click', toggleSidebar);
            }

})();