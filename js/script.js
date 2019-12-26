// Переменные-----------------------------------------------------------
let stateSidebar = !!Cookies.get('sidebar');

// Document Ready ------------------------------------------------------
$(document).ready(function() {

    //Состояние sidebar
    if (stateSidebar) {
        $('body').toggleClass('is-collapsed').click();
    };

    //Кнопка открыть/закрыть главное меню
    $('#sidebarCollapse , .closebtn').on('click', function() {
        $('body').toggleClass('is-collapsed');

        // Запись/удаление состояния sidebar в cookies
        if (!stateSidebar) {
            stateSidebar = true;
            Cookies.set('sidebar', true);
        } else {
            stateSidebar = false;
            Cookies.remove('sidebar');
        }

    });
});