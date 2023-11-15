function factorial(n) {
    if (n == 0) {
        return 1;
    }
    else {
        return n * factorial(n - 1);
    }

}
function historial(pregunta) {
    if (pregunta == "menu") {
        document.getElementById('historial').innerHTML += `<div> ${pregunta}</div>`
    }
    else {
        document.getElementById('historial').innerHTML += `<div>Pregunta ${pregunta}</div>`
    }

}
function datos() {
    document.getElementById('titulo').innerHTML =
        `<div>
        <li>NOmbre:Carlos Montellano</li>
        <li>cu:35-239</li>
    </div>`

}

function pregunta1() {
    datos();
    historial(1);
}
function pregunta2() {
    document.getElementById('principal').innerHTML =
        `<div>
        <label for="numero">Tabla del</label>
        <input type="number" id="numero"> <br>
        <input type="radio" name="operacion" value="factorial"> factorial <br>
        <input type="radio" name="operacion" value="sumar"> Suma <br>
        <input type="radio" name="operacion" value="resta"> Resta <br>
       
        <label for="tope">hasta el</label>
        <input type="number" id="limite">
        <button onclick="generarTabla()">Tabla</button>
    </div>
    <div id="Resultado">
    </div>
    `
    historial(2);
}

function menu() {
    cargarContenido('botones.html');
    historial("menu");
}
function pregunta3() {
    cargarContenido2('formulario.html');
    historial(3);

}
function pregunta4() {
    var contenedor;
    contenedor = document.getElementById('principal');
    
    fetch('forminsertar.html')
        .then(response => response.text())
        .then(data => {
            contenedor.innerHTML = data
            historial(4);
        });
}
function formmasivo() {
    var contenedor;
    contenedor = document.getElementById('principal');
    var n=document.getElementById('n').value;
    alert("enbtro");
    fetch('form-insertar-masivo.php?n='+n)
        .then(response => response.text())
        .then(data => {
            contenedor.innerHTML = data
            
        });
}

function insertarmasivo()
{

}
    

function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById('menu');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

/*pregunta 2*/

function cargarContenido2(abrir) {
    var contenedor;
    contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function obtener() {

    var numero = document.getElementById("numero").value;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "introducir.php?numero=" + numero, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {

            var resultado = xhr.responseText;

            document.getElementById("suma").innerHTML = resultado;
        }
    };



    xhr.send();
}

function calcular() {
    suma = 0;
    sumandos = document.getElementsByName('numeros');
    for (i = 0; i < sumandos.length; i++) {
        suma += parseInt(sumandos[i].value);

    }
    document.getElementById('res').innerHTML = suma;

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
        if (operacion === 'factorial') {
            resultado += numero + ' x ' + i + ' = ' + (numero * i) + '<br>';
        } else if (operacion === 'sumar') {
            resultado += numero + ' + ' + i + ' = ' + (numero + i) + '<br>';
        } else if (operacion === 'resta') {
            resultado += numero + ' - ' + i + ' = ' + (numero - i) + '<br>';
        }
    }
    document.getElementById('Resultado').innerHTML = resultado;
}

function cargarTabla() {
    var contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest();

    ajax.open('GET', 'tabla.html', true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };

    ajax.setRequestHeader('Content-Type', 'text/html; charset=utf-8');
    ajax.send();
}


function generarTabla() {
    var numero = parseInt(document.getElementById('numero').value);
    var limite = parseInt(document.getElementById('limite').value);
    var a = document.getElementsByName('operacion');
    var operacion;
    for (i = 0; i < a.length; i++) {
        if (a[i].checked) {
            operacion = a[i].value;
        }
    }
    // if (isNaN(numero) || numero >= 10 || isNaN(limite) || limite <= 0) {
    //     alert('Por favor, introduce números válidos.');
    //     return;
    // }
    var resultado = '<table border="1">';

    for (var i = 1; i <= limite; i++) {
        resultado += '<tr>'
        if (operacion === 'factorial') {
            resultado += `
            <td>factorial de </td><td> ${numero} </td><td> = </td><td> ${factorial(numero + i)} </td>`;
        } else if (operacion === 'sumar') {
            resultado += `
            <td> ${numero}</td><td>+ </td><td>${i} </td><td> = </td><td> ${(numero + i)} </td>`;

        } else if (operacion === 'resta') {
            resultado += `
            <td> ${numero}</td><td>- </td><td>${i} </td><td> = </td><td> ${(numero - i)} </td>`;
        }
    }
    document.getElementById('Resultado').innerHTML = resultado;
}

/*Pregunta 3*/

function cargarContenido3(abrir) {
    var contenedor;
    contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            console.log(ajax)
            console.log(abrir)
            console.log(contenedor)
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}