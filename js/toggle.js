$(document).ready(function() {


$('a.switcher').on('click', function(e){
    e.preventDefault();
    if ( $(this).hasClass('active') ) {
        //nothing, or notify it's already active
        } else {
            $('.switcher, .plans').toggleClass('active');
        }
});

});
