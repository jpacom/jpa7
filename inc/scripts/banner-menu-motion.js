
var puzzle_effect = null;
var menu_items_effect = null;
var drag_effect = null;
document.observe('dom:loaded', function() {

$('banner').removeClassName('banner-hover');
    var banner_effect_down = new Effect.Morph('banner', {style:'margin-top:0;',duration: 500});
    var banner_effect_up = new Effect.Morph('banner', {style:'margin-top:-30;',duration: 500});
    
    $('banner').observe('mouseover', function(){
    	banner_effect_up.cancel();
    	banner_effect_down.start();
    });
    

    $('banner').observe('mouseout', function(){
    	banner_effect_down.cancel();
    	banner_effect_up.start();
    });
       
       $$(".menu-items-text").each(function(menu_items_text){
	       menu_items_text.removeClassName("menu-items-text-hover");
	       menu_items_text.removeClassName("display-none");
	       menu_items_text.addClassName("display-block");
	       menu_items_text.fade();
       });
       
    $("menu-wrapper").removeClassName("menu-hover");
    $("menu-wrapper").setStyle('margin-right:-70px');
    
    var menu_effect_left = new Effect.Morph('menu-wrapper', {style:'margin-right:0;',duration: 500});
    var menu_effect_right = new Effect.Morph('menu-wrapper', {style:'margin-right:-70px;',duration: 500});

        $('menu-wrapper').observe('mouseover', function(){
  
			        menu_effect_right.cancel();   
			        menu_effect_left.start();
			       
			        $$(".menu-items-text").each(function(menu_items_text){  
			 	       menu_items_text.appear();
			        });
        	});
    
       $('menu-wrapper').observe('mouseout', function(){
           menu_effect_left.cancel();   
           menu_effect_right.start();

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
	  if ( drag_effect)
		  drag_effect.cancel();
	  drag_effect = new Effect.Appear($('drag-here'));
  });
  
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
	  
  new Draggable(e, { 
	    revert: true 
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


