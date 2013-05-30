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
    });
});
