var homePageBanner = null;

window.addEvent('domready', function() {
    homePageBanner = new Banner($("banner-ul"), 5000, 2, 3, 4, function (banner) {
        banner.setStyle("overflow", "hidden");
        banner.set('morph', {duration: 700, onComplete: function (banner) {
                banner.setStyles({
                                    "opacity":  1.0,
                                    "display": "none"
                                 })
                banner.getChildren()[0].setStyle('display', 'none');
                nextBannerChild = banner.getNext().getChildren()[0];
		        nextBannerChild.fade('in');
		        nextBannerChild.setStyle('display', 'block');
            }
        });
        banner.morph({opacity: 0});
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
