

window.addEvent('domready', function() {


$$('#banner').removeClass('banner-hover');
    var banner_effect = new Fx.Morph('banner', {duration: 500, transition: Fx.Transitions.Sine.easeOut});
    $$('#banner').addEvent('mouseover', function(){
        banner_effect.stop();   
        banner_effect.start({
        'margin-top':0
    });
    });
    
       $$('#banner').addEvent('mouseout', function(){
        banner_effect.stop();   
        banner_effect.start({
        'margin-top':-30
    });
    });
       var menu_items_text = $$(".menu-items-text");
       menu_items_text.removeClass("menu-items-text-hover");
       menu_items_text.setStyle('display','block');
       menu_items_text.fade("out");
    $$("#menu-wrapper").removeClass("menu-hover");
    $$("#menu-wrapper").setStyle('margin-right','-70px');
    var menu_effect = new Fx.Morph('menu-wrapper', {duration: 500, transition: Fx.Transitions.Sine.easeOut});

   // var menu_text_effect =	Fx.Morph(menu_items_text,{duration: 500, transition: Fx.Transitions.Sine.easeOut});
        $$('#menu-wrapper').addEvent('mouseover', function(){
  
        menu_effect.stop();   
        menu_effect.start({
        'margin-right':0
        });
        //menu_text_effect.stop();
        menu_items_text.fade("in");
        
    });
    
       $$('#menu-wrapper').addEvent('mouseout', function(){
        menu_effect.stop();   
        menu_effect.start({
        'margin-right':-70
    });

       // menu_text_effect.stop();
        menu_items_text.fade("out");
    });
       

       
       
       
       
       
       
});
