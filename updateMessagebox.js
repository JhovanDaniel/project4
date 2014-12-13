window.onload = function(){
document.getElementById("readb").onclick = changeColor;
}

var changeColor = function(){

	var radio = document.querySelectorAll('.messageradio');
    var i = 0;
    var select = 0;

	while (i < radio.length) {
	    if (radio[i].checked) {
	        select = i + 1;
	        i = i + 1;
	    }

		else {
		    i = i + 1;
		}
	}

	window.location.href = "updateMessage.php?select=" + select; 

}