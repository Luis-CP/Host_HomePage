function submitContactForm(event) {
    event.preventDefault(); // evita que la página se recargue al enviar el formulario

    // obtener los valores de los campos del formulario
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    // crear un objeto con los datos del formulario
    let formData = {
        name: name,
        email: email,
        message: message
    };

    // enviar los datos del formulario al servidor usando Fetch API o Axios
    fetch('/send-email', {
        method: 'POST',
        body: JSON.stringify(formData),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log('Mensaje enviado', data);
    })
    .catch(error => {
        console.error('Error al enviar el mensaje', error);
    });
}

// asociar la función "submitContactForm" al evento "submit" del formulario
let contactForm = document.getElementById('contact-form');
contactForm.addEventListener('submit', submitContactForm);