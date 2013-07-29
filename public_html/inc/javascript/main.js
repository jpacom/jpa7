var homePageBanner = null;

window.addEvent('domready', function() {
    homePageBanner = new Banner($("banner-ul"), 10000, 2, 3, 4, function (banner) {
        banner.setStyle("overflow", "hidden");
        banner.set('morph', {duration: 900, onComplete: function (banner) {
                banner.setStyles({
                                    "opacity":  1.0,
                                    "display": "none"
                                 })
                updateBannerSomething();
            }
        });
        banner.morph({opacity: 0});
        bannerChildren = banner.getChildren()[0].getChildren();
        bannerChildren[0].set('morph', {duration: 800});
        bannerChildren[1].set('morph', {duration: 800});
        bannerChildren[0].morph({'right': 'auto', 'right': window.getSize().x + 100});
        bannerChildren[1].morph({'right': '-430px'});
    }, function (slideshow) {
		updateSlideShowNav(slideshow);
    });
    updateBannerSomething();
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

function updateBannerSomething() {
    bannerId = (homePageBanner.banners.length + homePageBanner.currentBanner - 1) % homePageBanner.banners.length;
    homePageBanner.banners[bannerId].getChildren()[0].setStyle('display', 'none');
    nextBannerChild = homePageBanner.banners[homePageBanner.currentBanner].getChildren()[0];
	children = nextBannerChild.getChildren();
	children[0].setStyles({'position': 'absolute', 'bottom': '134px', 'right': '-430px'});
	children[1].setStyles({'position': 'absolute', 'top': '300px', 'right': '-430px'});
    nextBannerChild.set('morph', {'duration': 400, onComplete: function (nextBannerChild){
    	children = nextBannerChild.getChildren();
    	children[0].set('morph', {duration: 400});
    	children[1].set('morph', {duration: 400});
    	children[0].morph({'right': '0'});
    	children[1].morph({'right': '0'});
    }});
    nextBannerChild.setStyle('opacity', '0');
    nextBannerChild.setStyle('display', 'block');
    nextBannerChild.morph({opacity: 1});
}
