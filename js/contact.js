//-------------------------------- VALIDATION DU FORMULAIRE DE CONTACT ---------------------------------------------- //

// Déclaration des variables

const form = $('#form');
const nom = $('#nom');
const prenom = $('#prenom');
const email = $('#email');
const phone = $('#phone');
const msg = $('#msg');
const submit = $('#submit');
const errors = $('#errors');
const success = $('#success');document.writeln

// FONCTION POUR VÉRIFIER LES CARACTÈRES NON AUTORISÉS DANS LES CHAMPS DU FORMULAIRE
function regexChar(data) { 
    let regex = /^[a-zA-Zéèàâêôîùûç ]+$/;
    if (regex.test(data)) {
        return true;
    } else {
        return false;
    }
}

// ON INTERDIT LES CARACTÈRES SPÉCIAUX EXCEPTÉ LE .-@_ et le chiffres.
const emailRegex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

function validateEmail() {
    if (email.val() == '') {
        return false;
    } else if (!emailRegex.test(email.val())) {
        return false;
    } else {
        return true;
    }
}

// ON VÉRIFIE QUE LE CHAMP PHONE CONTIENT 10 CHIFFRES.
const phoneRegex = /^[0-9]{10}$/;

function validatePhone() {
    if (phone.val() == '') {
        return false;
    } else if (!phoneRegex.test(phone.val())) {
        return false;
    } else {
        return true;
    }
}

// FONCTION POUR VIDER INITIALISER LES CHAMPS DU FORMULAIRE
function resetForm() {
    nom.val('');
    prenom.val('');
    email.val('');
    phone.val('');
    msg.val('');
}

function escapeHtml(data) {
    return data.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, "&quot;").replace(/'/g, "&#039;");
}

// FONCTION POUR RETIRER LES ESPACES EN DEBUT ET FIN DE CHAINE ET SUPPRIMER LES BALISES HTML
function trimData(data) {
    return data.replace(/(<([^>]+)>)/ig, "").trim();
}

// ON SERIALISE LES DONNEES DU FORMULAIRE
function serializeForm(data) {
    let formData = {};
    for (let i = 0; i < data.length; i++) {
        formData[data[i].name] = trimData(data[i].value);
        formData[data[i].name] = escapeHtml(formData[data[i].name]);
        formData[data[i].name] = formData[data[i].name].replace(/<script[^>]*?>.*?<\/script>/gi, '');
    }
    return formData; 
}

submit.attr('disabled', true);
submit.css('background-color', '#ccc');

/**
 * Si les champs sont vides, on désactive le bouton submit
 * On verifie que l'adresse email ou le numéro de téléphone sont valides
 * On donne une bordure rouge aux champs vides
 * On affiche un msg d'erreur
 */

$(form).keyup(() => {
    const formData = [nom, prenom, email, phone, msg];
    let data = $(form).serializeArray();

    formData.forEach((data) => { 
        if (data.val() == '') {
            submit.attr('disabled', true);
            submit.css('background-color', '#ccc');
            data.css('border', '1px solid red');
            errors.html('Veuillez remplir tous les champs.');
            return false;
        } 
        else if (!validateEmail()) {
            submit.attr('disabled', true);
            email.css('border', '1px solid red');
            errors.html('Veuillez saisir un email valide.');
            return false;
        } 
        else if (!validatePhone()) {
            submit.attr('disabled', true);
            phone.css('border', '1px solid red');
            errors.html('Veuillez saisir un numéro de téléphone valide.');
            return false;
        }
        else if (nom.val().length < 2) { // Si le nom est inférieur à 2 caractères
            submit.attr('disabled', true);
            nom.css('border', '1px solid red');
            errors.html('Veuillez saisir un nom valide. Minimum 2 caractères.');
            return false;
        }

        else if (!regexChar(nom.val())) {
            submit.attr('disabled', true);
            nom.css('border', '1px solid red');
            errors.html('Nom invalide. Pas de caractères spéciaux ni de chiffres.');
            return false;
        }

        else if(prenom.val().length < 2) { // Si le prenom est inférieur à 2 caractères
            submit.attr('disabled', true);
            prenom.css('border', '1px solid red');
            errors.html('Veuillez saisir un prénom valide. Minimum 2 caractères.');
            return false;
        }

        else if (!regexChar(prenom.val())) {
            submit.attr('disabled', true);
            prenom.css('border', '1px solid red');
            errors.html('Prénom invalide. Pas de caractères spéciaux ni de chiffres.');
            return false;
        }

        else {
            submit.attr('disabled', false);
            submit.css('background-color', '#2c3e50');
            data.css('border', '1px solid #ccc');
            errors.html(''); 
        }
    });
});

$(form).submit((e) => {
    e.preventDefault(); 
    let data = $(form).serializeArray();
    let formData = serializeForm(data);
    
    //console.log(formData);
    //console.log(JSON.stringify(formData));

    $(form).hide();

    success.html('Votre message a bien été envoyé.');
    setTimeout(() => {
        $(form).hide();
    }, 5000);
 
    setTimeout(() => {
        $(form).show();
        submit.attr('disabled', true);
        submit.css('background-color', '#ccc');
        success.html('');
    }, 5000);
    resetForm();
});

