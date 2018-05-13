// displays/hides login form or search bar
$(document).ready(function(){
    // fade in or out if you click the search icon
    // also hides login form if you open the search bar
    $('.search-icon').click(function(){
        $('.login-form,.submitBtn').fadeOut();        
        $('.search-form').delay(250).slideToggle();
    });
    // fade in or out if you click the search icon
    // also hides search bar if you open the login form
    $('.user-icon').click(function(){
        $('.search-form').fadeOut();
        $('.login-form,.submitBtn').delay(250).slideToggle();
    });
    // fade out search bar if "X" was pressed
    $('.closeSearch').click(function(){
        $('.search-form').slideToggle()
    });
    // fade out login form if "X" was pressed
    $('.closeUser').click(function(){
        $('.login-form,.submitBtn').slideToggle()
    });
});