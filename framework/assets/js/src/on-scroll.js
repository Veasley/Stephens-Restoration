jQuery(document).ready(function($) {
	
	var prevTop = 0;
  
    $(document).scroll( function() {
        var currentTop = $(this).scrollTop();
        if(prevTop !== currentTop) {
            prevTop = currentTop;
            if($(this).scrollTop() > 100) {
              $(".x-brand").addClass( "x-brand-scroll" );
              $("div.x-navbar").addClass( "x-navbar-scroll" );
          } else {
              $(".x-brand").removeClass( "x-brand-scroll" );
              $("div.x-navbar").removeClass( "x-navbar-scroll" );
          }
        }
    });
    
    
    $('.slide').on('click', function(){
        $('#fade-in').toggleClass('show');
    });

});