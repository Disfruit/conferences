import './bootstrap';
import flatpickr from "flatpickr";

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.datepicker').forEach(function (item) {
        flatpickr(item, {
            mode: 'range'
        });
    });
});
npm
