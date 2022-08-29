/**
 * index.js
 * - All our useful JS goes here, awesome!
 */
 $(document).ready(function(){
    $("#btn-sidebar-collapse").click(function(){
        if ($('body').hasClass('has-mini-sidebar')) {
            $('body').removeClass('has-mini-sidebar');
        } else {
            $('body').addClass('has-mini-sidebar');
        }
    });
});
