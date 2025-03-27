function tiempoActual() {
    let now = new Date();
    let hh = now.getHours();
    let mm = now.getMinutes();
    let ss = now.getSeconds();

    hh = (hh < 10) ? "0" + hh : hh;
    mm = (mm < 10) ? "0" + mm : mm;
    ss = (ss < 10) ? "0" + ss : ss;

    let hora = hh + ":" + mm + ":" + ss;
    let reloj = document.querySelector('#reloj');
    reloj.innerHTML = hora;

}

let mostrarFecha = document.getElementById('fecha');

let fecha = new Date();

let diaSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
let mesAnyo = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 
    'Octubre', 'Noviembre', 'Diciembre'];

mostrarFecha.innerHTML = `${diaSemana[fecha.getDay()]}, ${fecha.getDate()} de ${mesAnyo[fecha.getMonth()]} de 
${fecha.getFullYear()}`;
    


setInterval(tiempoActual, 1000);