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

  if (window.XMLHttpRequest){
        var xmlhttp = new XMLHttpRequest();
    }
    else {
         xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        
    }

    alert('test');
    
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            // var xmlDoc=xmlhttp.responseXML;
            alert(xmlhttp.responseText);
        }
      }
        
 
    //document.getElementById("check").checked = true;
    xmlhttp.open('GET', 'updateMessage.php?offset=' + select , true);
    xmlhttp.send();
    alert(xmlhttp.responseText);
}
