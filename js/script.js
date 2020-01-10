// Переменные-----------------------------------------------------------
let stateSidebar = !!Cookies.get('sidebar');

// Document Ready ------------------------------------------------------
$(document).ready(function () {

    //Состояние sidebar
    if (stateSidebar) {
        $('body').toggleClass('is-collapsed').click();
    };

    //Кнопка открыть/закрыть главное меню
    $('#sidebarCollapse , .closebtn').on('click', function () {
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

    //Кнопка открыть/закрыть Инфо в .header
    let circle = document.querySelector('.circle'),
        header = document.querySelector('.header');

    circle.addEventListener('click', () => {
        $(circle).toggleClass('openHeader');
        $(header).toggleClass('openHeader');
        setTimeout(() => {
            $(header).toggleClass('visibl-info');
        }, 0);
        setTimeout(() => {
            $(header).toggleClass('overflow-initial');
        }, 300);
    });

});