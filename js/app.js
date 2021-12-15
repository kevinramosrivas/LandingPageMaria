const btnIngresar = document.getElementById('btnIngresar');
console.log(
    typeof(nombre),
    typeof(email),
    typeof(evento),
    typeof(date_evento),
    typeof(invitados),
    typeof(mensaje)
);

btnIngresar.addEventListener('click', validateForm);

function validateForm (e){
    e.preventDefault();
    const nombre = document.querySelector(".name").value;
    const email = document.querySelector(".email").value;
    const evento = document.querySelector(".event").value;
    const date_evento = document.querySelector(".date_event").value;
    const invitados = document.querySelector(".invitados").value;
    const mensaje = document.querySelector(".message").value
    if(nombre ===''|| email ===''|| evento==='' 
        || date_evento ==='' || invitados==='' || mensaje ===''){
        swal.fire({
            title: 'Error',
            text: 'Debe completar todos los campos',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    else{
        form.submit();
        document.getElementById("form").reset();
        alert("Sus datos fueron enviados con exito");
    }
}