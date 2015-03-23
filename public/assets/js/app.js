//var persona = {
//    nombre: "Nicolas",
//    apellido: "Pineda",
//    lugar: "Medellin",
//    interes: ['programacion', 'futbol']
//};
//
//alert(persona.nombre)

var managerScreen = managerScreen || {};

managerScreen = {
    cambiarColorFondo: function (color) {
        // Javascript
//        document.body.style.background = color;

        // JQuery
        $("body").css("background-color", color);
    },
    saludar: function () {
        alert("Hola");
    },
    ocultarConId: function (id) {
        document.getElementById(id).style.display = 'none';
    },
    mostrarConId: function (id) {
        document.getElementById(id).style.display = 'block';
    },
    ocultarTodo: function (tag) {
        // Javascript
//        var ps = document.getElementsByTagName(tag);
//        for (i = 0; i < ps.length; i++) {
//            ps[i].style.display = 'none';
//        }

        // JQuery
        $(tag).hide();
    },
    mostrarTodo: function (tag) {
        // Javascript
//        var ps = document.getElementsByTagName(tag);
//        for (i = 0; i < ps.length; i++) {
//            ps[i].style.display = 'block';
//        }

        //JQuery:
        $(tag).show();
    },
    toggle: function (tag) {
        // Javascript
//        var ps = document.getElementsByTagName(tag);
//        for (i = 0; i < ps.length; i++) {
//            if (ps[i].style.display === 'none') {
//                ps[i].style.display = 'block';
//            } else {
//                ps[i].style.display = 'none';
//            }
//        }

        //JQuery
        $(tag).toggle();
    },
    desvanecer: function () {
        $("div,p").fadeToggle(2000);
    },
    alertify: function () {
        alertify.alert("Message");
        alertify.log("Notification", "", 10000);
    }
};

var ms = managerScreen;