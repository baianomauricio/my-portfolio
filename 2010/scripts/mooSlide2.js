// mooSlide v2.0 revamp
// copyright ©2008 artViper designstudio, all rights reserved
// you can use this class freely as long as the used code stays intact
// if you wish to use it in a commercial project, please drop us a line
// admin[at]artviper.net - www.artviper.net / www.artviper.net/en
	var mooSlide2 = new Class({
		options:	{
						slideSpeed: 500,
						fadeSpeed:	500,
						effects:	Fx.Transitions.linear,
						toggler:	"myToggle",
						contentID:	 null,
						removeOnClick: true,
						from:		'bottom',
						opacity:	1,
						height:		0,
						isOpen:		0
					},
					
		initialize:	function(options){
			this.setOptions(options);
			if(options['toggler']) this.toggler = options['toggler'];
			if(options['content']) this.content = $(options['content']);
			if(options['height']) this.height = options['height'];
			if(options['opacity']) this.opacity = options['opacity'];
			if(options['slideSpeed']) this.slideSpeed = options['slideSpeed'];
			if(options['fadeSpeed']) this.fadeSpeed = options['fadeSpeed'];
			if(options['removeOnClick']) this.removeOnClick = options['removeOnClick'];
			if(options['from']) this.from = options['from'];
			
			if(this.removeOnClick){	
			$(this.content).addEvent('click',this.clearit.bindWithEvent(this));
			}	
			
			if(options['effects']){
				this.effects = options['effects'];
			}else{
				this.effects = Fx.Transitions.linear;
			}
			this.content.setStyle('opacity','1');
			this.content.setStyle('visibility','hidden');	
			$(this.content).setStyle('z-index','5000');	
			$(this.toggler).addEvent('click',this.toggle.bindWithEvent(this));
				
		},
		
		clearit: function(){
			
					$(this.content).effect('opacity', {duration: this.fadeSpeed, transition: Fx.Transitions.linear }).start(1,0);
					this.isOpen = 0;
			
		},
		
		toggle: function(e){
			e = new Event(e).stop();
			var top =  window.getHeight().toInt() + window.getScrollTop().toInt();
			var width;
			
			if (document.documentElement && document.documentElement.clientWidth) {
				width=document.documentElement.clientWidth;
			}else if (document.body) {
				width=document.body.clientWidth;
			}
			
			var pad1 = $(this.content).getStyle('padding-left').toInt();
			var pad2 = $(this.content).getStyle('padding-right').toInt();
			
			width =  width - (pad1+pad2+5);
			
			if(!window.ie){
				//width -= 15;
			}
			
			if(!this.isOpen){
		
				$(this.content).setStyle('position','absolute');			
				$(this.content).setStyle('top',top);
				$(this.content).setStyle('height',this.height);
			    $(this.content).setStyle('visibility','visible');
				$(this.content).setStyle('opacity',this.opacity);
				$(this.content).setStyle('width',width);
				$(this.content).setStyle('left','0');
				
				var end;
				if(this.from == "bottom"){				
					end = top - this.height;
				}else{
					end = document.getScrollTop().toInt() - this.height;
				}
				
				if(this.from == "bottom"){
					$(this.content).effect('top',{ duration: this.slideSpeed, wait:false, transition:this.effects}).start(top,end);
					this.isOpen = 1;
				}else{
					$(this.content).effect('top',{ duration: this.slideSpeed, wait:false, transition:this.effects}).start(end,end+this.height);
					this.isOpen = 1;
				}
			
			}else{
			var myEffects = new Fx.Styles(this.content, {duration: this.fadeSpeed, transition: Fx.Transitions.linear});
			myEffects.start({
   				 'opacity': [1, 0]
			});
				
				this.isOpen = 0;
			}
		}
	})
	
mooSlide2.implement(new Options, new Events);