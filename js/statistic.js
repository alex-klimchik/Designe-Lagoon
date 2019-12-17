// Переменные  --------------------------------------------------------------------
let btnAddInputs = document.querySelector('.btn-addInputs');
let dopInputs = document.querySelector('.dop-inputs');
let countInp = true;
let fullSetBtns = document.querySelector('.fullSet-btn');
let fullSetBtnSuccess = fullSetBtns.querySelector('.btn-success');
let fullSetBtnDanger = fullSetBtns.querySelector('.btn-danger');
let countFullSet = true;
let currentValue = document.querySelector('.current-value');

// загрузка документа  -------------------------------------------------------------
window.addEventListener('DOMContentLoaded', function () {

    // инициализация таблицы
    $('#dataTable').DataTable({
        fixedHeader: true,
    });

    // Изменение горизонтального положения фиксированной шапки при прокрутке таблицы, которая не вмещается по ширине
    $('#dataTable_wrapper').scroll(function (e) {
        let newStyleLeft = (35 - $(this).scrollLeft()) + "px";
        $('table.fixedHeader-floating').css('left', newStyleLeft)
    });

    // Событие при клике на кнопку-стрелку
    btnAddInputs.addEventListener('click', function () {
        if (countInp) {
            this.style.transform = "rotate(180deg)";
            dopInputs.classList.remove('dop-inputs_inactive');

            countInp = false;
        } else {
            this.style.transform = "rotate(0deg)";
            dopInputs.classList.add('dop-inputs_inactive');

            countInp = true;
        }
    });

    // Событие при клике на кнопку (+ all) или (- all)
    fullSetBtns.addEventListener('click', function () {
        if (countFullSet) {
            fullSetBtnSuccess.style.display = 'none';
            fullSetBtnDanger.style.display = 'block';

            countFullSet = false;
        } else {
            fullSetBtnSuccess.style.display = 'block';
            fullSetBtnDanger.style.display = 'none';

            countFullSet = true;
        }
    });

    //Кнопки выбора валюти
    currentValue.firstElementChild.addEventListener('click', function () {
        currentValue.firstElementChild.classList.add('active');
        currentValue.lastElementChild.classList.remove('active');
    });
    currentValue.lastElementChild.addEventListener('click', function () {
        currentValue.lastElementChild.classList.add('active');
        currentValue.firstElementChild.classList.remove('active');
    });

});