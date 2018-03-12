$(document).ready(function () {
    $('#search-form').submit(function() {
        if ($('#search-input').val().length == 0) {
            alert('Пустой поисковый запрос');
            return false;
        }
    });
    $('#new-search').click(function() {
        return confirm('Вы уверены? Результат текущего поиска будет закрыт');
    });
});