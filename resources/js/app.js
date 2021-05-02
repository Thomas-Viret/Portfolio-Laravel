require('./bootstrap');

var priority = 100;

$(document).ready(function(){
  $("li").each(function()
  {

    $(this).css('z-index',priority--);
  }
    );
});
