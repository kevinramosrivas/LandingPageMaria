const head1 = document.querySelector('.header__texto h2');//de 0-1
console.log(head1);

const enlaces = document.querySelectorAll('.navegacion a');//de 0-mas
console.log(enlaces);
console.log(enlaces[2]);

const nombre = document.querySelector('#nombre');

const correo = document.querySelector('#correo');

const mensaje = document.querySelector('#mensaje');

const formulario = document.querySelector('#formulario');


const usuario={
    nombre:'',
    correo:'',
    mensaje:''
}

nombre.addEventListener('input',validar);
correo.addEventListener('input',validar);
mensaje.addEventListener('input',validar);

formulario.addEventListener('submit',function(e){
    e.preventDefault();
    const{nombre,correo,mensaje}=usuario;
    if(nombre==='' || correo==='' || mensaje===''){
        alerta('Todos los campos son obligatorios',true);
        return;
    }
    alerta('enviando formulario');
});

function alerta(mensaje,tipo=null){
    const aviso = document.createElement('P');
    aviso.textContent = mensaje;
    if(tipo!= null){
        aviso.classList.add('error');
    }else{
        aviso.classList.add('correcto');
        
    }
    formulario.appendChild(aviso);
    setTimeout(()=>{aviso.remove();},3000);
}


function validar(e){
    usuario[e.target.id]=e.target.value;
    console.log(usuario);
}