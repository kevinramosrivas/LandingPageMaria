var config = {
    apiKey: "AIzaSyDaWNrlu2qLwwFcKMh5HXlNo_gbOoiZq_g",
    authDomain: "landingmaria-78ce2.firebaseapp.com",
    databaseURL: "https://landingmaria-78ce2-default-rtdb.firebaseio.com",
    projectId: "landingmaria-78ce2",
    storageBucket: "landingmaria-78ce2.appspot.com",
    messagingSenderId: "1019927483580",
    appId: "1:1019927483580:web:47f37663270cffd0b0ecb9",
    measurementId: "G-4F3LNEQNB4"
};

firebase.initializeApp(config);

document.querySelector(".contact-form").addEventListener("submit",submitForm);

let contactInfo = firebase.database().ref("infos");

function submitForm(e){
    e.preventDefault();
    // obtener los valores introducidos

    const name = document.querySelector(".name").value;
    const email = document.querySelector(".email").value;
    const event = document.querySelector(".event").value;
    const date_event = document.querySelector(".date_event").value;
    const invitados = document.querySelector(".invitados").value;
    const message = document.querySelector(".message").value;

    console.log(
        typeof(name),
        typeof(email),
        typeof(event),
        typeof(date_event),
        typeof(invitados),
        typeof(message)
        );
    saveContactInfo(name,email,event,date_event,invitados,message);
    alert("los datos fueron enviados corrrectamente");
    document.getElementById("form").reset();
    

}

function saveContactInfo(name,email,event,date_event,invitados,message){
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        nombre: name,
        email: email,
        evento: event,
        dia_del_evento: date_event,
        invitados: invitados,
        mensaje: message,

    });
}