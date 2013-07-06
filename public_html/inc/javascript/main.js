var homePageBanner = null;

window.addEvent('domready', function() {
    homePageBanner = new Banner($("banner-ul"), 5000, 2, 3, 4, function (banner) {
        banner.setStyle("overflow", "hidden");
        banner.set('morph', {duration: 2000, transition: 'bounce:in', onComplete: function (banner) {
                banner.setStyles({
                                    "top":  null,
                                    "display": "none"
                                 })
            }
        });
        banner.morph({top: "-1265px"});
    }, function (slideshow) {
	updateSlideShowNav(slideshow);
    });
});

function updateSlideShowNav(slideshow)
{
        for(i = 0; i < slideshow.banners.length; i++)
        {
            if(i == slideshow.currentBanner){
                $("banner-navigation").getChildren()[0].getChildren()[i].removeClass("banner-nav-deactive")
                $("banner-navigation").getChildren()[0].getChildren()[i].addClass("banner-nav-active")
            } else {
                $("banner-navigation").getChildren()[0].getChildren()[i].removeClass("banner-nav-active")
                $("banner-navigation").getChildren()[0].getChildren()[i].addClass("banner-nav-deactive")
            }
        }
}
