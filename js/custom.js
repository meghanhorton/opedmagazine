/* SHOW AND HIDE COMMENTS */
$(document).ready(function(){
  var full = $(document).height();
  $('.full-height>.titlepage').height(full);

  $('#showme').on('click',
    function(){
      $('.highlight').each(function(){
        $(this).toggleClass('wrong');
      });

      $(this).parent().toggleClass('btn-wrong btn-correct');
      $(this).html($(this).html() == '<i class="glyphicon glyphicon-remove"></i> Show commentary' ? '<i class="glyphicon glyphicon-ok"></i> Hide commentary' : '<i class="glyphicon glyphicon-remove"></i> Show commentary');
    }
  );

  $('a').each(function(){
    var classes   = $(this).attr('class');
    var target    = $(this).data('target');
    var href      = $(this).attr('href');

    if( $(this).attr('onclick') ){}
    else if(target){
      $(this).attr('onclick',"_gaq.push(['_trackEvent', 'Modal', 'Page "+page + ", Comment " +target+"']);");
    } else {
      $(this).attr('onclick',"_gaq.push(['_trackEvent', 'Click', 'Page "+page + ", Target " +href+"']);");
    }
  });




});