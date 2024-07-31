// $(".banner").slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: true,
//   dots: true,
//   autoplaySpeed: 3000,
// });

// Menu Mobile

document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-ativo");
};
document.querySelector(".fechar-menu").onclick = function () {
  document.documentElement.classList.remove("menu-ativo");
};

// animações AOS

AOS.init();

// menu fixo na tela

window.onscroll = function () {
  var top = window.scrollY || document.documentElement.scrollTop;

  if (top > 50) {
    // console.log("adicionar menu fixo");
    document.getElementById("topoFixo").classList.add("menu-fixo");
    document.getElementById("topoFixo").classList.remove("site");
  } else {
    // console.log("remover menu fixo");
    document.getElementById("topoFixo").classList.remove("menu-fixo");
    document.getElementById("topoFixo").classList.add("site");
  }
};

// identificar qual bloco está ativo e dar display block, caso contrario, display none
var btnMissao = document.querySelector("#btn-missao");
var btnVisao = document.querySelector("#btn-visao");
var btnValores = document.querySelector("#btn-valores");

var missao = document.querySelector("#missao");
var visao = document.querySelector("#visao");
var valores = document.querySelector("#valores");
var imgMvv = document.querySelector("#img-mvv");

// // Esconder as seções "Visão" e "Valores" no carregamento inicial
document.addEventListener("DOMContentLoaded", function () {
  missao.style.display = "block";
  visao.style.display = "none";
  valores.style.display = "none";

  // Função para mostrar a seção de Missão e definir a imagem correspondente
  btnMissao.addEventListener("click", function () {
    missao.style.display = "block";
    visao.style.display = "none";
    valores.style.display = "none";
    imgMvv.innerHTML = '<img src="img/missao.png" id="img-mvv">';
  });

  // Função para mostrar a seção de visão e definir a imagem correspondente
  btnVisao.addEventListener("click", function () {
    missao.style.display = "none";
    visao.style.display = "block";
    valores.style.display = "none";
    imgMvv.innerHTML = '<img src="img/visao.png" id="img-mvv">';
  });

  // Função para mostrar a seção de Valores e definir a imagem correspondente
  btnValores.addEventListener("click", function () {
    missao.style.display = "none";
    visao.style.display = "none";
    valores.style.display = "block";
    imgMvv.innerHTML = '<img src="img/valor.png" id="img-mvv">';
  });
});

// enviar para whatsapp

function formWhats() {
  var form = document.getElementById("formContato");

  var nome = "*Nome:* " + document.getElementById("nome").value;
  var email = "*E-mail:* " + document.getElementById("email").value;
  var tel = document.getElementById("tel").value;
  var mens = "*Mensagem:* " + document.getElementById("mens").value;

  var agencia = "*Agêngia Cloud Wise*";
  var assunto = "Mensagem do site!";

  var numFone = "5511995312845";
  var quebraDeLinha = "%0A";

  if (tel == "") {
    alert("O campo do celular é obrigatório");
    return;
  } else {
    var tel = "*Fone:* " + document.getElementById("tel").value;
  }

  window.open(
    "https://api.whatsapp.com/send?phone=" +
      numFone +
      "&text=" +
      assunto +
      " - " +
      agencia +
      quebraDeLinha +
      quebraDeLinha +
      nome +
      quebraDeLinha +
      email +
      quebraDeLinha +
      tel +
      quebraDeLinha +
      mens,
    "_blank"
  );

  form.reset();
}

// esconde e mostra o btn
$(window).scroll(function () {
  if ($(this).scrollTop() > 350) {
    // distancia que tem que rolar antes de aparecer
    $("#back-to-top").fadeIn(250);
  } else {
    $("#back-to-top").fadeOut(250);
  }
});

// botao voltar ao topo

var btn = $("#back-to-top");
btn.click(function () {
  $("html, body").animate({ scrollTop: 0 }, "slow");
});

// Sanfona duvidas frequentes

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    /* Alternar entre adicionar e remover a classe "active",
    para destacar o botão que controla o painel */
    document.getElementById("accordion").classList.add("active");

    /* Alternar entre ocultar e mostrar o painel ativo */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}


// digitando banner
var typed = new Typed('#element', {
  strings: [
    "Sua presença online voa mais alto!", 
    "Transformando ideias em resultados reais.",
    "Criamos soluções para seu negócio.",
  ],
  backSpeed: 50,
  backDelay: 300,
  typeSpeed: 80,
  loop: true,
});

// remover seta banner
document.addEventListener("DOMContentLoaded", function() {
  const arrowDown = document.querySelector(".banner-seta");
  window.addEventListener("scroll", function() {
    const scrollPosition = window.scrollY;
    if (scrollPosition > 100) {
      arrowDown.style.opacity = "0";
    } else {
      arrowDown.style.opacity = "1";
    }
  });
});

