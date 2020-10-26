// window.onload = initPage;

// function initPage(){
// 	alert("conectado!")
// }


    for(let i = 1; i < 13; i++){
    var html =   '<figure class="col-md-4">'
        html +=    '<a href="img/whatsaap/img'+i+'.jpeg" data-size="1600x1067">'
        html +=      '<img alt="picture" src="img/whatsaap/img'+i+'.jpeg" class="img-fluid rounded">'
        html +=   ' </a>'
        html +=  '</figure>'
    		document.getElementById("img_auto").innerHTML += html;

    }

// document.getElementById("img_auto").innerHTML += html;


// carousel do rodapé
    for(let i = 2; i < 5; i++){
var img_footer =   '<div class="carousel-item ">'
    img_footer +=     '<img class="d-block w-100 rounded img-fluid" src="img/whatsaap/mosaico'+i+'.jpg" alt="Second slide">'
    img_footer +=  '</div>'
        document.getElementById("img_carousel_footer").innerHTML += img_footer;

    }

    document.getElementById("img_carousel_footer").innerHTML += img_footer;

    
      
    

$('ul a').click(function(e){
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
        $('html, body').animate({
            scrollTop: targetOffset - 110
        }, 500);


    if(document.getElementById('check').checked){  
        document.getElementById('check').checked = false;    
    }
    else if (document.getElementById('check').checked){  
        document.getElementById('check').checked = false;
    }

});


function calculoMedia()
{

    if(document.getElementById("calculo").innerHTML == ""){

    var media;
    var valor;

    var n1 = parseInt(document.getElementById('n1').value);
    var n2 = parseInt(document.getElementById('n2').value);
    var calculo = document.getElementById("calculo");

      media = (n1 * n2);
      valor = 65 * media;

        if (media > 15) {


      
      
          
          // alert("Orçamento: " + media + "");

            calculo.innerHTML += media+" m² <br>"+" Aproximadamente = "+valor+" R$";
            document.getElementById('calculador').style.display = 'none';
            document.getElementById('whatsapp').style.display = 'block';

        }else{
            calculo.className = "text-danger border border-danger rounded mx-auto";
            document.getElementById("calculo").innerHTML +=" Taxa mínima de instalação 15 m²";
            document.getElementById('calculador').style.display = 'none';
            document.getElementById('formulario_orc').style.display = 'none';
            document.getElementById('whatsapp').style.display = 'block';
        }

    }else{
        alert("Orçamento já calculado")
    }
}