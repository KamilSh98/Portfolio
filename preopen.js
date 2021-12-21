
var dzwiek = new Audio("woda.mp3")

var preopen = document.getElementById("preopen");
window.onscroll = function () { window.scrollTo(0, 0); };

setTimeout(function(){ 
    var msg = document.getElementsByClassName("preopen");
    while(msg.length > 0){
        msg[0].parentNode.removeChild(msg[0]);
        preopen.style.display = "none";
        window.onscroll=function(){};
        }
    }, 7000);

