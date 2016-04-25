$(function(){
	$('.blog .two_thirds img').each(
		function() {
			var maxW = 470;
				w=this.width;
		   	h=this.height;
				if (w > maxW) {
					f=1-((w - maxW) / w);
					this.width=w * f;
					this.height=h * f;
				}
			if(this.width > 300) {
				$(this).addClass("largePhoto");
			} else {
				$(this).addClass("smallPhoto");
			}
		}
	);
});
