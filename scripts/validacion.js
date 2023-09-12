
const nombre = document.form.nombre;
const fecha = document.form.fecha;
const apellido = document.form.apellido;
const direccion = document.form.direccion;
const tiempoRes = document.form.tiempoRes;
const telefono = document.form.telefono;
const numSeg = document.form.numSeg;
const sabado = document.form.sabado;
const viernes = document.form.viernes;
const jueves = document.form.jueves;
const miercoles = document.form.miercoles;
const martes = document.form.martes;
const lunes = document.form.lunes;
const horasDisp = document.form.horasDisp;
const form = document.form;
const letras = new RegExp("^[a-zA-ZÀ-ÿ\\u00f1\\u00d1]+(\\s*[a-zA-ZÀ-ÿ\\u00f1\\u00d1])[a-zA-ZÀ-ÿ\\u00f1\\u00d1]+$");
const disp = new RegExp("^[0-9]{1,2}$");
const social = new RegExp("^[0-9]{9}$");
const dir = new RegExp("^[a-zA-Z\\s]+\#[0-9]{1,4}[\\s]+[a-zA-Z\\s]+");
const tel = new RegExp("^[477][0-9]{9}$");
const validar = (e) => {
    e.preventDefault();
    var ok = true;
    if (fecha.value == "") {
        fecha.style.borderColor = "#fa503f";
        document.getElementById('error1').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIngresa una fecha";
        ok = false;
    }
    if (!letras.test(nombre.value)) {
        nombre.style.borderColor = "#fa503f";
        document.getElementById('error2').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspEl nombre solo puede llevar letras";
        ok = false;
    }
    if (!letras.test(apellido.value)) {
        apellido.style.borderColor = "#fa503f";
        document.getElementById('error3').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspEl apellido solo puede llevar letras";
        ok = false;
    }
    if (!dir.test(direccion.value)) {
        direccion.style.borderColor = "#fa503f";
        document.getElementById('error4').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspLa direccion debe ser calle numero colonia";
        ok = false;
    }
    if (!disp.test(tiempoRes.value)) {
        tiempoRes.style.borderColor = "#fa503f";
        document.getElementById('error5').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce tu tiempo de residencia";
        ok = false;
    }
    if (!tel.test(telefono.value)) {
        telefono.style.borderColor = "#fa503f";
        document.getElementById('error6').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero  de telefono valido";
        ok = false;
    }
    if (!social.test(numSeg.value)) {
        numSeg.style.borderColor = "#fa503f";
        document.getElementById('error7').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de seguro social valido";
        ok = false;
    }
    if (!disp.test(sabado.value)) {
        sabado.style.borderColor = "#fa503f";
        document.getElementById('error8').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspEste campo debe ser numerico";
        ok = false;
    }
    if (!disp.test(viernes.value)) {
        viernes.style.borderColor = "#fa503f";
        document.getElementById('error9').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de horas valido";
        ok = false;
    }
    if (!disp.test(jueves.value)) {
        jueves.style.borderColor = "#fa503f";
        document.getElementById('error10').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de horas valido";
        ok = false;
    }
    if (!disp.test(miercoles.value)) {
        miercoles.style.borderColor = "#fa503f";
        document.getElementById('error11').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de horas valido";
        ok = false;
    }
    if (!disp.test(martes.value)) {
        martes.style.borderColor = "#fa503f";
        document.getElementById('error12').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de horas valido";
        ok = false;
    }
    if (!disp.test(lunes.value)) {
        martes.style.borderColor = "#fa503f";
        document.getElementById('error13').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de horas valido";
        ok = false;
    }
    if (!disp.test(horasDisp.value)) {
        horasDisp.style.borderColor = "#fa503f";
        document.getElementById('error14').innerHTML = "<i class='fa fa-exclamation-circle'></i>&nbsp&nbspIntroduce un numero de horas valido";
        ok = false;
    }
    if (ok) { form.submit() }
};

nombre.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        nombre.style.borderColor = "#adb5bd";
        document.getElementById('error2').innerHTML = "";
    }
});

apellido.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        apellido.style.borderColor = "#adb5bd";
        document.getElementById('error3').innerHTML = "";
    }
});

direccion.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        direccion.style.borderColor = "#adb5bd";
        document.getElementById('error4').innerHTML = "";
    }
});

tiempoRes.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        tiempoRes.style.borderColor = "#adb5bd";
        document.getElementById('error5').innerHTML = "";
    }
});

telefono.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        telefono.style.borderColor = "#adb5bd";
        document.getElementById('error6').innerHTML = "";
    }
});

numSeg.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        numSeg.style.borderColor = "#adb5bd";
        document.getElementById('error7').innerHTML = "";
    }
});

sabado.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        sabado.style.borderColor = "#adb5bd";
        document.getElementById('error8').innerHTML = "";
    }
});

viernes.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        viernes.style.borderColor = "#adb5bd";
        document.getElementById('error9').innerHTML = "";
    }
});

jueves.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        jueves.style.borderColor = "#adb5bd";
        document.getElementById('error10').innerHTML = "";
    }
});


miercoles.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        miercoles.style.borderColor = "#adb5bd";
        document.getElementById('error11').innerHTML = "";
    }
});

martes.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        martes.style.borderColor = "#adb5bd";
        document.getElementById('error12').innerHTML = "";
    }
});

lunes.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        lunes.style.borderColor = "#adb5bd";
        document.getElementById('error13').innerHTML = "";
    }
});

horasDisp.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        horasDisp.style.borderColor = "#adb5bd";
        document.getElementById('error14').innerHTML = "";
    }
});

fecha.addEventListener('focus', () => {
    if (typeof validar == 'function') {
        horasDisp.style.borderColor = "#adb5bd";
        document.getElementById('error1').innerHTML = "";
    }
});


form.addEventListener('submit', validar);