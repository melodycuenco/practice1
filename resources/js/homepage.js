

// SLIDESHOW SCRIPT  START--------------------------
		
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() {
		  $('#slideshow > div:first')
		    .fadeOut(0)
		    .next()
		    .fadeIn(2000)
		    .end()
		    .appendTo('#slideshow');
		}, 5000);

// SMOOTH SCROLL SCRIPT -------------------------->
 	
		window.smoothScroll = function(target) {
		    var scrollContainer = target;
		    do { //find scroll container
		        scrollContainer = scrollContainer.parentNode;
		        if (!scrollContainer) return;
		        scrollContainer.scrollTop += 1;
		    } while (scrollContainer.scrollTop == 0);

		    var targetY = 0;
		    do { //find the top of target relatively to the container
		        if (target == scrollContainer) break;
		        targetY += target.offsetTop;
		    } while (target = target.offsetParent);

		    scroll = function(c, a, b, i) {
		        i++; if (i > 30) return;
		        c.scrollTop = a + (b - a) / 30 * i;
		        setTimeout(function(){ scroll(c, a, b, i); }, 20);
		    }
		    // start scrolling
		    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
		}


// Map SCRIPT -------------------------->
function myMap() {
		var positionDetails = {lat: 10.3540762, lng: 123.91157580000004};
		var mapOptions = {
		    center: new google.maps.LatLng(10.3540762, 123.91157580000004),
		    zoom: 16,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);

		var marker = new google.maps.Marker({position: positionDetails, map: map});

		}
		
		

		