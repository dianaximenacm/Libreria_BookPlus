<!DOCTYPE html>
<html>

<head>
	<style>
		#container{
			width: 90%;
			height: 90%;
			float: left;
		}
		#imagenLibro{
			width: 40%;
			height: 180px;
			margin-left: 30%;
			margin-right: 30%;
			float: left;
		}

        .dat{
            width: 40%;
            height: 10px;
            margin-top: 10%;
            margin-left: 5%;
            color: black;
            font-size: 100%;
            text-align: center;
            float: left;
        }
    
    </style>
    <title> SuperAdmin </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="" href="css/estilosSudo.css">
</head>

<body>
    <!-- Contenedor todos los navs-->
    <div id="contNav">
        <!-- Primer nav pagina-->
        <div id="priNav">
            <ul>
                <a href="">
                    <li id="priLi">Lojas</li>
                </a>
                <a href="">
                    <li> | </li>
                </a>
                <a href="">
                    <li> Atendimento e Televendas </li>
                </a>
                <a href="">
                    <li> | </li>
                </a>
                <a href="">
                    <li> Vendas corporativas </li>
                </a>
            </ul>
        </div>

        <!-- Segundo nav pagina-->
        
        <div id="segNav">
            <div id="logo">
                <a href="#redSocial"><button id="btnLog"><img id="logoId" src="files/logo.png" alt="Img Logo"></button></a>
                <h1 id="logoLetra"> Lee en grande</h1>
            </div>
            <div id="buscador">
                <button id="todoSite">BUSQUEDA</button>
                <input id="inputBuscar" type="" name="buscador">
                <button id="botonLupa"><img src="files/lupa.png" width="100%" alt="lupa">
                </button>
            </div>
            <div id="usuario" style="margin:0.5% 20% 0 0 ; float:right;">
                <img src="files/icono_Usuario.png" width="40%" alt="usuario">
                <li class="letraOlaDos" id="usuario1" >
                <script>
                    nombre = sessionStorage.getItem('usuario');
                    document.getElementById("usuario1").innerHTML = nombre;
                </script>   
                </li>
                <li class="letraOla" ><a href="index.html"> Salir </a> </li>
            </div>
        </div>
        <!-- Tercer nav pagina-->
        <div id="terNav">
            <nav class="menu">
                <ul class="ulStyle">
                    <li id="perfil" style="margin: 0 3% 0 8%;"><a href="#perfilP"> Perfil </a></li>
                   
                    <li style="margin: 0 3% 0 8%;"><a href="#admin"> Administradores </a>

                    </li>
                    <li style="margin: 0 3% 0 1%;"><a href="#"> Productos </a>
                        <!-- SubMenu -->
                        <ul class="subMenu">
                            <li><a href="#consultarProd"> Consultar Producto </a> </li>
                            <li><a href="#agregarProd"> Agregar Producto </a> </li>
                            <li><a href="#actuProd"> Actualizar Producto </a> </li>
                            <li><a href="#eliminarPro"> Eliminar Producto </a> </li>
                        </ul>
                    </li>
                    <li style="margin: 0 3% 0 8%;"><a href="#categoria"> Categoria </a>

                    </li>
                    <li style="margin: 0 3% 0 8%;"><a href="#subcategoria"> Subcategoria </a>

                    </li>

                    
                </ul>
            </nav>
        </div>
    </div>

    <!------------------------------- Div principal para las tablas --------------->
    <div style="margin-top: -4%; " id="principal">
      
            <img id="banner" src="https://cdn.pixabay.com/photo/2018/03/19/18/20/tea-time-3240766_1280.jpg" height="25%" width="40%" alt="cafe">
            
            <div class="camposDos" id="perfilP">
                <img src="files/gratula.png" width="10%" height="10%" alt="SuperAdmin Logo">
                <h1><strong>Nombre del propietario</strong></h1>
                <span>X nombre</span>
                <br>
                <h1><strong>Correo</strong></h1>
                <span>X correo</span>
                <br>
                <h1><strong>Telefono</strong></h1>
                <span>X telefono</span>

            </div>
            <!--                                Producto                           -->

            <div class="camposDos" id="consultarProd">
                <h1>Consulta de Libros</h1>
                <form method="POST" action="control/libroControl.php?accion=consultar"><br>
                    <input type="text" placeholder="Nombre libro a buscar" class="datos" name="buscar" />
                    <br>
                    <br>
                    <button class="btnForm" type="submit">Buscar</button>

                    <div id="result"></div>
                </form>

                <div class="mostrarLibro" id="busquedaLibro" style="width: 500px; height:500px; background:#FFFFFF; margin: 20% 35% 0 -35%">
                   <script>    
                    idLibro = localStorage.getItem('id');                                                      
                    imag =  localStorage.getItem('imagen');
                    nomb = localStorage.getItem('nombre');
                    aut = localStorage.getItem('autor');
                    edit = localStorage.getItem('editorial');
                    existencia = localStorage.getItem('existencias');
                    prec = localStorage.getItem('precio');
                    cat = localStorage.getItem('idCat');
                    suCat = localStorage.getItem('idSub');
                    estado = localStorage.getItem('estado');
                                   
                    container = document.createElement("div");
                    card = document.createElement('div');

                    img = document.createElement("img");
                    // label y contenido del la inf del id
                    labId = document.createElement('label');
                    cLabelImg = document.createTextNode("idLibro = ");
                    labId.appendChild(cLabelImg); // valor del label id
                    idL= document.createElement('div');
                    numId = document.createTextNode(idLibro);
                    idL.appendChild(labId);
                    idL.appendChild(numId);
                    //  label y contenido del nombre
                    labNo = document.createElement('label');
                    cLabelNo = document.createTextNode("nombre = ");
                    labNo.appendChild(cLabelNo); // valor del label nombre
                    nomLibro = document.createElement("div");
                    contnom = document.createTextNode(nomb);
                    nomLibro.appendChild(labNo);
                    nomLibro.appendChild(contnom);
                    // label y contenido del autor
                    labAut = document.createElement('label');
                    cLabelAut = document.createTextNode("autor = ");
                    labAut.appendChild(cLabelAut); // valor del label autor
                    nomAut = document.createElement("div");
                    contAut = document.createTextNode(aut);
                    nomAut.appendChild(labAut);
                    nomAut.appendChild(contAut);
                    // label y contenido de la editorial
                    labedi = document.createElement('label');
                    cLabeledi = document.createTextNode("editorial = ");
                    labedi.appendChild(cLabeledi); // valor del label editorial
                    nomEdi = document.createElement("div");
                    contEdi = document.createTextNode(edit);
                    nomEdi.appendChild(labedi);
                    nomEdi.appendChild(contEdi);
                    // label y contenido de existencias
                    labexi = document.createElement('label');
                    cLabelexi = document.createTextNode("existencias = ");
                    labexi.appendChild(cLabelexi); // valor del label existencias
                    exis = document.createElement("div");
                    contExis = document.createTextNode(existencia);
                    exis.appendChild(labexi);
                    exis.appendChild(contExis);
                    // label y contenido de precio
                    labpre = document.createElement('label');
                    cLabelpre = document.createTextNode("precio = ");
                    labpre.appendChild(cLabelpre); // valor del label precio
                    precio = document.createElement("div");
                    valor = document.createTextNode(prec);
                    precio.appendChild(labpre);
                    precio.appendChild(valor);
                    // label y contenido idCategoria
                    labcat = document.createElement('label');
                    cLabelcat = document.createTextNode("idCategoria = ");
                    labcat.appendChild(cLabelcat); // valor del label categoria
                    categoria = document.createElement("div");
                    catValor = document.createTextNode(cat);
                    categoria.appendChild(labcat);
                    categoria.appendChild(catValor);
                    // label y contenido idsubCategoria
                    labScat = document.createElement('label');
                    cLabelScat = document.createTextNode("idSubcategoria = ");
                    labScat.appendChild(cLabelScat); // valor del label subcategoria
                    subCat = document.createElement("div");
                    subCatValor = document.createTextNode(cat);
                    subCat.appendChild(labScat);
                    subCat.appendChild(subCatValor);
                    // label y contenido estado
                    labest = document.createElement('label');
                    cLabelest = document.createTextNode("idEstado = ");
                    labest.appendChild(cLabelest); // valor del label estado
                    estado = document.createElement("div");
                    estadoValor = document.createTextNode(cat);
                    estado.appendChild(labest);
                    estado.appendChild(estadoValor);
                    // colocamos cada uno de los elemento en la card
                    card.appendChild(img);
                    card.appendChild(idL);
                    card.appendChild(nomLibro);
                    card.appendChild(nomAut);
                    card.appendChild(nomEdi);
                    card.appendChild(exis);
                    card.appendChild(precio);
                    card.appendChild(categoria);
                    card.appendChild(subCat);
                    card.appendChild(estado);
                    // posicionamos la card
                    container.appendChild(card);
                    // atributos del contenedor de mi card
                    container.setAttribute("id","container");
                    img.setAttribute("id","imagenLibro");
                    img.setAttribute("src",imag);
                    img.setAttribute("alt","libro");
                    idL.setAttribute('class',"dat");
                    nomLibro.setAttribute("class","dat");
                    nomAut.setAttribute("class","dat");
                    nomEdi.setAttribute("class","dat");
                    exis.setAttribute("class","dat");
                    precio.setAttribute("class","dat");
                    categoria.setAttribute("class","dat");
                    subCat.setAttribute("class","dat");
                    estado.setAttribute("class","dat");

                    document.getElementById("busquedaLibro").appendChild(container);                               
                           
                </script>                    
                </div>
            </div>

           <div class="campos" id="agregarProd">
                      <h1>Agregar un nuevo libro</h1>
                       <form method="POST" action="control/libroControl.php?accion=nuevo" enctype="multipart/form-data"><br>
                          <input type="text" placeholder="Nombre del libro" class="datos" name="nombre" ><br>
                          <input type="text" placeholder="Autor del libro" class="datos" name="autor" ><br>
                          <input type="text" placeholder="Editorial del libro" class="datos" name="editor" ><br>
                          <input type="text" placeholder="Existencias del libro" class="datos" name="cantidad" ><br>
                          <input type="text" placeholder="Precio del libro" class="datos" name="precio" ><br>
                          <input type="text" placeholder="Categoria del libro" class="datos" name="categoria" ><br>
                          <input type="text" placeholder="Subcategoria del libro" class="datos" name="subcategoria" ><br>
                          <input type="text" placeholder="Estado del libro" class="datos" name="estado" ><br>
                          <input type="file" name="imagen" class="datos">  <br> 
                          <button class="btnForm" type="submit">Enviar</button>
                          <br>
                       </form>
                  </div>

            <div class="campos" id="actuProd">
                <h1>Actualizar Libro</h1>
                <form method="POST" action="control/libroControl.php?accion=modificar" enctype="multipart/form-data"><br>
                    <input type="text" placeholder="id del libro" class="datos" name="id" /><br>
                    <input type="text" placeholder="campo a modificar" class="datos" name="nombreColumna" /><br>
                    <input type="text" placeholder="valor" class="datos" name="valor" /><br>
                    <button class="btnForm" style="width: 35% !important;" type="submit">Actualizar</button>
                    <br>
                </form>
            </div>
 
            <div class="campos" id="eliminarPro">
                <h1>Eliminar libro</h1>
                <form method="POST" action="control/libroControl.php?accion=eliminar" ><br>
                    <input type="text" placeholder="id del libro" class="datos" name="id" /><br>
                    <button class="btnForm" style="width: 35% !important;" type="submit">eliminar</button>
                    <br>
                </form>
            </div>
 

            <!------------------------------------------------------Administrador---------------------------------------------------->


            <div class="campos" id="admin">
                <h1>Consulta de Administrador</h1>
                <form method="POST" action="#"><br>
                    <input type="number" placeholder="Id administrador a buscar" class="datos" name="buscarAdmin" />
                    <button class="btnForm" type="submit">Buscar</button>
                    <div id="result"></div>
                </form>

                <div class="mostrarAdministrador">
                    <?php echo "" ?>
                </div>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Agregar un nuevo Admininistrador</h1>
                <form method="POST" action="control/libroControl.php?accion=nuevoAdm"><br>
                    <input type="text" placeholder="Nombre del Administrador" class="datos" name="nombre" /><br>
                    <input type="text" placeholder="apellido del Administrador" class="datos" name="apellido" /><br>
                    <input type="text" placeholder="Correo del Administrador" class="datos" name="correo" /><br>
                    <input type="text" placeholder="Telefono del Administrador" class="datos" name="telefono" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Activar o desactivar un Administrador</h1>
                <form method="POST" action="#"><br>
                    <input type="number" placeholder="Id administrador" class="datos" name="idAdmin" /><br>
                    <h3>Activar</h3>
                    <input type="text" placeholder="Escriba activar" class="datos" name="activarAdmin" /><br>
                    <h3>Desactivar</h3>
                    <input type="text" placeholder="Escriba desactivar" class="datos" name="desactivarAdmin" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>
            </div>


            <!------------------------------------------------------------------Categoria -------------------------------------------------->

            <div class="campos" id="categoria">
                <h1>Consultar una categoria</h1>
                <form method="POST" action=""><br>
                    <input type="number" placeholder="Id categoria a buscar" class="datos" name="buscarCat" />
                    <button class="btnForm" type="submit">Buscar</button>
                    <div id="result"></div>
                </form>

                <div class="mostrarCategoria">
                    <?php echo "" ?>
                </div>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Agregar una nueva categoria</h1>
                <form method="POST" action="control/libroControl.php?accion=nuevaCategoria"><br>
                    <input type="text" placeholder="Nombre nuevo categoria" class="datos" name="nombre" /><br>
                    <input type="text" placeholder="estado de la categoria" class="datos" name="estado" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                    <br>
                </form>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Actualizar Categoria</h1>
                <form method="POST" action="#"><br>
                    <input type="text" placeholder="Id categoria a modificar" class="datos" name="idCat" /><br>
                    <input type="text" placeholder="Nuevo nombre categoria" class="datos" name="newNombreCat" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Activar o desactivar una categoria</h1>
                <form method="POST" action="#"><br>
                    <input type="number" placeholder="Id categoria a modificar" class="datos" name="idCat" /><br>
                    <h3>Activar</h3>
                    <input type="text" placeholder="Escriba activar" class="datos" name="activarCat" /><br>
                    <h3>Desactivar</h3>
                    <input type="text" placeholder="Escriba desactivar" class="datos" name="desactivarCat" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>

            </div>

            <!--------------------------------------------------------------Subcategoria--------------------------------------------------------->

            <div class="campos" id="subcategoria">
                <h1>Consultar una subcategoria</h1>
                <form method="POST" action="#"><br>
                    <input type="number" placeholder="Id subcategoria a buscar" class="datos" name="buscarSubCat" />
                    <button class="btnForm" type="submit">Buscar</button>
                    <div id="result"></div>
                </form>

                <div class="mostrarSubcategoria">
                    <?php echo "" ?>
                </div>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Agregar una nueva subcategoria</h1>
                <form method="POST" action="#"><br>
                    <input type="text" placeholder="Nombre subcategoria" class="datos" name="nombreSubCat" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Actualizar subcategoria</h1>
                <form method="POST" action="#"><br>
                    <input type="number" placeholder="Id subcategoria" class="datos" name="idSubCat" /><br>
                    <input type="text" placeholder="Nuevo nombre subcategoria" class="datos" name="newNombreSubCat" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>

                <br>
                <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
                <br>

                <h1>Activar o desactivar una subcategoria</h1>
                <form method="POST" action="#"><br>
                    <input type="number" placeholder="Id Subcategoria" class="datos" name="idSubCat" /><br>
                    <h3>Activar</h3>
                    <input type="text" placeholder="Escriba activar" class="datos" name="activarSubCat" /><br>
                    <h3>Desactivar</h3>
                    <input type="text" placeholder="Escriba desactivar" class="datos" name="desactivarSubCat" /><br>
                    <button class="btnForm" type="submit">Enviar</button>
                </form>
            </div>
       

        <!--------------------------- Footer ---------------------------------------->

        <footer>
            <div id="redSocial">
                <div id="letrasRed">
                    ESCRIBA SU E-MAIL Y GANE UN CUPÓN PARA SU PRIMERA COMPRA
                </div>
                <form id="emailRed">
                    <input id="digEmail">
                    <button id="botCorreo" type="submit">enviar</button>
                </form>
                <div id="letraRed">
                    REDES SOCIALES
                </div>
                <div id="iconosRed">
                    <div>
                        <a href=""><img src="https://image.flaticon.com/icons/svg/1312/1312139.svg" alt="facebook" class="icono"></a>
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
                <div class="cuadrosPagamento">

                </div>
                <div class="cuadrosPagamento">
                    <a href="">
                        <h4>Quienes Somos</h4>
                    </a><br>
                    <a href="">
                        <p class="estiloA">Trabaje con nosotos </p>
                    </a><br>
                    <a href="">
                        <p class="estiloA">Nuestras tiendas</p>
                    </a><br>
                </div>
                <div class="cuadrosPagamento">
                    <a href="">
                        <h4>Contactanos</h4>
                    </a><br>
                    <a href="">
                        <p class="estiloA">Politicas de devolución </p>
                    </a><br>
                    <a href="">
                        <p class="estiloA"> Politica de ventas</p>
                    </a><br>

                </div>
                <div class="cuadrosPagamento">
                    <a href="">
                        <h4>Más lecturas</h4>
                    </a><br>
                    <a href="">
                        <p class="estiloA">Biblioteca</p>
                    </a><br>
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
                <div class="derechos" style="margin: 5% 30% 0 30%">
                    <h5>
                        Libreria BOOK PLUS, todos los derechos reservados.© COPYRIGHT 2020 Bogotá <br>
                        Realizada por <a href="https://github.com/dianaximenacm/Libreria" target="_blank">Grupo Fullstack</a> para
                        <a href="https://www.bictia.com" target="_blank"> Bictia Institute of technology</a>.
                    </h5>
                </div>
        </footer>

</body>

</html>
