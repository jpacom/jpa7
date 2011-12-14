var InputAutoDefault = Class.create(
  {
	initialize:	function ()
	  {
		var inputs = document.getElementsByTagName('input');
		for(var i = 0; i < inputs.length; i++)
		  {
		  	if((inputs[i].type == 'text') || (inputs[i].type == 'password'))
				this.setEvents(inputs[i]);
		  }
	  },
	
	setEvents:	function (input)
	  {
		input.onfocus	= this.focus;
		input.onblur	= this.blur;
		
		input.defaultV	= input.value;
	  },
	
	focus:		function (oEvent)
	  {
		oEvent	= oEvent		|| window.event;
		target	= oEvent.target	|| oEvent.srcElement; 
		
		if(target.hasClassName('default'))
		  {
			target.value 	= '';
			target.removeClassName('default');
		  }
	  },
	
	blur:		function (oEvent)
	  {
		oEvent	= oEvent		|| window.event;
		target	= oEvent.target	|| oEvent.srcElement;
		
		if(target.value == '')
		  {
			target.value 	= target.defaultV;
			target.addClassName('default');
		  }
	  }
  });

var Banner	= Class.create(
  {
	initialize:	function (wrapper_id, delay, duration)
	  {
		this.wrapper	= $(wrapper_id);
		this.width		= this.wrapper.getWidth();
		this.height		= this.wrapper.getHeight();
		this.slides		= this.wrapper.childElements();
		this.pExec		= null;
		this.delay		= delay;
		this.current	= 0;
		this.duration	= duration;
		
		this.wrapper.setStyle({overflow: 'hidden', position: 'relative'});
		
		for(this.i = 0; this.i < this.slides.length; this.i++)
		  {
		  	this.styles	= {position: 'absolute', overflow: 'hidden', display: 'block'};
		  	if(this.i != 0)
		  	  {
		  		this.styles['zIndex']	= '0';
		  	  }
		  	else
		  	  {
		  		this.styles['zIndex']	= '1';
		  	  }
			this.slides[this.i].setStyle(this.styles);
		  }
		  
		  this.start();
	  },
	
	start:		function ()
	  {
		if(!this.pExec)
		  {
			this.pExec			= new PeriodicalExecuter(this.next, this.delay);
			this.pExec.slides	= this.slides;
			this.pExec.current	= this.current;
			this.pExec.duration	= this.duration;
		  }
	  },
	
	stop:		function ()
	  {
		if(this.pExec)
		  {
			this.pExec.stop();
		  }
	  },
	
	next: function ()
	  {
		for(this.i = 0; this.i < this.slides.length; this.i++)
		  {
		  	if(this.current != this.i){
				this.slides[this.i].setStyle({zIndex: '0'});
				this.slides[this.i].hide();
		  	}
		  }
		
	  	this.slides[this.current].setStyle({zIndex: '2'});
	  	
	  	this.previous = this.current;
	  	this.current++;
	  	this.current = this.current % this.slides.length;
	  	
		this.slides[this.current].show();
	  	this.slides[this.current].setStyle({zIndex: '1'});
		this.slides[this.previous].fade({duration: this.duration});
		this.slides[this.previous].blindUp({duration: this.duration});
		
//		this.pExec			= new PeriodicalExecuter(function ()
//		  {
//			this.slide.setStyle({zIndex: '1'});
//			this.stop();
//		  }, 0.05);
//		this.pExec.slide	= this.slides[this.current];
	  }
  });
