
function ver(dato){
}

function mostrar(posicion){
	var dato = posicion;
	document.getElementById(posicion).style.display = "block";
}

function esconder(posicion){
	var dato = posicion;
	document.getElementById(posicion).style.display = "none";
}

/* ---------------- esta funcion es la que cambia las imagenes en el carrusel---------------*/

var carruPos = 0;

function trocarPantalla(){
	var carru = ["img/carrusel_1.png","img/carrusel_2.png","img/carrusel_3.png",
	               "img/carrusel_4.png","img/carrusel_5.png"];	

    if(carruPos < carru.length){
	document.getElementById("carrusel").style.backgroundImage = 'url("'+ carru[carruPos] +'")';
	carruPos++;
    } if (carruPos == carru.length) {
    	carruPos = 0;
    }
}             

setInterval(trocarPantalla, 5000);

/*----------------------- loading de la barra izquierda de publicidad-----------------------*/

var llena = 10;
function llenar(){
	
	if(llena <= 100){
	let cambiar = llena + "%";

    document.getElementById("subizqPubliuno").style.width = cambiar ;
    llena += 5;
    } else{
    	llena = 0;
    }
}

setInterval(llenar,100);

/*-------------------------------------------usemos DOM para colocar los libros-------------------*/


class libros{
	constructor(image,title,author,type,price){
    	this.image = image;
    	this.title = title;
    	this.author =  author;
    	this.type = type;
    	this.price = price;
	}
}	
liv_nov = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16548370-300-300/2112256622.jpg?v=637205778671900000',"Aprendendo a vicer","Luis Boudakia","Livros","R$39,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16632489-300-300/2112252079.jpg?v=637233541938130000',"Floresta encantada","Online Editorial","Livro","R$17,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16548349-300-300/2112256608.jpg?v=637205778548130000',"Cartas de MANÚ","Monica Palacios","Livro","R$35,00"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16565657-300-300/2112253978.jpg?v=637213542482300000',"A viagem De Cilka","Heather Morris","Livro","R$49,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16565657-300-300/2112253978.jpg?v=637213542482300000',"A viagem De Cilka","Heather Morris","Livro","R$49,90"]];

ebo_nov = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16540366-300-300/2013182481.jpg?v=637200868588230000',"A Tercerizacao E seus Detalhe","Valter Fernandez","eBook","R$20.00"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16485129-300-300/2013034406.jpg?v=637196165909100000',"Em seu calido olhar","Bruno Rodriguez","eBook","R$25,00"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16491332-300-300/2013044694.jpg?v=637196200966470000',"Entre o Amor E O Sacrificio","Gisele de assis","eBook","R$9,33"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16195500-300-300/111781579.jpg?v=637159078676800000',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16195500-300-300/111781579.jpg?v=637159078676800000',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"]];

fil_nov = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16371838-300-300/2112252056.jpg?v=637191411894900000',"A montanha dos 7 abutres","Billy Wilder","Filmes","R$39.99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16607085-300-300/2112253181.jpg?v=637227393524600000',"Temas De Novelas Internacionales","Vinix","Filmes","R$39,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16607085-300-300/2112253181.jpg?v=637227393524600000',"Frank Capra","Frank Capra","Filmes","R$58,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16567722-300-300/2112253851.jpg?v=637214717162630000','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16567722-300-300/2112253851.jpg?v=637214717162630000','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"]];

mus_nov = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16237009-300-300/2112116221.jpg?v=637166895319330000',"LP Bennin Goodman","Benni Goodman","Música","R$199,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16367829-300-300/2112254573.jpg?v=637189855611300000',"Nas Ondas Da Anoite","Celsinho Silva","Música","R$22,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15814445-300-300/2112243416.jpg?v=637118715330200000',"Obatalá- Uma homenagem a Mae","Grup ofa","Música","R$189,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15953938-300-300/2112182630.jpg?v=637136828804730000','Além do Tempo',"Larissa Manoela","Música","R$19,73"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15953938-300-300/2112182630.jpg?v=637136828804730000','Além do Tempo',"Larissa Manoela","Música","R$19,73"]];


cards = 0; // esta variable se usa para decirle al programa cuantas card debe hacer
cat_opc = [];
/*-------------------------------------------------------------- creacao da parte de novedades---------------------------*/        
function novCreate(value){
	switch(value){
		case "livros":
		        document.getElementById("novedades").innerHTML = "";
                cat_opc = liv_nov;
                cards = 0;
		break;
		case "ebooks":
				document.getElementById("novedades").innerHTML = "";
				cat_opc = ebo_nov;
				cards = 0;		
		break;
		case "filmes":
				document.getElementById("novedades").innerHTML = "";
				cat_opc = fil_nov;
                cards = 0;
		break;
		case "musica":
				document.getElementById("novedades").innerHTML = "";
				cat_opc = mus_nov;
                cards = 0;
		break;
		default:
                cat_opc = liv_nov;
                cards = 0;
		break;
	}

do {

cont_card = new libros(cat_opc[cards][0],cat_opc[cards][1],cat_opc[cards][2],cat_opc[cards][3],cat_opc[cards][4]);
	cards++;
	id = "id" + cards;
card = document.createElement("div");

contImg = document.createElement("img");
img = document.createTextNode("");
contImg.appendChild(img);

conTit = document.createElement("p");
tit = document.createTextNode(cont_card.title);
conTit.appendChild(tit);

conAut = document.createElement("p");
aut = document.createTextNode(cont_card.author);
conAut.appendChild(aut);

conCat = document.createElement("p");
cat = document.createTextNode(cont_card.type);
conCat.appendChild(cat);

conPre = document.createElement("p");
pre = document.createTextNode(cont_card.price);
conPre.appendChild(pre);

botCom = document.createElement("button");
compBot = document.createTextNode("Comprar");
botCom.appendChild(compBot);

card.appendChild(contImg);
card.appendChild(conTit);
card.appendChild(conAut);
card.appendChild(conCat);
card.appendChild(conPre);
card.appendChild(botCom);

contenedor = document.getElementById("novedades");
contenedor.appendChild(card);

card.setAttribute("class","estilos");
card.setAttribute("id",id);
contImg.setAttribute("class", "cardImg");
contImg.setAttribute('src', cont_card.image);
contImg.setAttribute("alt","novidades");
contImg.setAttribute("width", "100%");
conTit.setAttribute("class","cardTexto");
conAut.setAttribute("class","cardTexto");
conCat.setAttribute("class","cardTexto");
conPre.setAttribute("class","cardTexto");
botCom.setAttribute("id","botCompra");

}while(cards < 5);
}

setTimeout(novCreate(),100);
/*--------------------------------------------terminacao e comenco do Experencias do culturas------------------------------------*/
expEve =["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Set/exp-eventos.gif"]; // imagem de eventos em Experiencias do cultura
expCenofer = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2020/experiencias/bexp-central-de-ofertas-2.gif"];
expMaiven = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Jul/exp-mais-vendidos.jpg"];
expTeat = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Set/exp-teatro.gif"];
expCul = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Jan/bexp-mais-cultura.jpg"];
expCirculo = [expEve,expCenofer,expMaiven,expTeat,expCul];
circul = 0;
do{
contExp = document.createElement("div");
img = document.createElement("img");
contExp.appendChild(img);

container = document.getElementById("expeDecultura");
container.appendChild(contExp);

contExp.setAttribute("class","estilosExp");
img.setAttribute("src",expCirculo[circul]);
img.setAttribute("alt","circulo Experiencia");
img.setAttribute("width","100%");
circul++;
}while(circul < 5);

/*--------------------------------- terminou e comenco de mais Vendidos-------------------------------------------------------------*/
liv_mais = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16373859-300-300/2112250937.jpg?v=637193705134470000',"Ouse ser diferente","PedroSuperti","Livros","R$49,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373994-300-300/2112021029.jpg?v=637193705508670000',"Nunca Foi Sorti","Adriana Santana","Livro","R$39,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373800-300-300/2000063169.jpg?v=637193704980770000',"21 lecoes para o século 21","Yuval Noah","Livro","R$59,00"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373817-300-300/42269775.jpg?v=637193705023100000',"mais esperto que o diablo","Napoleon Hill","Livro","R$42,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373915-300-300/2112189903.jpg?v=637193705287600000',"Meditacao","Marco Aurelio","Livro","R$34,90"]];

ebo_mais = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16565376-300-300/81388917.jpg?v=637213385040470000',"PROBLEMAS BOBORILOS","EVA FURNARI","eBook","R$25,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16240426-300-300/111361161.jpg?v=637171395748770000',"TUDO COMENCA CON OVULO","REBECCA FETT","eBook","R$20,61"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/13951915-300-300/2012378192.jpg?v=637026101845000000',"A GUERRA DO LOBO CRONICAS","BERNARD CORNWELL","eBook","R$42,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15792775-300-300/2012497946.jpg?v=637114988264900000',"A FILOSOFIA EXPLICA BOLSONARO","PAULO GUIRALDELLI JR","eBook","R$19,06"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16101666-300-300/99656826.jpg?v=637153141400700000',"O MESTRE E O HEROI","DOMINGOS PELLEGRINI","eBook","R$28,90"]];

fil_mais = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16371838-300-300/2112252056.jpg?v=637191411894900000',"A montanha dos 7 abutres","Billy Wilder","Filmes","R$39.99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16607085-300-300/2112253181.jpg?v=637227393524600000',"Temas De Novelas Internacionales","Vinix","Filmes","R$39,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16607085-300-300/2112253181.jpg?v=637227393524600000',"Frank Capra","Frank Capra","Filmes","R$58,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16567722-300-300/2112253851.jpg?v=637214717162630000','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16567722-300-300/2112253851.jpg?v=637214717162630000','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"]];

mus_mais = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16237009-300-300/2112116221.jpg?v=637166895319330000',"LP Bennin Goodman","Benni Goodman","Música","R$199,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16367829-300-300/2112254573.jpg?v=637189855611300000',"Nas Ondas Da Anoite","Celsinho Silva","Música","R$22,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15814445-300-300/2112243416.jpg?v=637118715330200000',"Obatalá- Uma homenagem a Mae","Grup ofa","Música","R$189,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15953938-300-300/2112182630.jpg?v=637136828804730000','Além do Tempo',"Larissa Manoela","Música","R$19,73"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15953938-300-300/2112182630.jpg?v=637136828804730000','Além do Tempo',"Larissa Manoela","Música","R$19,73"]];

function expCreate(value){
	switch(value){
		case "livros":
		        document.getElementById("masVendidos").innerHTML = "";
                cat_opc = liv_mais;
                cards = 0;
		break;
		case "ebooks":
				document.getElementById("masVendidos").innerHTML = "";
				cat_opc = ebo_mais;
				cards = 0;		
		break;
		case "filmes":
				document.getElementById("masVendidos").innerHTML = "";
				cat_opc = fil_mais;
                cards = 0;
		break;
		case "musica":
				document.getElementById("masVendidos").innerHTML = "";
				cat_opc = mus_mais;
                cards = 0;
		break;
		default:
                cat_opc = liv_mais;
                cards = 0;
		break;
	}

do {

cont_card = new libros(cat_opc[cards][0],cat_opc[cards][1],cat_opc[cards][2],cat_opc[cards][3],cat_opc[cards][4]);
	cards++;
	id = "id" + cards;
card = document.createElement("div");

contImg = document.createElement("img");
img = document.createTextNode("");
contImg.appendChild(img);

conTit = document.createElement("p");
tit = document.createTextNode(cont_card.title);
conTit.appendChild(tit);

conAut = document.createElement("p");
aut = document.createTextNode(cont_card.author);
conAut.appendChild(aut);

conCat = document.createElement("p");
cat = document.createTextNode(cont_card.type);
conCat.appendChild(cat);

conPre = document.createElement("p");
pre = document.createTextNode(cont_card.price);
conPre.appendChild(pre);

botCom = document.createElement("button");
compBot = document.createTextNode("Comprar");
botCom.appendChild(compBot);

card.appendChild(contImg);
card.appendChild(conTit);
card.appendChild(conAut);
card.appendChild(conCat);
card.appendChild(conPre);
card.appendChild(botCom);

contenedor = document.getElementById("masVendidos");
contenedor.appendChild(card);

card.setAttribute("class","estilos");
card.setAttribute("id",id);
contImg.setAttribute("class", "cardImg");
contImg.setAttribute('src', cont_card.image);
contImg.setAttribute("alt","novidades");
contImg.setAttribute("width", "100%");
conTit.setAttribute("class","cardTexto");
conAut.setAttribute("class","cardTexto");
conCat.setAttribute("class","cardTexto");
conPre.setAttribute("class","cardTexto");
botCom.setAttribute("id","botCompra");

}while(cards < 5);
}

setTimeout(expCreate(),100);

/*---------------------------------------------------- acá empeca Mais Visitados----------------------------------------*/
liv_vis = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16373748-300-300/2112245187.jpg?v=637193704841030000',"Ouse ser diferente","PedroSuperti","Livros","R$49,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373666-300-300/30784423.jpg?v=637193704550600000',"Nunca Foi Sorti","Adriana Santana","Livro","R$39,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373937-300-300/1396068.jpg?v=637193705357070000',"21 lecoes para o século 21","Yuval Noah","Livro","R$59,00"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373869-300-300/2112053522.jpg?v=637193705158970000',"mais esperto que o diablo","Napoleon Hill","Livro","R$42,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16373994-300-300/2112021029.jpg?v=637193705508670000',"Meditacao","Marco Aurelio","Livro","R$34,90"]];

ebo_vis = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16268646-300-300/112182057.jpg?v=637177307249500000',"PROBLEMAS BOBORILOS","EVA FURNARI","eBook","R$25,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16240406-300-300/2011473532.jpg?v=637171395660200000',"TUDO COMENCA CON OVULO","REBECCA FETT","eBook","R$20,61"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/13935992-300-300/85250619.jpg?v=637025786509530000',"A GUERRA DO LOBO CRONICAS","BERNARD CORNWELL","eBook","R$42,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15792775-300-300/2012497946.jpg?v=637114988264900000',"A FILOSOFIA EXPLICA BOLSONARO","PAULO GUIRALDELLI JR","eBook","R$19,06"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16101666-300-300/99656826.jpg?v=637153141400700000',"O MESTRE E O HEROI","DOMINGOS PELLEGRINI","eBook","R$28,90"]];

fil_vis = [['https://livrariacultura.vteximg.com.br/arquivos/ids/14106887-300-300/46126541.jpg?v=637028168674670000',"A montanha dos 7 abutres","Billy Wilder","Filmes","R$39.99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16240272-300-300/46326013.jpg?v=637171223455430000',"Temas De Novelas Internacionales","Vinix","Filmes","R$39,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/14172411-300-300/46714653.jpg?v=637030352204070000',"Frank Capra","Frank Capra","Filmes","R$58,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16240164-300-300/46088753.jpg?v=637171222992500000','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15752074-300-300/42690401.jpg?v=637110158666330000','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"]];

mus_vis = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16237039-300-300/46819674.jpg?v=637166895863030000',"LP Bennin Goodman","Benni Goodman","Música","R$199,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16197011-300-300/46796324.jpg?v=637159085691030000',"Nas Ondas Da Anoite","Celsinho Silva","Música","R$22,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15814445-300-300/2112243416.jpg?v=637118715330200000',"Obatalá- Uma homenagem a Mae","Grup ofa","Música","R$189,90"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/15953938-300-300/2112182630.jpg?v=637136828804730000','Além do Tempo',"Larissa Manoela","Música","R$19,73"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16196749-300-300/22578699.jpg?v=637159084370400000','Além do Tempo',"Larissa Manoela","Música","R$19,73"]];

function visCreate(value){
	switch(value){
		case "livros":
		        document.getElementById("masVisitados").innerHTML = "";
                cat_opc = liv_vis;
                cards = 0;
		break;
		case "ebooks":
				document.getElementById("masVisitados").innerHTML = "";
				cat_opc = ebo_vis;
				cards = 0;		
		break;
		case "filmes":
				document.getElementById("masVisitados").innerHTML = "";
				cat_opc = fil_vis;
                cards = 0;
		break;
		case "musica":
				document.getElementById("masVisitados").innerHTML = "";
				cat_opc = mus_vis;
                cards = 0;
		break;
		default:
                cat_opc = liv_vis;
                cards = 0;
		break;
	}

do {

cont_card = new libros(cat_opc[cards][0],cat_opc[cards][1],cat_opc[cards][2],cat_opc[cards][3],cat_opc[cards][4]);
	cards++;
	id = "id" + cards;
card = document.createElement("div");

contImg = document.createElement("img");
img = document.createTextNode("");
contImg.appendChild(img);

conTit = document.createElement("p");
tit = document.createTextNode(cont_card.title);
conTit.appendChild(tit);

conAut = document.createElement("p");
aut = document.createTextNode(cont_card.author);
conAut.appendChild(aut);

conCat = document.createElement("p");
cat = document.createTextNode(cont_card.type);
conCat.appendChild(cat);

conPre = document.createElement("p");
pre = document.createTextNode(cont_card.price);
conPre.appendChild(pre);

botCom = document.createElement("button");
compBot = document.createTextNode("Comprar");
botCom.appendChild(compBot);

card.appendChild(contImg);
card.appendChild(conTit);
card.appendChild(conAut);
card.appendChild(conCat);
card.appendChild(conPre);
card.appendChild(botCom);

contenedor = document.getElementById("masVisitados");
contenedor.appendChild(card);

card.setAttribute("class","estilos");
card.setAttribute("id",id);
contImg.setAttribute("class", "cardImg");
contImg.setAttribute('src', cont_card.image);
contImg.setAttribute("alt","novidades");
contImg.setAttribute("width", "100%");
conTit.setAttribute("class","cardTexto");
conAut.setAttribute("class","cardTexto");
conCat.setAttribute("class","cardTexto");
conPre.setAttribute("class","cardTexto");
botCom.setAttribute("id","botCompra");

}while(cards < 5);
}

setTimeout(visCreate(),100);
