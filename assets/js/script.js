// formulaire
let form = document.querySelector('form');

button = document.createElement('button');
button.textContent = 'Envoyer';
button.setAttribute('type', 'submit');

document.querySelector('form').insertAdjacentElement('beforeend', button);

// commentaires
