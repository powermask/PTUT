jQuery(function($) {

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 2000
		});
	});

	$( '.centered' ).each(function( e ) {
		$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
	});

	$(window).resize(function(){
		$( '.centered' ).each(function( e ) {
			$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
		});
	});

	//portfolio
	$(window).load(function(){
        $('#main-slider').show();
		$portfolio_selectors = $('.portfolio-filter >li>a');
		if($portfolio_selectors!='undefined'){
			$portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : 'li',
				layoutMode : 'fitRows'
			});
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}
	});
    
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
        $("#myBtn2").click(function(){
            $("#myModal2").modal();
        });
        $("#myBtn3").click(function(){
            $("#myModal3").modal();
        });
        $("#myBtn4").click(function(){
            $("#myModal4").modal();
        });
    });
    
	//contact form
	var form = $('.contact-form');
	form.submit(function () {
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
    
    $(window).resize(function(){
        if($(window).width() <= 600)
            {
                $('#main-slider').hide();
            }else if($(window).width() >= 650)
            {
                $('#main-slider').show();  
            }
    });
    
});