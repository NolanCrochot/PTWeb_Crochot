$( document ).ready(function() {
  
    /*DOWN SCROLL*/
    
    var waypoint = new Waypoint({
      element: document.getElementById('identite'),
      handler: function(direction) {
          if (direction === 'down'){
            $( '.nav-identite' ).addClass( "actual-section" );
            $( '.nav-competences' ).removeClass( "actual-section" );
            $( '.nav-experiences' ).removeClass( "actual-section" );
            $( '.nav-realisations' ).removeClass( "actual-section" );
            $( '.nav-contact' ).removeClass( "actual-section" );
          }
      },
      offset: 200
    })
    
    var waypoint = new Waypoint({
      element: document.getElementById('competences'),
      handler: function(direction) {
          if (direction === 'down'){
            $( '.nav-identite' ).removeClass( "actual-section" );
            $( '.nav-competences' ).addClass( "actual-section" );
            $( '.nav-experiences' ).removeClass( "actual-section" );
            $( '.nav-realisations' ).removeClass( "actual-section" );
            $( '.nav-contact' ).removeClass( "actual-section" );
          }
      },
      offset: 200
    })

    var waypoint = new Waypoint({
      element: document.getElementById('experiences'),
      handler: function(direction) {
        if (direction === 'down'){
          $( '.nav-identite' ).removeClass( "actual-section" );
          $( '.nav-competences' ).removeClass( "actual-section" );
          $( '.nav-experiences' ).addClass( "actual-section" );
          $( '.nav-realisations' ).removeClass( "actual-section" );
          $( '.nav-contact' ).removeClass( "actual-section" );
        }
      },
      offset: 200
    })
    
    var waypoint = new Waypoint({
      element: document.getElementById('realisations'),
      handler: function(direction) {
          if (direction === 'down'){
            $( '.nav-identite' ).removeClass( "actual-section" );
            $( '.nav-competences' ).removeClass( "actual-section" );
            $( '.nav-experiences' ).removeClass( "actual-section" );
            $( '.nav-realisations' ).addClass( "actual-section" );
            $( '.nav-contact' ).removeClass( "actual-section" );
          }
      },
      offset: 200
    })
    
    
    /* UP SCROLL */
    
    var waypoint = new Waypoint({
      element: document.getElementById('identite'),
      handler: function(direction) {
          if (direction === 'up'){
            $( '.nav-identite' ).addClass( "actual-section" );
            $( '.nav-competences' ).removeClass( "actual-section" );
            $( '.nav-experiences' ).removeClass( "actual-section" );
            $( '.nav-realisations' ).removeClass( "actual-section" );
            $( '.nav-contact' ).removeClass( "actual-section" );
          }
      },
      offset: -200
    })
    
    var waypoint = new Waypoint({
      element: document.getElementById('competences'),
      handler: function(direction) {
          if (direction === 'up'){
            $( '.nav-identite' ).removeClass( "actual-section" );
            $( '.nav-competences' ).addClass( "actual-section" );
            $( '.nav-experiences' ).removeClass( "actual-section" );
            $( '.nav-realisations' ).removeClass( "actual-section" );
            $( '.nav-contact' ).removeClass( "actual-section" );
          }
      },
      offset: -200
    })

    var waypoint = new Waypoint({
      element: document.getElementById('experiences'),
      handler: function(direction) {
        if (direction === 'up'){
          $( '.nav-identite' ).removeClass( "actual-section" );
          $( '.nav-competences' ).removeClass( "actual-section" );
          $( '.nav-experiences' ).addClass( "actual-section" );
          $( '.nav-realisations' ).removeClass( "actual-section" );
          $( '.nav-contact' ).removeClass( "actual-section" );
        }
      },
      offset: -200
    })
    
    var waypoint = new Waypoint({
      element: document.getElementById('realisations'),
      handler: function(direction) {
          if (direction === 'up'){
            $( '.nav-identite' ).removeClass( "actual-section" );
            $( '.nav-competences' ).removeClass( "actual-section" );
            $( '.nav-experiences' ).removeClass( "actual-section" );
            $( '.nav-realisations' ).addClass( "actual-section" );
            $( '.nav-contact' ).removeClass( "actual-section" );
          }
      },
      offset: -200
    })
    
    
    /* HEADER */
    
    var waypoint = new Waypoint({
      element: document.getElementById('header'),
      handler: function(direction) {
            $( '.navbar' ).addClass( "nav-top" );
            $( '.navbar' ).removeClass( "nav-small" );
      },
      offset: -505
    })
    
    var waypoint = new Waypoint({
      element: document.getElementById('identite'),
      handler: function(direction) {
          if (direction === 'down'){
            $( '.navbar' ).addClass( "nav-small" );
            $( '.navbar' ).removeClass( "nav-top" );
          }
      },
      offset: 0
    })  

    /* CONTACT */
    
    var waypoint = new Waypoint({
      element: document.getElementById('contact'),
      handler: function(direction) {
          $( '.nav-identite' ).removeClass( "actual-section" );
          $( '.nav-competences' ).removeClass( "actual-section" );
          $( '.nav-experiences' ).removeClass( "actual-section" );
          $( '.nav-realisations' ).removeClass( "actual-section" );
          $( '.nav-contact' ).addClass( "actual-section" );
      },
      offset: 500
    })
    
});