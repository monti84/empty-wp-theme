jQuery(document).ready(function($) {
$('#slider > ul').cycle({ 
    fx:       'scrollHorz', 
    next:     '#slider > ul',
    pause:  1,
    timeout: 10000,
    pager:  '#slider-nav',
    before: function () { $(this).find('.text').hide(); },
    after: function () { $(this).find('.text').fadeIn(); },
  });
});