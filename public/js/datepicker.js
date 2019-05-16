$(document).ready(function() {

var lang = $('html')[0].lang;

$('.input-date').datepicker({
    format: "yyyy-mm-dd",
    language: lang,
    orientation: "bottom auto",
    daysOfWeekHighlighted: "0,6",
    todayHighlight: true
});

});