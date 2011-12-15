
var puzzle_effect = null;
var menu_items = null;
var drag_effect = null;

document.observe('dom:loaded', function() {

	//banner = new Banner('banner-wrapper2', 4, 0.5);
	
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
    	
    	banner_effect = new Effect.Morph('banner-wrapper', {style:{top: '-30px'}, duration: 0.5});
    });
    
    
    $("menu-wrapper").removeClassName("menu-hover");
    $("menu-wrapper").setStyle({right: '-75px'});
    


        
        
       
       $$(".menu-items-text").each(function(menu_items_text){
	       menu_items_text.removeClassName("menu-items-text-hover");
	       menu_items_text.removeClassName("display-none");
	       menu_items_text.addClassName("display-block");
	       menu_items_text.fade();
       });

       
       $('menu-wrapper').observe('mouseenter', function(){
			if(menu_effect)
				menu_effect.cancel();   
	        menu_effect = new Effect.Morph('menu-wrapper', {style:{right: '0px'}, duration: 0.5});
	       
	        $$(".menu-items-text").each(function(menu_items_text){  
	 	       menu_items_text.appear();
	        });
       });

		$('menu-wrapper').observe('mouseleave', function(){
		  if(menu_effect)
				menu_effect.cancel();   
		   menu_effect = new Effect.Morph('menu-wrapper', {style:{right: '-75px'},duration: 0.5});
		
		$$(".menu-items-text").each(function(menu_items_text){
		    menu_items_text.fade();
		});

    });
       

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
	  if ( drag_effect)
		  drag_effect.cancel();
	  drag_effect = new Effect.Fade($('drag-here'));
  });
  
  $("drag-here").observe('mouseover',function(){
	  if ( drag_effect)
		  drag_effect.cancel();
	  drag_effect = new Effect.Appear($('drag-here'));
  });
  
  $("drag-here").observe('mouseout',function(){
	  if ( drag_effect)
		  drag_effect.cancel();
	  drag_effect = new Effect.Fade($('drag-here'));
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
				  if ( drag_effect)
					  drag_effect.cancel();
				  drag_effect = new Effect.Appear($('drag-here'),{duration:0.2});
		  	}
	  });
  });
       

  
  Droppables.add('drag-here', { 
	    accept: 'drag-here',
	    hoverclass: 'hover',
	    onDrop: function() {
	  		$('drag-here').highlight();
	    	alert("ok");
  		}
	  });      
       
       
});


$$(".sample-work-child").each(function(e){
	e.observe('ondrag', function(){
		alert('ok');
	});
});

