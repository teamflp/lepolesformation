/**
 * FONCTION POUR VALIDER TOUT TYPE DE FORMULAIRE TEL QUE:  
 * LE FORMULAIRE DE CONTACT, 
 * FORMULAIRE D'INSCRIPTION,
 * FORMULAIRE DE CONNEXION
 * LES DONNÉES BANCAIRES
 * CODE POSTAL
 * ETC...
 * 
 * @returns {int}  0 = formulaire invalide
 *                 1 = formulaire valide
 *                 2 = formulaire valide mais pas de message 
 */

 var form = document.getElementById('form');
 var input = form.getElementsByTagName('input');
 var select = form.getElementsByTagName('select');
 var textarea = form.getElementsByTagName('textarea');
 var i = 0;
 var j = 0;
 var k = 0;
 var l = 0;
 var m = 0;
 var n = 0;
 var o = 0;
 var p = 0;
 var q = 0;
 var r = 0;
 var s = 0;
 var t = 0;
 var u = 0;
 var v = 0;
 var w = 0;
 var x = 0;
 var y = 0;
 var z = 0;
 var a = 0;
 var b = 0;
 var c = 0;
 var d = 0;
 var e = 0;
 var f = 0;
 var g = 0;
 var h = 0;
 var ii = 0;
 var jj = 0;
 var kk = 0;
 var ll = 0;
 var mm = 0;
 var nn = 0;
 var oo = 0;
 var pp = 0;
 var qq = 0;
 var rr = 0;
 var ss = 0;
 var tt = 0;
 var uu = 0;
 var vv = 0;
 var ww = 0;
 var xx = 0;
 var yy = 0;
 var zz = 0;
 var aaa = 0;
 var bbb = 0;
 var ccc = 0;
 var ddd = 0;
 var eee = 0;
 var fff = 0;
 var ggg = 0;
 var hhh = 0;
 var iii = 0;
 var jjj = 0;

// ON CRÉE UNE API POUR VALIDER LES CHAMPS DU FORMULAIRE

function API() {
    var i = 0;
    var j = 0;
    var k = 0;
    var l = 0;
    var m = 0;
    var n = 0;
    var o = 0;
    var p = 0;
    var q = 0;
    var r = 0;
    var s = 0;
    var t = 0;
    var u = 0;
    var v = 0;
    var w = 0;
    var x = 0;
    var y = 0;
    var z = 0;
    var a = 0;
    var b = 0;
    var c = 0;
    var d = 0;
    var e = 0;
    var f = 0;
    var g = 0;
    var h = 0;
    var ii = 0;
    var jj = 0;
    var kk = 0;
    var ll = 0;
    var mm = 0;
    var nn = 0;
    var oo = 0;
    var pp = 0;
    var qq = 0;
    var rr = 0;
    var ss = 0;
    var tt = 0;
    var uu = 0;
    var vv = 0;
    var ww = 0;
    var xx = 0;
    var yy = 0;
    var zz = 0;
    var aaa = 0;
    var bbb = 0;
    var ccc = 0;
    var ddd = 0;
    var eee = 0;
    var fff = 0;
    var ggg = 0;
    var hhh = 0;
    var iii = 0;
    var jjj = 0;

    // ON PARCOURS LES INPUTS DU FORMULAIRE
    for (i = 0; i < input.length; i++) {
        // ON PARCOURS LES SELECT DU FORMULAIRE
        for (j = 0; j < select.length; j++) {
            // ON PARCOURS LES TEXTAREA DU FORMULAIRE
            for (k = 0; k < textarea.length; k++) {
                // ON VALIDER LES INPUTS DU FORMULAIRE
                if (input[i].type === 'text') {
                    if (input[i].value === '') {
                        input[i].style.border = '1px solid red';
                        input[i].style.color = 'red';
                        input[i].style.background = 'rgba(255, 0, 0, 0.1)';
                        input[i].style.outline = 'none';
                        input[i].style.transition = 'all 0.5s ease';
                        input[i].placeholder = 'Ce champ est obligatoire';
                        input[i].focus();
                        return 0;
                    } else {
                        input[i].style.border = '1px solid green';
                        input[i].style.color = 'green';
                        input[i].style.background = 'rgba(0, 255, 0, 0.1)';
                        input[i].style.outline = 'none';
                        input[i].style.transition = 'all 0.5s ease';
                        input[i].placeholder = '';
                        return 1;
                    }
                }
                // ON VALIDER LES SELECT DU FORMULAIRE
                if (select[j].type === 'select') {
                    if (select[j].value === '') {
                        select[j].style.border = '1px solid red';
                        select[j].style.color = 'red';
                        select[j].style.background = 'rgba(255, 0, 0, 0.1)';
                        select[j].style.outline = 'none';
                        select[j].style.transition = 'all 0.5s ease';
                        select[j].focus();
                        return 0;
                    } else {
                        select[j].style.border = '1px solid green';
                        select[j].style.color = 'green';
                        select[j].style.background = 'rgba(0, 255, 0, 0.1)';
                        select[j].style.outline = 'none';
                        select[j].style.transition = 'all 0.5s ease';
                        return 1;
                    }
                }

                // ON VALIDER LES TEXTAREA DU FORMULAIRE
                if (textarea[k].type === 'textarea') {
                    if (textarea[k].value === '') {
                        textarea[k].style.border = '1px solid red';
                        textarea[k].style.color = 'red';
                        textarea[k].style.background = 'rgba(255, 0, 0, 0.1)';
                        textarea[k].style.outline = 'none';
                        textarea[k].style.transition = 'all 0.5s ease';
                        textarea[k].placeholder = 'Ce champ est obligatoire';
                        textarea[k].focus();
                        return 0;
                    } else {
                        textarea[k].style.border = '1px solid green';
                        textarea[k].style.color = 'green';
                        textarea[k].style.background = 'rgba(0, 255, 0, 0.1)';
                        textarea[k].style.outline = 'none';
                        textarea[k].style.transition = 'all 0.5s ease';
                        textarea[k].placeholder = '';
                        return 1;
                    }
                }
            }
        }
    }
}

// REGEX POUR VALIDER LES CHAMPS TEL QUE:
// CODE POSTAL, NUMÉRO DE TÉLÉPHONE, CARTE DE CRÉDIT, 
// CARTE D'IDENTITÉ, NUMÉRO DE SÉCURITÉ SOCIALE, PASSPORT, CARTE DE SÉJOUR
// PAYPAL, VIREMENT BANCAIRE, CARTE BANCAIRE, RIB, ETC...

// REGEX POUR VALIDER LE CODE POSTAL
function validatePostalCode() {
    var postalCode = document.getElementById('postalCode');
    var regexPostalCode = /^[0-9]{5}$/;
    if (regexPostalCode.test(postalCode.value)) {
        postalCode.style.border = '1px solid green';
        postalCode.style.backgroundColor = '#D9FFD9';
        postalCode.style.color = 'green';
        return 1;
    } else {
        postalCode.style.border = '1px solid red';
        postalCode.style.backgroundColor = '#FFD9D9';
        postalCode.style.color = 'red';
        postalCode.focus();
        return 0;
    }
}

// REGEX POUR VALIDER LE NUMÉRO DE TÉLÉPHONE
function validatePhoneNumber() {
    var phoneNumber = document.getElementById('phoneNumber');
    var regexPhoneNumber = /^[0-9]{10}$/;
    if (regexPhoneNumber.test(phoneNumber.value)) {
        phoneNumber.style.border = '1px solid green';
        phoneNumber.style.backgroundColor = '#D9FFD9';
        phoneNumber.style.color = 'green';
        return 1;
    } else {
        phoneNumber.style.border = '1px solid red';
        phoneNumber.style.backgroundColor = '#FFD9D9';
        phoneNumber.style.color = 'red';
        phoneNumber.focus();
        return 0;
    }
}

// REGEX POUR VALIDER LE NUMÉRO DE CARTE DE CRÉDIT 
function validateCreditCardNumber() {
    var creditCardNumber = document.getElementById('creditCardNumber');
    var regexCreditCardNumber = /^[0-9]{16}$/;
    if (regexCreditCardNumber.test(creditCardNumber.value)) {
        creditCardNumber.style.border = '1px solid green';
        creditCardNumber.style.backgroundColor = '#D9FFD9';
        creditCardNumber.style.color = 'green';
        return 1;
    } else {
        creditCardNumber.style.border = '1px solid red';
        creditCardNumber.style.backgroundColor = '#FFD9D9';
        creditCardNumber.style.color = 'red';
        creditCardNumber.focus();
        return 0;
    }
}

// REGEX POUR VALIDER LE NUMÉRO DE CARTE D'IDENTITÉ
function validateIdentityCardNumber() {
    var identityCardNumber = document.getElementById('identityCardNumber');
    var regexIdentityCardNumber = /^[0-9]{13}$/;
    if (regexIdentityCardNumber.test(identityCardNumber.value)) {
        identityCardNumber.style.border = '1px solid green';
        identityCardNumber.style.backgroundColor = '#D9FFD9';
        identityCardNumber.style.color = 'green';
        return 1;
    } else {
        identityCardNumber.style.border = '1px solid red';
        identityCardNumber.style.backgroundColor = '#FFD9D9';
        identityCardNumber.style.color = 'red';
        identityCardNumber.focus();
        return 0;
    }
}

// REGEX POUR VALIDER LE NUMÉRO DE PERMIS DE CONDUIRE
function validateDrivingLicenseNumber() {
    var drivingLicenseNumber = document.getElementById('drivingLicenseNumber');
    var regexDrivingLicenseNumber = /^[0-9]{13}$/;
    if (regexDrivingLicenseNumber.test(drivingLicenseNumber.value)) {
        drivingLicenseNumber.style.border = '1px solid green';
        drivingLicenseNumber.style.backgroundColor = '#D9FFD9';
        drivingLicenseNumber.style.color = 'green';
        return 1;
    } else {
        drivingLicenseNumber.style.border = '1px solid red';
        drivingLicenseNumber.style.backgroundColor = '#FFD9D9';
        drivingLicenseNumber.style.color = 'red';
        drivingLicenseNumber.focus();
        return 0;
    }
}

// REGEX POUR VALIDER LE NUMÉRO DE SÉCURITÉ SOCIALE
function validateSocialSecurityNumber() {
    var socialSecurityNumber = document.getElementById('socialSecurityNumber');
    var regexSocialSecurityNumber = /^[0-9]{13}$/;
    if (regexSocialSecurityNumber.test(socialSecurityNumber.value)) {
        socialSecurityNumber.style.border = '1px solid green';
        socialSecurityNumber.style.backgroundColor = '#D9FFD9';
        socialSecurityNumber.style.color = 'green';
        return 1;
    } 
    // SINON, ON VÉRIFIE VIA UNE API SI LE NUMÉRO DE SÉCURITÉ SOCIALE APPARTIENT À LA PERSONNE QUI A REMPLI LE FORMULAIRE


    // SINON SI LE NUMÉRO DE SÉCURITÉ SOCIALE EST VIDE
    else if (socialSecurityNumber.value == '') {
        socialSecurityNumber.style.border = '1px solid #ccc';
        socialSecurityNumber.style.backgroundColor = '#fff';
        socialSecurityNumber.style.color = '#000';
        return 2;
    }
    else {
        socialSecurityNumber.style.border = '1px solid red';
        socialSecurityNumber.style.backgroundColor = '#FFD9D9';
        socialSecurityNumber.style.color = 'red';
        socialSecurityNumber.focus();
        return 0;
    }
}

// REGEX POUR VALIDER LE PASSPORT
function validatePassportNumber() {
    var passportNumber = document.getElementById('passportNumber');
    var regexPassportNumber = /^[0-9]{13}$/;
    if (regexPassportNumber.test(passportNumber.value)) {
        passportNumber.style.border = '1px solid green';
        passportNumber.style.backgroundColor = '#D9FFD9';
        passportNumber.style.color = 'green';
        return 1;
    } else {
        passportNumber.style.border = '1px solid red';
        passportNumber.style.backgroundColor = '#FFD9D9';
        passportNumber.style.color = 'red';
        passportNumber.focus();
        return 0;
    }
}

function validateFormField() {
    // Vérification des champs de type input
    for (i = 0; i < input.length; i++) {
        if (input[i].type === 'text' || input[i].type === 'password' || input[i].type === 'email' || input[i].type === 'tel' || input[i].type === 'number' || input[i].type === 'date' || input[i].type === 'time' || input[i].type === 'datetime' || input[i].type === 'datetime-local' || input[i].type === 'month' || input[i].type === 'week' || input[i].type === 'url' || input[i].type === 'search') {
            if (input[i].value === '') {
                input[i].style.border = '1px solid red';
                input[i].style.backgroundColor = '#FFD9D9';
                input[i].style.color = 'red';
                input[i].focus();
                return 0;
            } else {
                input[i].style.border = '1px solid green';
                input[i].style.backgroundColor = '#D9FFD9';
                input[i].style.color = 'green';
            }
        }
    }
}
