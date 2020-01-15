// Переменные-----------------------------------------------------------
let stateSidebar = !!Cookies.get('sidebar');

let mySingleton = (function () {
    let instance;
    return {
        getInstance: function () {
            if (!instance) {
                instance = ($('body').on('click', '.sidebar .sidebar-link', collapseSidebar));
            }
            // return instance
        },
        deleteInstance: function () {
            if (instance) {
                instance = ($('body').off('click', '.sidebar .sidebar-link', collapseSidebar));
            }
        }
    }
})();

function collapseSidebar() {
    Cookies.set('sidebar', true);    
}

function closeSidebar() {
    if (window.innerWidth < 992) {
        // on
        mySingleton.getInstance();
    } else {
        // off
        mySingleton.deleteInstance();

    }
}

// Document Ready ------------------------------------------------------
$(document).ready(function () {

    closeSidebar();
    $(window).resize(function () {
        closeSidebar();
    })

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