function saiseiPlay(els, index) {
	// Reset index if we reached the end
	if(index >= els.length) {
		index = 0;
	}

	// Set how long a slide should play (uses data-saiseitime if available)
	// Defaults to 5000 ms and only applies to images and iframes
	var saiseiTime = 5000;
	if(els[index].dataset.saiseitime) {
		saiseiTime = els[index].dataset.saiseitime;
	}

	// Show the current slide
	els[index].classList.add("active");

	if(els[index].tagName == "VIDEO") {
		// Play the current video from second 0
		els[index].currentTime = 0;
		els[index].play();

		els[index].onended = function(){
			// Hide the current video when it has reached the end
			els[index].classList.remove("active");

			// Go to the next slide
			saiseiPlay(els, index+1);
		}
	}
	else if(els[index].tagName == "IMG") {
		window.setTimeout(function(){
			// Hide the current image after x amount of time
			els[index].classList.remove("active");

			// Go to the next slide
			saiseiPlay(els, index+1);
		}, saiseiTime);
	}
	else if(els[index].tagName == "IFRAME") {
		window.setTimeout(function(){
			// Hide the current iframe after x amount of time
			els[index].classList.remove("active");

			// Go to the next slide
			saiseiPlay(els, index+1);
		}, saiseiTime);
	}
}

// Saisei!
saiseiPlay(document.getElementsByClassName("saisei-slide"), 0);