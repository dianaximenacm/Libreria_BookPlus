<!DOCTYPE html>
<html>
    <head>
        <style>
            .container{
                background-color: rgba(255,255,255,1);
                width : 25%;
                height: 220px;
                margin-top: 1%;
                margin-left: 6%;
                text-align: center;
                font-size: 100%;
                color: black;
                float: left;
            }
            .card{
                width: 90%;
                height: 90%;
                float: left;
            }
            .imagen{
                background-color: white;
                width: 40%;
                height: 180px;
                margin-top: 4%;
                margin-left: 5%;
                float:left;
            }

            .datos{
                background-color: rgba(255,255,255,0.6);
                width: 45%;
                height: 35px;
                margin-top: 4%;
                margin-left: 5%;
                color: black;
                float: left;
            }
        </style>    
        <title> perfil </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilos_perfil.css">
    </head>
    <body>
        <!-- contenedor de todos los nav de la paguina-->
        <div id="contNav">
            <!-- primer nav de mi paguina-->
        	<div id="priNav">
        		<ul>
        			<a href=""><li id="priLi">Tienda</li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Entrega a domicilio </li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Ventas corporativas </li></a>
        		</ul>
        	</div>
            <!-- Segundo nav de mi paguina-->
        	<div id="segNav">
        		<div id="logo">
                    <img src="files/logo.png" id="logoIma" alt="logo" >
        			<p id="logoLetra"> Book Plus </p>
        		</div>	
        		<div id="buscador">
                    <form method="post" id="formBuscador" action="control/usuarioControl.php?accion=buscar">
        			<button id="todoSite">TODO O SITE</button>
        			<input id="inputBuscar" type="text" name="buscador" placeholder="libro a buscar">
        			<button id="botonLupa"><img src="files/Icons/lupa.png" width="100%" alt="lupa"></button>
                </form>
        		</div>	
        		<div id="usuario">
        			<img src="files/Icons/Icono_Usuario.png" width="30%" alt="usuario">
        			<span id="letraOla">
                        <script>
                            nombre = sessionStorage.getItem('usuario');
                            document.getElementById("letraOla").innerHTML = "hola, bienvenido" + "<br>" + nombre;
                        </script>   
                    </span>
        			
        		</div>	
        		<div id="pedidos">
        			<img src="files/Icons/compras.png" width="70%" alt="carrito_compras">
        		</div>	
                <form method="POST" action="control/usuarioControl.php?accion=cerrar">
                    <button id="cerrarSes">salir</button>
                </form>
        	</div>
            <!-- tercer nav de mi paguina-->
        	<div id="terNav">
        		<div id="compreCat" class="iconosNav">
                    <ul>
                    	<button class="botnavUsuario" onclick="mostrar('formDatosusu');"><li>Actualizar Datos</li></button>
                    </ul>   
        		</div>
                <!-- esta son los subOpciones de compre por categoria que se encuentra en ele tercer nav-->
                <div id="formDatosusu">
                    <form method="POST" action="control/usuarioControl.php?accion=actualizar" id="datosForm">
                        <div name="foto" id="fotoAct"></div>
                        <input name="nombre" class="inputDatusu" placeholder="nombre">
                        <input name="apellido" class="inputDatusu" placeholder="apellido">
                        <input name="genero" class="inputDatusu" placeholder="genero">
                        <input name="cumpleaños" class="inputDatusu" placeholder="cumpleaños">
                        <input name="correo" id="datCorreo" class="inputDatusu">
                        <button type="submit" class="inputDatusu">Actualizar</button>
                    </form>
                </div>    
                <!-- Explore Cultura-->
        		<div id="ExploreCul" class="iconosNav" >
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>
                <!-- Estos son las sunOpciones de Explore Cultura-->
                <!--cultura indica lista-->
        		<div id="culturaLis" class="iconosNav">
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>
                <!-- Central de ofertas-->
        		<div id="centralOfer" class="iconosNav">
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>
                <!--Eventos-->
        		<div id="eventos" class="iconosNav">
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>	
        	</div>           
        </div>
        <!--            aca va la parte principal de la paguina--------------->
        <div id="principal">
           <div id="carnet">
               <div id="izqCarnet">
                   <div id="foto">
                   </div>
                   <div id="nomLibreria">
                    Gracias por ser parte de nosotros.
                   </div>
               </div>
               <div id="derCarnet">
                    <div id="nombre" class="datCarnet">
                        Nombre
                    </div> 
                    <div id="apellido" class="datCarnet">
                        Apellido
                    </div> 
                    <div id="Genero" class="datCarnet">
                        Genero
                    </div> 
                     <div id="correo" class="datCarnet">
                        <script>
                            nombre = sessionStorage.getItem('usuario');
                            document.getElementById("correo").innerHTML =  nombre;
                        </script>   
                    </div> 
                     <div id="cumpleaños" class="datCarnet">
                        Cumpleaños
                    </div>           
               </div>
           </div>
           <div id="catUsuario">
               <div class="categorias">
                    <button class="catBotones"> nuevos </button>
               </div> 
               <div class="categorias">
                    <button class="catBotones"> usados </button>
               </div> 
               <div class="categorias">
                    <button class="catBotones"> Genero </button>
               </div> 
               <div class="categorias">
                    <button class="catBotones"> Edad </button>
               </div> 
               <div class="categorias">
                    <button class="catBotones"> Coleciones </button>
               </div> 
           </div>
           <div id="contenedorBus">
                <script>

                    libros = 0;
                        
                        cantidad = localStorage.getItem('cantidad');
                           
                        if(cantidad == null){
                            document.getElementById("contenedorBus").innerHTML = "";

                        } else {
                            do{
                                imagen = 'imagen' + libros;
                                nombre = 'nombre' + libros;
                                autor = 'autor' + libros;
                                edit = 'edit' + libros;
                                prec = 'prec' + libros;
                                imag =  localStorage.getItem(imagen);
                                nomb = localStorage.getItem(nombre);
                                aut = localStorage.getItem(autor);
                                edit = localStorage.getItem(edit);
                                prec = localStorage.getItem(prec);

                                container = document.createElement("div");
                                card = document.createElement('div');

                                img = document.createElement("img");

                                nomLibro = document.createElement("div");
                                contnom = document.createTextNode(nomb);
                                nomLibro.appendChild(contnom);

                                nomAut = document.createElement("div");
                                contAut = document.createTextNode(aut);
                                nomAut.appendChild(contAut);

                                nomEdi = document.createElement("div");
                                contEdi = document.createTextNode(edit);
                                nomEdi.appendChild(contEdi);

                                precio = document.createElement("div");
                                valor = document.createTextNode(prec);
                                precio.appendChild(valor);

                                card.appendChild(img);
                                card.appendChild(nomLibro);
                                card.appendChild(nomAut);
                                card.appendChild(nomEdi);
                                card.appendChild(precio);

                                container.appendChild(card);

                                container.setAttribute("class","container");
                                img.setAttribute("class","imagen");
                                img.setAttribute("src",imag);
                                img.setAttribute("alt","libro");
                                nomLibro.setAttribute("class","datos");
                                nomAut.setAttribute("class","datos");
                                nomEdi.setAttribute("class","datos");
                                precio.setAttribute("class","datos");

                        document.getElementById("contenedorBus").appendChild(container);
                        libros++;
                    }while(libros<cantidad);
                  }            
                </script>   
           </div>  
        </div> 
       <footer>
           <div id="redSocial">
               <div id="letrasRed">
                   ESCRIBA SU E-MAIL Y GANE UN CUPÓN PARA SU PRIMERA COMPRA
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
                   <a href="" ><h4>Quienes Somos</h4> </a><br>
                   <a href=""><p class="estiloA">Trabaje con nosotos </p></a><br>
                   <a href=""><p class="estiloA">Nuestras tiendas</p></a><br>
               </div> 
               <div  class="cuadrosPagamento">
                   <a href=""><h4>Contactanos</h4></a><br>
                   <a href=""><p class="estiloA">Politicas de devolución </p></a><br>
                   <a href=""><p class="estiloA"> Politica de ventas</p></a><br>
                  
               </div>  
               <div  class="cuadrosPagamento">
                   <a href=""><h4>Más lecturas</h4></a><br>
                   <a href=""><p class="estiloA">Biblioteca</p></a><br>
               </div> 
               <div id="pagos">
                   <h4> FORMAS DE PAGO </h1>
                   <div id="pagoTargeta">
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/visa.png?v=636991622524900000" alt="visa"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/master.png?v=636991622505470000" alt="MasterCard"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/american.png?v=636991622435270000" alt="American Express"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/pay.png?v=636991622515770000" alt="PayPall"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/diners.png?v=636991622465430000" alt="Dinners"></a>
                   </div>      
           </div> 
           <div id="derechos">
           <h5>
               Libreria BOOK PLUS, todos los derechos reservados.© COPYRIGHT 2020 Bogotá <br>
               Realizada por <a href="https://github.com/dianaximenacm/Libreria" target="_blank">Grupo Fullstack</a> para 
               <a href="https://www.bictia.com" target="_blank"> Bictia Institute of technology</a>.
           </h5>  
           </div>        
       </footer>      
       </html>
