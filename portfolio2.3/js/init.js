$(document).ready(function () {

    // Fadein skills
    (function() {

        var skills = $(".skills");
        var skillIndex = -1;
        
        function showNextSkill() {
            ++skillIndex;
            skills.eq(skillIndex % skills.length)
                .fadeIn(1000)
                .delay(1000)
                .fadeOut(1000, showNextSkill);
        }
        
        showNextSkill();
        
    })();

    //animation line h2

    function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line')))
        $("#line").css({width: "7.2%"});
      });

    //animation line2 h2

      function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line2')))
        $("#line2").css({width: "7%"});
      });

      //animation line3 h2

      function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line3')))
        $("#line3").css({width: "6.3%"});
      });

      //animation line4 h2

      function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line4')))
        $("#line4").css({width: "30.4%"});
      });

       //animation line5 h2

       function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line5')))
        $("#line5").css({width: "24.4%"});
      });

       //animation line6 h2

       function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line6')))
        $("#line6").css({width: "9.5%"});
      });

       //animation line7 h2

       function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line7')))
        $("#line7").css({width: "11.7%"});
      });

      //animation line8 h2

      function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line8')))
        $("#line8").css({width: "100%"});
      });

      //animation line9 h2

      function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line9')))
        $("#line9").css({width: "29.4%"});
      });

      //animation line10 h2

      function elementInView(elem){
        return $(window).scrollTop() < $(elem).offset().top + $(elem).height() ;
      };
      
      $(window).scroll(function(){
        if (elementInView($('#line10')))
        $("#line10").css({width: "3%"});
      });


      // hover article
      $("#article").hover(function(){
        $("#line14").css({width: "4.4%"});
      })

       // hover brightcode link
       $("#websitebc").hover(function(){
        $("#line15").css({width: "7.6%"});
      })

      //menu responsive click
      $(".menu").click(function(){
        $("ul").toggleClass("active");
      })

      $("ul").click(function(){
        $("ul").toggleClass("active");
      })


});

















