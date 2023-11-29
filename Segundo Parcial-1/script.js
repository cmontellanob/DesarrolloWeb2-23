function cargarBotones() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("menu").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "botones.html", true);
    xhttp.send();

    var buttonSection3Element = document.getElementById("mensaje");


    var nuevoTexto = document.createTextNode("Nombre: Madizon Lauren Gonzales Arancibia | CU: 35-5274");
    buttonSection3Element.innerHTML = '';

    buttonSection3Element.appendChild(nuevoTexto);

}
function autenticar()
{
// document.getElementById("logboton").addEventListener("click", () => {
//     fetch("login.html")
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById("resultDiv").innerHTML = data;

//             document.getElementById("submit").addEventListener("click", () => {
//                 const usuario = document.getElementById("usuario").value;
//                 const contrasenia = document.getElementById("contrasenia").value;

//                 fetch("autenticar.php", {
//                     method: "POST",
//                     body: `usuario=${usuario}&contrasenia=${contrasenia}`,
//                     headers: {
//                         "Content-Type": "application/x-www-form-urlencoded"
//                     }
//                 })
//                     .then(response => response.text())
//                     .then(result => {

//                         document.getElementById("resultDiv").innerHTML = result;
//                     });
//             });
//         });
// });
}

function cargarContenido(abrir) {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function cargarContenido2(abrir) {
    var contenedor = document.getElementById('menu');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = '';
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();


}


function mostrarImagen(nombre, titulo) {

    document.getElementById('principal').innerHTML = `<img src="${nombre}" alt="${titulo}">`;


    document.getElementById('mensaje').innerHTML = `Nombre de la imagen: ${titulo}.jpg`;
}



function pregunta3() {

    fetch(`login.php`)
        .then(response => response.text())
        .then(data => document.getElementById('principal').innerHTML  = data)
}
function pregunta2() {
    fetch(`galeria.php`)
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
}

function ejecutarScriptsDirectamente(contenedor) {
    var scripts = contenedor.getElementsByTagName('script');
    for (var i = 0; i < scripts.length; i++) {
        try {
            eval(scripts[i].innerHTML);
        } catch (error) {
            console.error('Error ejecutando script:', error);
        }
    }
}

function mostrarTabla() {
    var numero = parseInt(document.getElementById('numero').value);
    var limite = parseInt(document.getElementById('limite').value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;

    if (isNaN(numero) || numero >= 10 || isNaN(limite) || limite <= 0) {
        alert('Por favor, introduce números válidos.');
        return;
    }
    var resultado = '';
    for (var i = 1; i <= limite; i++) {
        if (operacion === 'multiplicar') {
            resultado += numero + ' x ' + i + ' = ' + (numero * i) + '<br>';
        } else if (operacion === 'sumar') {
            resultado += numero + ' + ' + i + ' = ' + (numero + i) + '<br>';
        } else if (operacion === 'resta') {
            resultado += numero + ' - ' + i + ' = ' + (numero - i) + '<br>';
        } else if (operacion === 'division') {
            resultado += numero + ' / ' + i + ' = ' + (numero / i) + '<br>';
        }
    }
    document.getElementById('Resultado').innerHTML = resultado;
}

function actualizarImagen() {
    var selectLibros = document.getElementById('selectLibros');
    var divImagen = document.getElementById('divImagen');
    var imagenLibro = document.getElementById('imagenLibro');

    var libroSeleccionado = selectLibros.options[selectLibros.selectedIndex].value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'datos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {

            var respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta)
            document.getElementById('button_section3').innerHTML = `Nombre de la imagen: ${respuesta.nombre}.jpg`;
            divImagen.innerHTML = '<img src="' + respuesta.imagen + '" alt="' + libroSeleccionado + '" id="imagenLibro">';
        }
    };
    xhr.send('libro=' + libroSeleccionado);

    return false;
}
function login() {
    let form = document.getElementById('login_form')
    let data = new FormData(form)
    fetch(`autenticar.php`, { method: 'POST', body: data })
        .then(response => response.text())
        .then(data => mensaje.innerHTML = data)
}
function autenticar(){
    var principal= document.getElementById("principal");
    var formulario = document.getElementById("login_form");
    var parametros = new FormData(formulario);
    fetch("autenticar.php",
		{method:"POST",
		body:parametros})
		.then(response => response.text())
		.then(data => principal.innerHTML=data);

}