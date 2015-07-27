
  $(document).ready(function() {
    //$('.carousel').carousel({interval: 7000});
    
    
    $('.homepageback').backstretch([
            "http://restaurantathome.be/more/img/homepageslider/aperitiefglaasje%20met%20tomaat%20buffelmozzarella%20en%20italiaanse%20ham.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/Carpaccio%20van%20zalm%20met%20sjalot%20bieslook%20en%20limoendressing.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/Geroosterde%20wortelen.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/Griekse%20yoghurt%20met%20bosbessen%20en%20geroosterde%20amandelschilfers.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/Guacamole.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/Macaroni%20met%20ham%20en%20kaas.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/risotto%20milanese%20met%20crunchy%20extra's.jpg"
            , "http://restaurantathome.be/more/img/homepageslider/tomatenbruchetta.jpg" 
        ], {duration: 5000, fade: 750}); 



    $('#back_to_results').on('click', function(e) {
        e.preventDefault();
        goBack();
    });
    
  });

  function goBack() {
      window.history.back();
  }
