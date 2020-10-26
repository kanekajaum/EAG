

function dispositivo(){
// alert("esta chegando mas a funcão esta errada!!!");
   if( navigator.userAgent.match(/Android/i)
   || navigator.userAgent.match(/webOS/i)
   || navigator.userAgent.match(/iPhone/i)
   || navigator.userAgent.match(/iPad/i)
   || navigator.userAgent.match(/iPod/i)
   || navigator.userAgent.match(/BlackBerry/i)
   || navigator.userAgent.match(/Windows Phone/i)
   ){        
      window.open('https://api.whatsapp.com/send?phone=+55(67)99245-8052');
    } else {
        $('#modalacademy').modal('hide');
        $('#myModal').modal('show');
    }
}

var myVideo = document.getElementById("video"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 



// function myFunction() {
//   document.getElementById("check_1").style.onclick="myFunctionClear()";
// }
function  myFunction() {
    if(document.getElementById('check').checked){  
        document.getElementById('check').checked = false;    
    }
    else if (document.getElementById('check').checked){  
        document.getElementById('check').checked = false;
    }
}


      $('ul a').click(function(e){
      e.preventDefault();
      var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
      $('html, body').animate({
        scrollTop: targetOffset
      }, 550);

      });
    function typeWhite(elemento){
      const textoArray = elemento.innerHTML.split('');
      elemento.innerHTML = '';
      textoArray.forEach((letra, i) =>{
        setTimeout(() =>  elemento.innerHTML += letra , 75 * i)
      });
    }


      var titulo = document.querySelector('#escrita');
      typeWhite(titulo);






