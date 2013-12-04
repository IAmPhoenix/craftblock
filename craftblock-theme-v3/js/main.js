$(function(){


    // Animate the subnav 
    var subNav;
    $('nav > ul > li').hover(function(){

        // Find this elements subnav
        subNav = $(this).find('.subnav');
        // If there are any subnav's that are showing, hide them.
        $('nav > ul > li').find('.subnav').stop().slideUp(200);
        // Now display the current subnav
        subNav.slideDown('300');

    }, function(){
        // Once the mouse leaves lets hide the current subnav
        subNav.stop().slideUp('300');
    });

$(document).foundation({
  tooltips: {
    selector : '.has-tip',
    additional_inheritable_classes : [],
    tooltip_class : '.tooltip'
  }
});
    
});





