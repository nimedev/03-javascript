<html>
    <head>
        <script src="./assets/js/app.js"></script>
        <!-- ideally at the bottom of the page -->
        <!-- also works in the <head> -->
        <script src="./assets/libs/alertify/lib/alertify.min.js"></script>
        <!-- include the core styles -->
        <link rel="stylesheet" href="./assets/libs/alertify/themes/alertify.core.css" />
        <!-- include a theme, can be included into the core instead of 2 separate files -->
        <link rel="stylesheet" href="./assets/libs/alertify/themes/alertify.default.css" />
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- Complexify -->
        <script type="text/javascript" src="./assets/js/jquery.complexify.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#txtPassword").complexify({}, function (valid, complexity) {
                    document.getElementById("PassValue").value = complexity;
                });
            });
        </script>
        <!-- Nice meter -->
        <link rel="stylesheet" href="./assets/css/styles.css"/>
        <script type="text/javascript" src="./assets/js/pass.js"></script>

    </head>
    <body> 
        <button onclick="ms.saludar()">Saludar</button>
        <button onclick="ms.desvanecer()()">Desvanecer</button>
        <button onclick="ms.cambiarColorFondo('green')">Verde</button>
        <button onclick="ms.cambiarColorFondo('red')">Rojo</button>
        <button onclick="ms.ocultarConId('parrafo')">Ocultar</button>
        <button onclick="ms.mostrarConId('parrafo')">Mostrar</button>
        <button onclick="ms.ocultarTodo('p')">Ocultar Todo</button>
        <button onclick="ms.mostrarTodo('p')">Mostrar Todo</button>
        <button onclick="ms.toggle('p')">Hide</button>
        <button onclick="ms.alertify()">Alertify</button>
        <p id="parrafo">Esto es un parrafo 1</p>
        <div>D1</div>
        <p>Esto es un parrafo 2</p>
        <div>D2</div>
        <p>Esto es un parrafo 3</p>
        <div>D3</div>
        <div id="main">
            <form class="" method="post" action="">
                <div class="row email">
                    <input type="text" id="email" name="email" placeholder="Email" />
                </div>

                <div class="row pass">
                    <input type="password" id="txtPassword" name="password1" placeholder="Password" />
                </div>

                <div class="row pass">
                    <meter value="0" id="PassValue" max="100"></meter>
                </div>

                <!-- The rotating arrow -->
                <div class="arrowCap"></div>
                <div class="arrow"></div>

                <p class="meterText">Password Meter</p>
                
            </form>
        </div>
    </body>
</html>