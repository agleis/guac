// about page
// hover function for guac members

function showBio(element) {

	var x = $(element).position().left + 100;
    var y = $(element).position().top - 335;

	var box = element.childNodes[0];
	
	box.style.visibility = "visible";
	box.style.top = y + 'px' ;
	box.style.left = x + 'px';
}

function hideBio(element) {
	var box = element.childNodes[0];
	box.style.visibility = "hidden";
}