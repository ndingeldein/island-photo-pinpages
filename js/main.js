(function(){

//Pixels from top - toggles on scroll nav
var scrollTrigger = 50;

var $body = $('body');
var $menuButton = $body.find('.menu-button');
var $mobileNavContainer = $body.find('.mobile-nav-container');
var $hasSubnav = $body.find('a.has-subnav');
var $mobileHasSubnav = $body.find('.mobile-nav .has-subnav');
var $desktopHasSubnav = $body.find('.main-nav .has-subnav');

// Toggle Mobile Nav
$menuButton.on('click', function(){

	var $this = $(this);
	$this.toggleClass('selected');
	if($this.hasClass('selected')){
		$mobileNavContainer.addClass('show');
	}else{
		$mobileNavContainer.removeClass('show');
	}

});

// Prevent navitems with subnav from executing link href
$hasSubnav.find('> a').on('click', function(e){
	e.preventDefault();
});
$mobileHasSubnav.find('> a').on('click', function(e){
	e.preventDefault();
});

// Toggle showing of Mobile subnavs
$mobileHasSubnav.on('click', function(){

	var $this = $(this);
	$this.toggleClass('show');	

});

function updateScroll(){
	if($body.scrollTop() > scrollTrigger){
		$body.addClass('scrolling');
	}else{
		$body.removeClass('scrolling');
	}
}
// Toggle showing of Scroll Nav
$(window).on('scroll', updateScroll);

//init scroll nav status
updateScroll();
	
})();