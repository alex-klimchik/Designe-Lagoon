// Переменные  --------------------------------------------------------------------
let btnAddInputs = document.querySelector('.btn-addInputs');
let dopInputs = document.querySelector('.dop-inputs');
let countInp = true;
let fullSetBtns = document.querySelector('.partners-btn');
let fullSetBtnSuccess = fullSetBtns.querySelector('.btn-success');
let fullSetBtnDanger = fullSetBtns.querySelector('.btn-danger');
let countFullSet = true;
let currentValue = document.querySelector('.current-value');

// загрузка документа  -------------------------------------------------------------
window.addEventListener('DOMContentLoaded', function () {

    // инициализация таблицы
    $('#dataTable').DataTable({
        "language": {
            "processing": "Подождите...",
            "search": "Поиск по данным:",
            "lengthMenu": "Показывать по _MENU_ ",
            "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
            "infoEmpty": "Записи с 0 до 0 из 0 записей",
            "infoFiltered": "(отфильтровано из _MAX_ записей)",
            "infoPostFix": "",
            "loadingRecords": "Загрузка записей...",
            "zeroRecords": "Записи отсутствуют.",
            "emptyTable": "В таблице отсутствуют данные",
            "paginate": {
                "first": "Первая",
                "previous": "Предыдущая",
                "next": "Следующая",
                "last": "Последняя"
            },
            "aria": {
                "sortAscending": ": активировать для сортировки столбца по возрастанию",
                "sortDescending": ": активировать для сортировки столбца по убыванию"
            },
            "select": {
                "rows": {
                    "_": "Выбрано записей: %d",
                    "0": "Кликните по записи для выбора",
                    "1": "Выбрана одна запись"
                }
            }
        }
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