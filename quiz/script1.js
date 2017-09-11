// Two methods for timers - setTimeout and SetInterval (single / repeating)

function simpleMessage() {
	alert("logo images will change in 2 seconds");
}

// settimeout is in milliseconds
setTimeout(simpleMessage,2000);

var myImage = document.getElementById("logo image");

var imageArray = ["_images/logo.jpeg","_images/outbox_1.jpg","_images/headerimage.jpg",
				  "_images/diamond-05.jpg","_images/Chess_move.jpg","_images/aryabhatta.jpg"];
var imageIndex = 0;

function changeImage() {
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
	}
}

// setInterval is also in milliseconds
var intervalHandle = setInterval(changeImage,2000);

//myImage.onclick =  function() {
	clearInterval(intervalHandle);
};









