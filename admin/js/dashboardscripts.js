$(document).ready(function() {

    $('#dataTable').DataTable();
    $('.dataTables_length').addClass('bs-select');

    $('#viewMessage').click(function() {
        $('#message').toggle().slideDown();
        // $('.viewMessage').toggle().hide();


        $("#country_select").countrySelect();

        $("#country_selector").countrySelect({
            defaultStyling: "inside"
        });

        $('.sCountries').phonecode({
            setClass: 'phone'
        });

    });

});