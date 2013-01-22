
var puzzle_effect = null;
var menu_items = null;
var drag_effect = null;
var portfolio_info_effect = null;
var successful_drag = false;
document.observe('dom:loaded', function() {

	var banner = new Banner('banner-wrapper2', 5, 1);

	var banner2 = new Banner('banner2-wrapper2', 5, 1);
	
	$('banner-wrapper').removeClassName('banner-hover');
    var banner_effect = null;
    var menu_effect = null;
    
    $('banner-wrapper2').observe('mouseover', function(){
    	if (banner_effect)
    		banner_effect.cancel();
    	
    	banner_effect = new Effect.Morph('banner-wrapper', {style:{top: '0px'}, duration: 0.5});
    });
    
    $('banner-wrapper2').observe('mouseout', function(){
    	if (banner_effect)
    		banner_effect.cancel();
    	
    	banner_effect = new Effect.Morph('banner-wrapper', {style:{top: '-23px'}, duration: 0.5});
    });
    

//    $("menu-wrapper").removeClassName("menu-hover");
//    $("menu-wrapper").removeClassName("menu-hover-text");
//    $("menu-wrapper").setStyle({right: '0'});
//    
//  
//       $$(".menu-items-text").each(function(menu_items_text){
//  
//	       menu_items_text.removeClassName("menu-items-text-hover");
//	       menu_items_text.hide();
//       });
//
//       
//       $('menu-wrapper').observe('mouseenter', function(){
//			if(menu_effect)
//				menu_effect.cancel();   
//	        menu_effect = new Effect.Morph('menu-wrapper', {style:{right: '0px'}, duration: 0});
//	       
//	        $$(".menu-items-text").each(function(menu_items_text){
//				if(menu_items_text.effect)
//					menu_items_text.effect.cancel();
//				menu_items_text.effect = new Effect.Appear(menu_items_text);
//	        });
//       });
//
//		$('menu-wrapper').observe('mouseleave', function(){
//		  if(menu_effect)
//				menu_effect.cancel();   
//		   menu_effect = new Effect.Morph('menu-wrapper', {style:{right: '0'},duration: 0.5});
//		
//		$$(".menu-items-text").each(function(menu_items_text){
//			if(menu_items_text.effect)
//				menu_items_text.effect.cancel();
//			menu_items_text.effect = new Effect.Fade(menu_items_text);
//		});
//
//    });
       

  $("puzzle-block").removeClassName('puzzle-hide');
  
  $("puzzle-block").hide();
  $("sample-work-4").observe('mouseover',function(){
	  if (puzzle_effect)
		  puzzle_effect.cancel();
	  puzzle_effect = new Effect.Appear($("puzzle-block"));

  });
  
  //sign
  $("sample-work-4").observe('mouseout',function(){
	  if (puzzle_effect)
		  puzzle_effect.cancel();
	  puzzle_effect = new Effect.Fade($("puzzle-block"));
  });
    
  $('page-fade-black').observe('click',function(){
	  $('page-fade-black').setStyle({zIndex:4});
	  $('drag-here').setStyle({zIndex:4});
	  if ( drag_effect)
		  drag_effect.cancel();
	  drag_effect = new Effect.Fade($('drag-here'));
	  if(portfolio_info_effect)
		  portfolio_info_effect.cancel();
	  portfolio_info_effect	=	new Effect.Fade($('drop-box-content'));
	  $('drop-box-loading').hide();
  });
       
       
  $('drag-here').removeClassName('display-none');
  $('drag-here').hide();
  $$(".sample-work-child").each(function(e){
	  e.setStyle({'z-index': 5});
	  
	  new Draggable(e, { 
		  revert: true 
		  ,onDrag : function()
		  	{
		  		//appear drag box
		  		  successful_drag = false;
				  if (drag_effect)
					  drag_effect.cancel();
				  drag_effect = new Effect.Appear($('drag-here'),{duration:0.2});
		  	},
		  	onEnd: function ()
		  	{
		  		if(!successful_drag)
		  		{
					  if (drag_effect)
						  drag_effect.cancel();
					  drag_effect = new Effect.Fade($('drag-here'),{duration:0.2});
		  		}
		  	}
	  });
  });
       

  
  Droppables.add('drop-here-wrapper', { 
	    accept: 'sample-work-child',
	    hoverclass: 'hover',
		    onDrop: function(draged) {
	  		  successful_drag = true;
			  $('page-fade-black').setStyle({zIndex:6});
			  $('drag-here').setStyle({zIndex:6});
			  load_sample(draged.id);
  		}
	  });
       
       
});

