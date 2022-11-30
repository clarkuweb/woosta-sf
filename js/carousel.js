(function(){

	window.addEventListener("load", init);
	
	function init() {
		var els = document.querySelectorAll(".carousel");
		if ( !! els ) {
			els.forEach(function(el) {
				var carouselItemW = el.querySelector('.track > div').clientWidth;
				el.style.setProperty( "--slide-width", carouselItemW );
				el.style.setProperty( "--slide-count", el.querySelectorAll('.track > div').length );
				el.style.setProperty( "--position", 0 );
				addButtons(el);
				updateButtons(el);
			});
		}
		
	}
	
	function addButtons(el) {
		var p = document.createElement("button");
		p.className = "previous";
		p.ariaLabel = "Previous";
		p.innerHTML = "«";
		p.addEventListener("click", move);
		el.appendChild(p);
		var n = document.createElement("button");
		n.className = "next";
		n.ariaLabel = "Next";
		n.innerHTML = "»";
		n.addEventListener("click", move);
		el.appendChild(n);
	}
	
	function updateButtons(el) {
		var position = el.style.getPropertyValue( "--position");
		var slides = el.style.getPropertyValue( "--slide-count");
		
		if(position < 1) {
			el.querySelector(".previous").disabled = true;
		} else {
			el.querySelector(".previous").disabled = false;
		}

		if(position >= slides-1) {
			el.querySelector(".next").disabled = true;
		} else {
			el.querySelector(".next").disabled = false;
		}
	}

	
	function move() {
		var p = this.parentNode.style.getPropertyValue( "--position");
		
		if( !! p ) {
			if( "next" === this.className ) {
				p++;
			}
			if( "previous" === this.className ) {
				p--;
			}
		}
		
		this.parentNode.style.setProperty( "--position", p );
		updateButtons(this.parentNode);
	}

})()