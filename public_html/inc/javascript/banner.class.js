var Banner = new Class({
    initialize: function (wrapper, interval, zIndexLow, zIndexMid, zIndexHigh, transition, onChange) {
        this.wrapper    = wrapper;
        this.banners    = wrapper.getChildren();
        this.zIndexLow  = zIndexLow;
        this.zIndexMid  = zIndexMid;
        this.zIndexHigh = zIndexHigh;
        this.transition = transition;
        this.onChange   = onChange;
        this.interval   = interval;
        this.intervalId = null;
        this.currentBanner = 0;
        
        // this.selectBanner(1);
        
        this.start.delay(interval, this);
    },
    
    selectBanner: function (id) {
    	if(this.currentBanner == id)
    		return;
    	
        for(i = 0; i < this.banners.length; i++)
        {
            if(i == this.currentBanner)
                this.banners[i].setStyle("z-index", this.zIndexHigh);
            else if(i == id)
                this.banners[i].setStyle("z-index", this.zIndexMid);
            else
                this.banners[i].setStyle("z-index", this.zIndexLow);
            
            this.banners[i].setStyle("display", "block");
        }
        this.transition(this.banners[this.currentBanner]);
        this.currentBanner = id;
        
        try{
            this.onChange(this);
        } catch(e) {}
    },

    next: function () {
        this.selectBanner((this.currentBanner + 1) % this.banners.length);
    },
    
    previous: function () {
        this.selectBanner((this.currentBanner - 1 + this.banners.length) % this.banner.length);
    },
    
    start: function () {
        this.intervalId = this.next.periodical(this.interval, this);
    },
    
    stop: function () {
        clearInterval(this.intervalId);
    },
});
