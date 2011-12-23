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
	      $('portfolio_url').innerHTML 		= '<a href ="'+info[1]+'">'+info[1]+'</a>';
	      $('portfolio_name').innerHTML 	= '<a href ="'+info[1]+'">'+info[2]+'</a>';
	      $('portfolio_end').innerHTML 		= info[3];
	      $('portfolio_des').innerHTML 		= info[4];
	      $('portfolio_price').innerHTML 	= info[5];
	      
	      $('drop-box-content').blindDown();
	    },
	    onFailure: function(){ alert('We are really sorry about this. Something went wrong...'); }
	  });
	$('drop-box-loading').appear();
}