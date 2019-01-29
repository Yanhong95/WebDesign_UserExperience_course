//Title constructor function that creates a Title object
function Title(t1) 
{ this.mytitle = t1;
}

Title.prototype.getName = function () 
{ 
return (this.mytitle);
}
var socialMedia = {
  facebook : 'http://facebook.com',
  twitter: 'http://twitter.com',
  flickr: 'http://flickr.com',
  youtube: 'http://youtube.com'
};

var t = new Title("CONNECT WITH ME!");


var numberOfclick = 1;
function elementDisplay1(){   
    numberOfclick++;
    if (numberOfclick%2 == 0) {
	document.getElementById("drop1").style.display="";	
    }
    else{
    document.getElementById("drop1").style.display="none";	
    }
}
function elementDisplay2(){  
	numberOfclick++;
    if (numberOfclick%2 == 0) {
	document.getElementById("drop2").style.display="";	
    }
    else{
    document.getElementById("drop2").style.display="none";	
    }
}
function elementDisplay3(){  
	numberOfclick++;
    if (numberOfclick%2 == 0) {
	document.getElementById("drop3").style.display="";
    }
    else{
    document.getElementById("drop3").style.display="none";	
    }
}

    var btn = document.getElementById('button');
    btn.style.background = "gray";
    btn.style.border = "gray";

function changeColor(own) {
    var grandfather = own.parentNode.parentNode;
    var choice = document.getElementsByTagName("input");
    if( own.checked ){
    grandfather.style.background =  'yellow';
    }
    else{
    grandfather.style.background =  'white';
    };
    for( var i = 0; i < choice.length ; i++){
    if(choice[i].checked){
    btn.style.background =  'orange';
    break;
	}
    btn.style.background =  'gray';
    }
    }























