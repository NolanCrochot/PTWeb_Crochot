$( document ).ready(function() {
    // disparition du bouton en tête de page 
    var waypoint = new Waypoint({
      element: document.getElementById('header'),
      handler: function(direction) {
            $( '.backtotop' ).addClass( "backtotop-already-top" );
      },
      offset: -300
    })
    // apparition du bouton à partir du contenu de la page 
    var waypoint = new Waypoint({
      element: document.getElementById('identite'),
      handler: function(direction) {
            $( '.backtotop' ).removeClass( "backtotop-already-top" );
      },
      offset: 0
    }) 
});


