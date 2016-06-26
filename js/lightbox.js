$( document ).ready(function() {
    
    var actualPos = 0;
    $('#item6').click(function() {
        $('#lbitem6').addClass("lightbox-open");
        setTimeout(function() {
            $('#lbitem6').addClass("item-visible");            
        }, 100);
        setTimeout(function() {
            $('#lbitem6 .lightbox-content').addClass("item-visible");             
        }, 200);
    });
    $('#lbitem6 .close-box-btn').click(function() {
        actualPos = 0;
        $('#lbitem6 .lightbox-content').removeClass("item-visible");  
        $('#lbitem6').removeClass("item-visible");
        setTimeout(function() {
            $('#lbitem6').removeClass("lightbox-open");  
        }, 100);
        setTimeout(function() {
            $('#lbitem6 #img1').addClass("item-visible");
            $('#lbitem6 #img2').removeClass("item-visible");
            $('#lbitem6 #img3').removeClass("item-visible");
            $('#lbitem6 #img4').removeClass("item-visible");
            $('#lbitem6 #img1').removeClass("item-hidden");
            $('#lbitem6 #img2').addClass("item-hidden");
            $('#lbitem6 #img3').addClass("item-hidden");
            $('#lbitem6 #img4').addClass("item-hidden");
            $('#lbitem6 .next').removeClass('end-item-get');
            $('#lbitem6 .previous').addClass('end-item-get');
        }, 150);
    });
    
    $('#lbitem6 .next').click(function() {
        switch (actualPos){
            case 0 :
                $('#lbitem6 .previous').removeClass('end-item-get');
                $('#lbitem6 #img1').removeClass("item-visible");
                setTimeout(function() { $('#lbitem6 #img1').addClass("item-hidden");}, 50);
                setTimeout(function() { $('#lbitem6 #img2').removeClass("item-hidden");}, 50); setTimeout(function() { $('#lbitem6 #img2').addClass("item-visible");}, 100);
                actualPos++;
                break;

            case 1 :
                $('#lbitem6 #img2').removeClass("item-visible");
                setTimeout(function() { $('#lbitem6 #img2').addClass("item-hidden");}, 50);
                setTimeout(function() { $('#lbitem6 #img3').removeClass("item-hidden");}, 50); setTimeout(function() { $('#lbitem6 #img3').addClass("item-visible");}, 100);
                actualPos++;
                break;

            case 2 :
                $('#lbitem6 .next').addClass('end-item-get');
                $('#lbitem6 #img3').removeClass("item-visible");
                setTimeout(function() { $('#lbitem6 #img3').addClass("item-hidden");}, 50);
                setTimeout(function() { $('#lbitem6 #img4').removeClass("item-hidden");}, 50); setTimeout(function() { $('#lbitem6 #img4').addClass("item-visible");}, 100);
                actualPos++
                break;
        }
    });
    
    $('#lbitem6 .previous').click(function() {
        switch (actualPos){
            case 1 :
                $('#lbitem6 .previous').addClass('end-item-get');
                $('#lbitem6 #img2').removeClass("item-visible");
                setTimeout(function() { $('#lbitem6 #img2').addClass("item-hidden");}, 50);
                setTimeout(function() { $('#lbitem6 #img1').removeClass("item-hidden");}, 50); setTimeout(function() { $('#lbitem6 #img1').addClass("item-visible");}, 100);
                actualPos--;
                break;

            case 2 :
                $('#lbitem6 #img3').removeClass("item-visible");
                setTimeout(function() { $('#lbitem6 #img3').addClass("item-hidden");}, 50);
                setTimeout(function() { $('#lbitem6 #img2').removeClass("item-hidden");}, 50); setTimeout(function() { $('#lbitem6 #img2').addClass("item-visible");}, 100);
                actualPos--;
                break;

            case 3 :
                $('#lbitem6 .next').removeClass('end-item-get');
                $('#lbitem6 #img4').removeClass("item-visible");
                setTimeout(function() { $('#lbitem6 #img4').addClass("item-hidden");}, 50);
                setTimeout(function() { $('#lbitem6 #img3').removeClass("item-hidden");}, 50); setTimeout(function() { $('#lbitem6 #img3').addClass("item-visible");}, 100);
                actualPos--;
                break;
        }
    });
    
});
