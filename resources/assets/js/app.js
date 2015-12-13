$(function() {
    $('.edit').click( function() {
         $.get( $(this).attr('href'), function(msg) {
            console.log('data : '+[msg]);
         });
         return false; // don't follow the link!
    });
});
