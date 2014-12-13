window.onload = function() {
	changePage();
};

var changePage = function(){

	var messagePage = document.getElementById("messagesb");
	messagePage.onclick = messageGo;
	var composePage = document.getElementById("composeb");
	composePage.onclick = composeGo;



}

var messageGo = function(){
	window.location.href = 'messageRead.php';
}

var composeGo = function(){
	window.location.href = 'messageCompose.php';
}