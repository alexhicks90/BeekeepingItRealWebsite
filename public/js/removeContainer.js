
/* window.onload = function() {
    removeContainer();
}


window.addEventListener("resize", resizeThrottler, false);

var resizeTimeout;
function resizeThrottler() {
    // ignore resize events as long as an actualResizeHandler execution is in the queue
    if ( !resizeTimeout ) {
        resizeTimeout = setTimeout(function() {
        resizeTimeout = null;
        removeContainer();
        
        // The actualResizeHandler will execute at a rate of 15fps
        }, 66);
    }
}

function removeContainer() {
    
    if($(window).width() < 1200) {
        $('#productHexes').removeClass("container");
        console.log("remove container");
    } else {
        $('#productHexes').addClass("container");
        console.log("add container");
    }
} */


window.onload = function() {
    removeContainer();
}

var eventTimeout; // Set timeout variable

/**
 * The function that runs the event actions
 */
var removeContainer = function () {
	if($(document).width() < 1200) {
        $('#productHexes').removeClass("container");
        console.log("remove container");
    } else {
        $('#productHexes').addClass("container");
        console.log("add container");
    }
};

/**
 * Throttle events to only run at 15fps
 */
var eventThrottler = function () {
	// ignore resize events as long as an actualResizeHandler execution is in the queue
	if ( !eventTimeout ) {
		eventTimeout = setTimeout(function() {
			eventTimeout = null;
			removeContainer();
		 }, 66);
	}
};

// Run the event listener
window.addEventListener( 'resize', eventThrottler, false );
