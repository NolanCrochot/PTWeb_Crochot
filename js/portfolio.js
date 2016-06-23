$( document ).ready(function() {
 
    $( '.port-item' ).hover(function() {
        $( this ).addClass( "item-hover" );  
    }, function() {
        $( this ).removeClass( "item-hover" );   
    });

    $( '.cat-all' ).click(function() {
        $( '.itemweb' ).removeClass( "portitem-hiden" );
        $( '.itemgra' ).removeClass( "portitem-hiden" );
        $( '.itemdev' ).removeClass( "portitem-hiden" );
        $( '.cat-all' ).addClass( "cat-selected" );
        $( '.cat-web' ).removeClass( "cat-selected" );
        $( '.cat-gra' ).removeClass( "cat-selected" );
        $( '.cat-dev' ).removeClass( "cat-selected" );
        setTimeout(function() {
            $( '.itemgra' ).removeClass( "portitem-transition" ); 
            $( '.itemweb' ).removeClass( "portitem-transition" );
            $( '.itemdev' ).removeClass( "portitem-transition" );
        }, 100);
    });
    $( '.cat-web' ).click(function() {
        $( '.itemweb' ).removeClass( "portitem-hiden" );
        $( '.itemgra' ).addClass( "portitem-transition" );
        $( '.itemdev' ).addClass( "portitem-transition" );
        $( '.cat-web' ).addClass( "cat-selected" );
        $( '.cat-gra' ).removeClass( "cat-selected" );
        $( '.cat-dev' ).removeClass( "cat-selected" );
        $( '.cat-all' ).removeClass( "cat-selected" );
        setTimeout(function() {
            $( '.itemgra' ).addClass( "portitem-hiden" ); 
            $( '.itemdev' ).addClass( "portitem-hiden" ); 
            $( '.itemweb' ).removeClass( "portitem-transition" );
        }, 100);
    });
    $( '.cat-gra' ).click(function() {
        $( '.itemweb' ).addClass( "portitem-transition" );
        $( '.itemgra' ).removeClass( "portitem-hiden" );
        $( '.itemdev' ).addClass( "portitem-transition" );
        $( '.cat-web' ).removeClass( "cat-selected" );
        $( '.cat-gra' ).addClass( "cat-selected" );
        $( '.cat-dev' ).removeClass( "cat-selected" );
        $( '.cat-all' ).removeClass( "cat-selected" );
        setTimeout(function() {
            $( '.itemweb' ).addClass( "portitem-hiden" );  
            $( '.itemdev' ).addClass( "portitem-hiden" ); 
            $( '.itemgra' ).removeClass( "portitem-transition" );
        }, 100);
    });
    $( '.cat-dev' ).click(function() {
        $( '.itemweb' ).addClass( "portitem-transition" );
        $( '.itemgra' ).addClass( "portitem-transition" );
        $( '.itemdev' ).removeClass( "portitem-hiden" );
        $( '.cat-web' ).removeClass( "cat-selected" );
        $( '.cat-gra' ).removeClass( "cat-selected" );
        $( '.cat-dev' ).addClass( "cat-selected" );
        $( '.cat-all' ).removeClass( "cat-selected" );
        setTimeout(function() {
            $( '.itemweb' ).addClass( "portitem-hiden" ); 
            $( '.itemgra' ).addClass( "portitem-hiden" ); 
            $( '.itemdev' ).removeClass( "portitem-transition" );
        }, 100);
    });
    
});


