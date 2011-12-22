function load_sample(id)
{

	new Ajax.Request('portfolio/portfolio.php',
	  {
	    method:'post',
	    parameters: {element_id: id},
	    onSuccess: function(transport){
	      var response = transport.responseText;
	      var info	=	response.split('|');
	      document.getElementById('portfolio_pic').innerHTML 	= '<a href ="'+info[1]+'"><img src ="'+info[0]+'" /></a>';
	      document.getElementById('portfolio_url').innerHTML 	= '<a href ="'+info[1]+'">'+info[1]+'</a>';
	      document.getElementById('portfolio_name').innerHTML 	= '<a href ="'+info[1]+'">'+info[2]+'</a>';
	      document.getElementById('portfolio_end').innerHTML 	= info[3];
	      document.getElementById('portfolio_des').innerHTML 	= info[4];
	      document.getElementById('portfolio_price').innerHTML 	= info[5];
	    },
	    onFailure: function(){ alert('Something went wrong...'); }
	  });
}