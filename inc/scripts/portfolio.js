var drop_box_loading_effect =   null;
var drop_box_content_effect	=	null;
function load_sample(id)
{

	new Ajax.Request('portfolio/portfolio.php',
	  {
	    method:'post',
	    parameters: {element_id: id},
	    onSuccess: function(transport){
	      var response = transport.responseText;
	      var info	=	response.split('|');
	      $('portfolio_pic').innerHTML 		= '<a href ="'+info[1]+'"><img src ="'+info[0]+'" /></a>';
	      $('portfolio_name').innerHTML 	= '<a href ="'+info[1]+'">'+info[2]+'</a>';
	      $('portfolio_end').innerHTML 		= info[3];
	      $('portfolio_des').innerHTML 		= info[4];
	      $('portfolio_price').innerHTML 	= info[5];
	      if(drop_box_content_effect)
	    	  drop_box_content_effect.cancel();
	      drop_box_content_effect = new Effect.BlindDown($('drop-box-content'));
	    },
	    onFailure: function(){ alert('We are really sorry about this. Something went wrong...'); }
	  });
	if(drop_box_loading_effect)
		drop_box_loading_effect.cancel();
	drop_box_loading_effect	=	new Effect.Appear($('drop-box-loading'));
}