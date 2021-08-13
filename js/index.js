var indexForm = document.getElementById("index_form");

$(document).ready(function(){
    $("#start__button").click(function(){
        var userName = document.forms["index_form"]["userName"];
        var nameRegExp = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
        var nameErrorMessage = document.getElementById('name_error__message');
        var nameMaxCharacters = 35;

        var userEmail = document.forms["index_form"]["userEmail"];
        var emailRegExp = /^([a-z\d\-._\u00f1\u00d1]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
        var emailErrorMessage = document.getElementById('email_error__message');
        var emailMaxCharacters = 50;

        var userEmailIsValid = validateField(userEmail, emailRegExp, emailErrorMessage, emailMaxCharacters);
        var userNameIsValid = validateField(userName, nameRegExp, nameErrorMessage, nameMaxCharacters);

        if(userNameIsValid && userEmailIsValid) {
            indexForm.submit();
        }
    });
    
});

function validateField(field, regExp, errorMessage, maxCharacters){
    let isValid = false;
    const pattern = new RegExp(regExp);
    
    if(!field.value) {
        isValid = false;
    }else if(field.value.length > maxCharacters) {    
        isValid = false;
    }else if(!pattern.test(field.value)){   
        isValid = false;
    }else{
        isValid = true;
    }

    if(!isValid) {
        field.focus();
        field.style.borderColor = 'red';
        errorMessage.hidden = false;
    }else{
        field.style.borderColor = 'black';
        errorMessage.hidden = true;
    }

    return isValid;
}


