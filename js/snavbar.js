$( document ).ready(function() {   
var action_order = 0; 
    
    $('.s-unfold').click(function() {
        if (action_order === 0){
            $('.s-menu').toggleClass("s-menu-open");
            setTimeout(function() {
                $('.s-menu').toggleClass("s-menu-opacity");
            }, 100);
            action_order = 1;
        }
        else {
            $('.s-menu').toggleClass("s-menu-opacity");
            setTimeout(function() {
                $('.s-menu').toggleClass("s-menu-open");
            }, 100);
            action_order = 0;
        }
    }); 
});