<!DOCTYPE html>
<html>
    <head>
        <title> livraria cultura </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <!-- contenedor de todos los nav de la paguina-->
        <div id="contNav">
            <!-- primer nav de mi paguina-->
        	<div id="priNav">
        		<ul>
        			<a href=""><li id="priLi">Lojas</li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Atendimento e Televendas </li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Vendas corporativas </li></a>
        		</ul>
        	</div>
            <!-- Segundo nav de mi paguina-->
        	<div id="segNav">
        		<div id="logo">
        			<p id="logoLetra"> livraria cultura </p>
        		</div>	
        		<div id="buscador">
                <form method="POST" action="busqueda.php">
        			<button id="todoSite">TODO O SITE</button>
        			<input id="inputBuscar" type="" name="buscador">
        			<button id="botonLupa"><img src="img/lupa.png" width="100%" alt="lupa"></button>
                </form>
        		</div>	
        		<div id="usuario">
        			<img src="img/usuario.png" width="30%" alt="usuario">
        			<span id="letraOla">Ola,bem vindo(a)</span>
        			<a href="registro.php" id="letraEntre">Entre ou cadastre-se</a>
        		</div>	
        		<div id="pedidos">
        			<img src="img/carrito_mercado.png" width="70%" alt="carrito_compras">
        		</div>	
        	</div>
            <!-- tercer nav de mi paguina-->
        	<div id="terNav">
        		<div id="compreCat" class="iconosNav" onmouseover="mostrar('subCompras');" onmouseout="esconder('subCompras')">
                    <ul>
                    	<li>Compre por Categoria</li>
        		</div>
                <!-- esta son los subOpciones de compre por categoria que se encuentra en ele tercer nav-->
        		<div id="subCompras" onmouseover="mostrar('subCompras');" onmouseout="esconder('subCompras')" >
        			<li class="subiconosNav">Livros</li><br>
        			<li class="subiconosNav">Livros Usados</li><br>
        			<li class="subiconosNav">Livros Importados</li><br>
        			<li class="subiconosNav">eBook</li><br>
        			<li class="subiconosNav">Filmes e sèries</li><br>
        			<li class="subiconosNav">Mùsica</li><br>
        			<li class="subiconosNav">Geek</li><br>
        			<li class="subiconosNav">Jogos e Brinquedos</li><br>
        			<li class="subiconosNav">Papeleria</li><br>
        			<li class="subiconosNav">Revistas</li><br>
        			<li class="subiconosNav">Gifts</li><br>
        			<li class="subiconosNav">Vale-presente</li><br>
        			<li class="subiconosNav">Central de ofertas</li><br>
        		</div>	
                <!-- Explore Cultura-->
        		<div id="ExploreCul" class="iconosNav" onmouseover="mostrar('subExplorecul');" onmouseout="esconder('subExplorecul')" >
        			<ul>
        				<li>Explore Cultura</li>
        			</ul>
        		</div>
                <!-- Estos son las sunOpciones de Explore Cultura-->
        		<div id="subExplorecul" onmouseover="mostrar('subExplorecul');" onmouseout="esconder('subExplorecul')">
        			<ul>
        				<li class="subiconosNav">Eventos</li>
        				<li class="subiconosNav">Cultura em Curso</li>
        				<li class="subiconosNav">Teatro Eva Herz</li>
        				<li class="subiconosNav">Canal da Cultura</li>
        				<li class="subiconosNav">Sala de visitas</li>
        			</ul>
        		</div>	
                <!--cultura indica lista-->
        		<div id="culturaLis" class="iconosNav">
        			<ul>
        				<a href=""><li>Cultura indica lista</li></a>
        			</ul>
        		</div>
                <!-- Central de ofertas-->
        		<div id="centralOfer" class="iconosNav">
        			<ul>
        				<a href=""><li>Central de ofertas</li></a>
        			</ul>
        		</div>
                <!--Eventos-->
        		<div id="eventos" class="iconosNav">
        			<ul>
        				<a href=""><li>Eventos</li></a>
        			</ul>
        		</div>	
        	</div>           
        </div>
        <!-- lugarda publicidade-->
        <div id="contPublici">
        	<div id="publicidadePri">
                <!-- Este es donde se mueve la barra de color verde-->
        		<aside id="izqPubliuno">
        			<div id="subizqPubliuno"></div>
        	    </aside>
                <!-- Aca esta el cohete y la palabra receva o mesmo dia-->
        	    <aside id="derPublipri">
        	    	<div id="subderPubliuno"></div>
        	    </aside>      	    		
        	</div>
            <!-- Carrusel de la paguina-->
        	<div id="carrusel">

        	</div>
        	<div id="publicidadeCont">
                <div id="ayudas">
                   <a href="#" >Canal direuto para atendimento</a>
                </div>
                <div id="entregas" >
                    <a href="#" class="linkVentas">Confira o regulamento</a>
                </div>
                <div class="linea"> </div>
                <div id="frete">
                    <a href="#" class="linkVentas">Confira o regulamento</a>
                </div>
                <div class="linea"> </div>
                <div id="formaPago" >
                    <a href="#" class="linkVentas">Confira o regulamento</a>
                </div>
                <div class="linea"> </div>
                <div id="vales" >
                    <a href="#" class="linkVentas">Confira o regulamento</a>
                </div>    
        	</div> 
            <main>
                <h1> Confira o que a Cultura preparou para voce </h1>
                <div id="queTem">
                    <div class="artVarios">
                       <img src="img/itemProducto1.png"  alt="Monja coen" width="100%" height="100%"> 
                    </div>
                    <div class="artVarios">
                        <img src="img/itemProducto2.png"  alt="Desconto meias" width="100%" height="100%"> 
                    </div>
                    <div class="artVarios">
                        <img src="img/itemProducto3.png"  alt="Productos diversos" width="100%" height="100%"> 
                    </div>
                    <div class="artVarios">
                        <img src="img/itemProducto4.png"  alt="Yuval" width="100%" height="100%"> 
                    </div>
                    <div class="artVarios">
                        <img src="img/itemProducto5.png"  alt="Historia e filosofia" width="100%" height="100%"> 
                    </div>
                </div>
                <h1> Novidades </h1>    
                <div class="botopciones">
                    <button onclick="novCreate('livros');" class="botNov">Livros</button>
                    <button onclick="novCreate('ebooks');"class="botNov">Ebooks</button>
                    <button onclick="novCreate('filmes');"class="botNov">Filmes</button>
                    <button onclick="novCreate('musica');"class="botNov">Música</button>
                </div>  
                <div id="novedades">
                </div>  
                <h1> Experencias de Cultura </h1>
                <div id="expeDecultura">

                </div>    
                <h1>Mais vendidos </h1>
                <div class="botopciones">
                    <button onclick="expCreate('livros');" class="botNov">Livros</button>
                    <button onclick="expCreate('ebooks');"class="botNov">Ebooks</button>
                    <button onclick="expCreate('filmes');"class="botNov">Filmes</button>
                    <button onclick="expCreate('musica');"class="botNov">Música</button>
                </div>  
                <div id="masVendidos">
                </div>  
                <h1> Mais Visitados </h1>
                <div class="botopciones">
                    <button onclick="visCreate('livros');" class="botNov">Livros</button>
                    <button onclick="visCreate('ebooks');"class="botNov">Ebooks</button>
                    <button onclick="visCreate('filmes');"class="botNov">Filmes</button>
                    <button onclick="visCreate('musica');"class="botNov">Música</button>
                </div> 
                <div id="masVisitados">
                
                </div>  

            </main>   
            <footer>
                <div id="redSocial">
                    <div id="letrasRed">
                        CADESTRE SEU E-MAIL E GANHE UM CUPOM PARA SUA PRIMEIRA COMPRA
                    </div>
                    <form  id="emailRed">
                        <input id="digEmail">
                        <button id="botCorreo" type="submit">enviar</button>
                    </form>
                    <div id="letraRed">
                        REDES SOCIALES
                    </div>
                    <div id="iconosRed">
                        <div>
                            <a href=""><img src="https://image.flaticon.com/icons/svg/1312/1312139.svg" alt="facebook" class="icono" ></a>
                        </div>
                        <div>
                            <a href=""><img src="https://image.flaticon.com/icons/svg/185/185961.svg" alt="twiter" class="icono"></a>
                        </div> 
                        <div>
                            <a href=""><img src="https://www.flaticon.es/premium-icon/icons/svg/2392/2392487.svg" alt="instagram" class="icono"></a>
                        </div>  
                        <div>
                            <a href=""><img src="https://image.flaticon.com/icons/svg/1409/1409936.svg" alt="youtube" class="icono"></a>
                        </div> 
                        <div>
                            <a href=""><img src="https://image.flaticon.com/icons/svg/2807/2807138.svg" class="icono" alt="inicio"></a>
                        </div>
                    </div>
                </div>  
                <div id="pagamenServicio">
                    <div  class="cuadrosPagamento">
                        
                    </div>
                    <div class="cuadrosPagamento">
                        <a href="" ><h4>Quem Somos</h4> </a><br>
                        <a href=""><p class="estiloA">Trabalhe conosco</p></a><br>
                        <a href=""><p class="estiloA">Localizacao de lojas</p></a><br>
                        <a href=""><p class="estiloA">Teatro Eva Herz</p></a><br>
                        <a href=""><p class="estiloA">Vale Presente</p></a><br>
                        <a href=""><p class="estiloA">Recuperacao Judicial</p></a><br>
                    </div> 
                    <div  class="cuadrosPagamento">
                        <a href=""><h4>Entre em Contacto</h4></a><br>
                        <a href=""><p class="estiloA">Politica de entrega y devolucao</p></a><br>
                        <a href=""><p class="estiloA"> Politica de vendas</p></a><br>
                        <a href=""><p class="estiloA">Perguntas e respostas</p></a><br>
                        <a href=""><p class="estiloA">Atendimiento Kobo</p></a><br>
                    </div>  
                    <div  class="cuadrosPagamento">
                        <a href=""><h4>Mais leítores</h4></a><br>
                        <a href=""><p class="estiloA">Espalhe cultura</p></a><br>
                        <a href=""><p class="estiloA">Mais cultura</p></a><br>
                        <a href=""><p class="estiloA">Cultura itaucard</p></a><br>
                        <a href=""><p class="estiloA">Latam pass</p></a><br>
                        <a href=""><p class="estiloA">Solicitacao de evento</p></a><br>
                    </div> 
                    <div id="pagos">
                        <h4> FORMAS DE PAGAMENTO </h1>
                        <div id="pagoTargeta">
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/visa.png?v=636991622524900000" alt="visa"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/master.png?v=636991622505470000" alt="MasterCard"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/american.png?v=636991622435270000" alt="American Express"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/elo.png?v=636991622475730000" alt="Elo"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/hiper.png?v=636991622495200000" alt="HiperCard"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/pay.png?v=636991622515770000" alt="PayPall"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/diners.png?v=636991622465430000" alt="Dinners"></a>
                            <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/boleto.png?v=636991622455130000" alt="boleto"></a>
                        </div>    
                        <div id="bancosAcei">
                            <a href=""><img src="https://livrariacultura.vteximg.com.br/arquivos/bancos-paymee-footer.png?v=637073723029000000" alt="visa" width="100%" height="100%"></a>
                        </div>
                            <h4>  CERTIFICADOS  </h4>
                        <div>
                           
                        </div>
                    </div>   
                </div> 
                <h5>
                    Livraria Cultura, todos os direitos reservados. Copyrights 2020 <br>
                    <br>Livraria Cultura S/A | Av. Paulista, 2300, 10° andar, São Paulo - SP - Brasil CEP 013110-300 | CNPJ 62.410.352/0001-72 | IE 111.133.781.116 | PABX 11 3056-4300<br>
                    <br>Os preços, condições de pagamento e valores de frete são válidos exclusivamente para as compras efetuadas em nosso site, não valendo, necessariamente, para as nossas lojas físicas.

                </h5> 
            </footer>      	
        	
        </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
    <script type="text/javascript" src="js/javaScript.js"></script>    
    </body>
</html>
