function cargarContenido(abrir){
    var contenedor;
    contenedor = document.getElementById('datos');
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function crearAlumno() {
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-alumno");
    var parametros = new FormData(formulario);
    fetch("creaciones.php",
		{method:"POST",
		body:parametros})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);

    
}
function editarAlumno(id)
{
    
    cargarContenido('form_update_alumno.php?id='+id)
}
function update()
{
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-alumno");
    var parametros = new FormData(formulario);
    fetch("update.php",
		{method:"POST",
		body:parametros})
		.then(response => response.text())
		.then(data => {contenedor.innerHTML=data
        cargarContenido('read.php');
        });

        
}
function deleteAlumno(id)
{
    
    cargarContenido('delete.php?id='+id)
}











