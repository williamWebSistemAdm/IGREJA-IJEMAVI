var imagens=["img/san1.jpg","img/san2.jpg","img/san3.jpg"];
var imagensAtual = 0;

function trocaImagem() {
	imagensAtual =  (imagensAtual + 1) % 3;
	document.querySelector('.jpg img').src = imagens[imagensAtual];
}

setInterval (trocaImagem, 2500);
