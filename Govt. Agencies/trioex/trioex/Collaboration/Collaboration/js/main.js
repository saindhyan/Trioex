$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
    $('.collapse').on('show.bs.collapse', function() {
        $(this).closest('.accordion-item').addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function() {
        $(this).closest('.accordion-item').removeClass('active');
    });



});
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});