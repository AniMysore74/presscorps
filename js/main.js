$(document).ready( $(function(){
  $('.dropdown').on('show.bs.dropdown', function(e){
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function(e){
      e.preventDefault();
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
      	$('.dropdown').removeClass('open');
        	$('.dropdown').find('.dropdown-toggle').attr('aria-expanded','false');
      });
      
    });
  });
)};