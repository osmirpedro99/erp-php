import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
window.$ = $;
window.jQuery = $;

$(function() {
    $(document).on('click', '.editData', function() {
        const data = $(this).data('edit');
        const id = data.id;
        
        $('#name').val(data.name);
        $('#price').val(data.price);
        $('#quantity').val(data.quantity);

        $('.formModal').attr('action', `/strorage/update/${id}`);
        $('.formModal input[name="_method"]').remove(); // remove se já tiver um
        $('.formModal').append('<input type="hidden" name="_method" value="PUT">');
    });
});