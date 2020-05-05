<!DOCTYPE html>
<html>

<head>
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
                <a href="#redSocial"><button id="btnLog"><img id="logoId" src="img/logo.png" alt="Img Logo"></button></a>
                <h1 id="logoLetra"> Lee en grande</h1>
            </div>
            <div id="buscador">
                <button id="todoSite">TODO O SITE</button>
                <input id="inputBuscar" type="" name="buscador">
                <button id="botonLupa"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT2fypWaqLoE3WWdVVfo-XOx3h0Z0gXEAx7-vHphKQNQP-v1zB5&usqp=CAU"
                        width="100%" alt="lupa">
                </button>
            </div>
            <div id="usuario">
                <img src="img/usuario.png" width="30%" alt="usuario">
                <span id="letraOla">Super Admin</span>
                <li id="letraOla" style="margin-top: -17%;"><a href="index.html"> Cerrar Sesión </a> </li>
            </div>
        </div>
        <!-- Tercer nav pagina-->
        <div id="terNav">
            <nav class="menu">
                <ul class="ulStyle">
                    <li id="perfil" style="margin: 0 3% 0 5%;"><a href="#perfilP"> Perfil </a></li>
                    <li style="margin: 0 3% 0 1%;"><a href="#"> Productos </a>
                        <!-- SubMenu -->
                        <ul class="subMenu">
                            <li><a href="#consultarProd"> Consultar Producto </a> </li>
                            <li><a href="#agregarProd"> Agregar Producto </a> </li>
                            <li><a href="#actuProd"> Actualizar Producto </a> </li>
                            <li><a href="#estadoProd"> Estado Producto </a> </li>
                        </ul>
                    </li>
                    <li style="margin: 0 3% 0 5%;"><a href="#"> Administradores </a>
                        <!-- SubMenu -->
                        <ul class="subMenu">
                            <li><a href="#consultarAdmin"> Consultar Administrador </a> </li>
                            <li><a href="#agregarAdmin"> Agregar Administrador </a> </li>
                            <li><a href="#estadoAdmin"> Estado Administrador </a> </li>
                        </ul>
                    </li>
                    <li style="margin: 0 3% 0 5%;"><a href="#"> Categoria </a>
                        <!-- SubMenu -->
                        <ul class="subMenu">
                            <li><a href="#consultarCat"> Consultar Categoria </a> </li>
                            <li><a href="#agregarCat"> Agregar Categoria </a> </li>
                            <li><a href="#actuCat"> Actualizar Categoria </a> </li>
                            <li><a href="#estadoCat"> Estado Categoria </a> </li>
                        </ul>
                    </li>
                    <li style="margin: 0 3% 0 5%;"><a href="#"> Subategoria </a>
                        <!-- SubMenu -->
                        <ul class="subMenu">
                            <li><a href="#consultarSubcat"> Consultar Subcategoria </a> </li>
                            <li><a href="#agregarSubcat"> Agregar Subcategoria </a> </li>
                            <li><a href="#actuSubcat"> Actualizar Subcategoria </a> </li>
                            <li><a href="#estadoSubcat"> Estado Subcategoria </a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
   
    <!------------------------------- Div principal para las tablas --------------->
    <div style="margin-top: -3%; " id="principal">
        <img style="margin: 3% 20% 3% 30%;" src="https://cdn.pixabay.com/photo/2018/03/19/18/20/tea-time-3240766_1280.jpg" height="40%" width="40%" alt="cafe">
        <div class="campos" id="perfilP">
            <img src="img/gratula.png" width="10%" height="10%" alt="SuperAdmin Logo">
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
        <div class="campos" id="consultarProd">
            <h1>Consulta de Libros</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Nombre libro a buscar" class="datos" name="buscar" />
                <br>
                <br>
                <button class="btnForm" type="submit">Buscar</button>

                <div id="result"></div>
            </form>
        </div>
        <div class="campos" id="agregarProd">
            <h1>Agregar un nuevo producto</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Nombre del producto" class="datos" name="nombreProd" /><br>
                <input type="text" placeholder="Cantidad del producto" class="datos" name="cantProd" /><br>
                <input type="text" placeholder="Precio del producto" class="datos" name="precioProd" /><br>
                <input type="file" name="imgagen" class="datos"><br>
                <button class="btnForm" type="submit">Enviar</button>
                <br>
            </form>
        </div>
        <div class="campos" id="actuProd">
            <h1>Actualizar Producto</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Id del producto" class="datos" name="idProd" /><br>
                <input type="text" placeholder="Nuevo nombre del producto" class="datos" name="newNombreProd" /><br>
                <input type="text" placeholder="Cantidad del producto" class="datos" name="newCantProd" /><br>
                <input type="text" placeholder="Precio del producto" class="datos" name="newPrecioProd" /><br>
                <button class="btnForm" type="submit">Enviar</button>
            </form>
        </div>
        <div class="campos" id="estadoProd">
            <h1>Activar o desactivar un producto</h1>
            <form method="POST" action="#"><br>
                <input type="number" placeholder="Id producto" class="datos" name="idProd" /><br>
                <h3>Activar</h3>
                <input type="text" placeholder="Escriba activar" class="datos" name="activarProd" /><br>
                <h3>Desactivar</h3>
                <input type="text" placeholder="Escriba desactivar" class="datos" name="desactivarProd" /><br>
                <button class="btnForm" type="submit">Enviar</button>
            </form>
        </div>
        <!--                             Administrador                      -->
        <div class="campos" id="consultarAdmin">
            <h1>Consulta de Administrador</h1>
            <form method="POST" action="#"><br>
                <input type="number" placeholder="Id administrador a buscar" class="datos" name="buscarAdmin" />
                <br>
                <br>
                <button class="btnForm" type="submit">Buscar</button>
                <div id="result"></div>
            </form>
        </div>
        <div class="campos" id="agregarAdmin">
            <h1>Agregar un nuevo Admininistrador</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Nombre del Administrador" class="datos" name="nombreAdmin" /><br>
                <input type="text" placeholder="apellido del Administrador" class="datos" name="apellidoAdmin" /><br>
                <input type="text" placeholder="Correo del Administrador" class="datos" name="correoAdmin" /><br>
                <input type="text" placeholder="Telefono del Administrador" class="datos" name="telefonoAdmin" /><br>
                <button class="btnForm" type="submit">Enviar</button>
            </form>
        </div>
        <div class="campos" id="estadoAdmin">
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
        <!--                        Categoria                   -->
        <div class="campos" id="consultarCat">
            <h1>Consultar una categoria</h1>
            <form method="POST" action="#"><br>
                <input type="number" placeholder="Id categoria a buscar" class="datos" name="buscarCat" />
                <br>
                <br>
                <button class="btnForm" type="submit">Buscar</button>
                <div id="result"></div>
            </form>
        </div>
        <div class="campos" id="agregarCat">
            <h1>Agregar una nueva categoria</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Nombre nuevo categoria" class="datos" name="nombreCat" /><br>
                <button class="btnForm" type="submit">Enviar</button>
                <br>
            </form>
        </div>
        <div class="campos" id="actuCat">
            <h1>Actualizar Categoria</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Id categoria a modificar" class="datos" name="idCat" /><br>
                <input type="text" placeholder="Nuevo nombre categoria" class="datos" name="newNombreCat" /><br>
                <button class="btnForm" type="submit">Enviar</button>
            </form>
        </div>
        <div class="campos" id="estadoCat">
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
        <!--                        Subcategoria                   -->
        <div class="campos" id="consultarSubcat">
            <h1>Consultar una subcategoria</h1>
            <form method="POST" action="#"><br>
                <input type="number" placeholder="Id subcategoria a buscar" class="datos" name="buscarSubCat" />
                <br>
                <br>
                <button class="btnForm" type="submit">Buscar</button>
                <div id="result"></div>
            </form>
        </div>
        <div class="campos" id="agregarSubcat">
            <h1>Agregar una nueva subcategoria</h1>
            <form method="POST" action="#"><br>
                <input type="text" placeholder="Nombre subcategoria" class="datos" name="nombreSubCat" /><br>
                <button class="btnForm" type="submit">Enviar</button>
                <br>
            </form>
        </div>
        <div class="campos" id="actuSubcat">
            <h1>Actualizar subcategoria</h1>
            <form method="POST" action="#"><br>
                <input type="number" placeholder="Id subcategoria" class="datos" name="idSubCat" /><br>
                <input type="text" placeholder="Nuevo nombre subcategoria" class="datos" name="newNombreSubCat" /><br>
                <button class="btnForm" type="submit">Enviar</button>
            </form>
        </div>
        <div class="campos" id="estadoSubcat">
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
    </div>
    <!--------------------------- Footer ---------------------------------------->
    <footer>
        <div id="redSocial">
            <div id="letrasRed">
                CADESTRE SEU E-MAIL E GANHE UM CUPOM PARA SUA PRIMEIRA COMPRA
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
                    <h4>Quem Somos</h4>
                </a><br>
                <a href="">
                    <p class="estiloA">Trabalhe conosco</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Localizacao de lojas</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Teatro Eva Herz</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Vale Presente</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Recuperacao Judicial</p>
                </a><br>
            </div>
            <div class="cuadrosPagamento">
                <a href="">
                    <h4>Entre em Contacto</h4>
                </a><br>
                <a href="">
                    <p class="estiloA">Politica de entrega y devolucao</p>
                </a><br>
                <a href="">
                    <p class="estiloA"> Politica de vendas</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Perguntas e respostas</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Atendimiento Kobo</p>
                </a><br>
            </div>
            <div class="cuadrosPagamento">
                <a href="">
                    <h4>Mais leítores</h4>
                </a><br>
                <a href="">
                    <p class="estiloA">Espalhe cultura</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Mais cultura</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Cultura itaucard</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Latam pass</p>
                </a><br>
                <a href="">
                    <p class="estiloA">Solicitacao de evento</p>
                </a><br>
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
                    <h4> CERTIFICADOS </h4>
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
    <script src="funciones.js"></script>
</body>

</html>