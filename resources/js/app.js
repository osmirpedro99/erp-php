import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
window.$ = $;
window.jQuery = $;

$(function() {
    $(document).on('click', '.editData', function() {
        const data = $(this).data('edit');
        $('#name').val(data.name);
        $('#price').val(data.price);
        $('#quantity').val(data.quantity);
    });
});