// загрузка документа  -------------------------------------------------------------
window.addEventListener('DOMContentLoaded', function() {

    // инициализация таблицы
    $('#dataTable').DataTable({
        fixedHeader: true,
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

    // Изменение горизонтального положения фиксированной шапки при прокрутке таблицы, которая не вмещается по ширине
    $('#dataTable_wrapper').scroll(function(e) {
        let newStyleLeft = (35 - $(this).scrollLeft()) + "px";
        $('table.fixedHeader-floating').css('left', newStyleLeft);
    });

});