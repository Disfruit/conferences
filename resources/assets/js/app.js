import './bootstrap';
import flatpickr from "flatpickr";

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.datepicker').forEach(function (item) {
        flatpickr(item, {
            minDate: 'today',
            mode: 'single'
        });
    });
});
