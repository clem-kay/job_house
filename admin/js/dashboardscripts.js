$(document).ready(function() {

    $('#dataTable').DataTable();
    $('.dataTables_length').addClass('bs-select');

    $('#viewMessage').click(function() {
        $('#message').toggle().slideDown();
        // $('.viewMessage').toggle().hide();



    });

});