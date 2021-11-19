// Validate field 
validateField = (e, field, regex, len, message) => {
    flag = false
        if (regex.test(e.target.value) && e.target.value.length <= len){
            $(field).removeClass('wrong')
            $(field).addClass('correct');
            console.log('true');
            $(message).html('');
            flag = true
        }else{
            $(field).removeClass('correct')
            $(field).addClass('wrong')
            console.log('false')
            $(message).html('Not acceptable');
            flag = false
        }
        return flag;
}

// validatePassword = (e, field, len) => {
//     var flag = false;
//     // Checking length 
//     var pass = e.target.value.length;
//     console.log(pass)
//     if(pass <= 3 || pass > len){
//         $(field).removeClass('correct')
//         $(field).removeClass('medium')
//         $(field).addClass('wrong')
//         console.log('short')
//     }
//     else if(pass > 3 && pass <= 7){
//         $(field).removeClass('correct')
//         $(field).removeClass('wrong')
//         $(field).addClass('medium')
//         console.log('medium')
//         console.log(e.target)
//     } 
//     else{
//         $(field).removeClass('medium')
//         $(field).removeClass('wrong')
//         $(field).addClass('correct')
//         console.log('long')
//         flag = true;
//     }
//     return flag;
// }

// Constants for the fields 
const username = '#username';
const email = '#email';
const year_group = '#class';
const contact = '#number';
const accountType = '#account-type';
const password = '#password';
const repeatPassword = '#repeat-password';
var passReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;

// Event listener 
$(email).on('input', function(e){
    validateField(e, email, /^[a-z]+.+[a-z]@ashesi.edu.gh$/, 100, '#email-message' ) 
});

$(username).on('input', function(e){
    validateField(e, username, /^(?=.{8,20}$)[a-zA-Z0-9._]+(?<![_.])$/, 50, '#username-message' ) 
});

$(contact).on('input', function(e){
    validateField(e, contact, /^[\+]\d{12}$/, 50, "#number-message");
});

$(year_group).on('input', function(e){
    validateField(e, year_group, /^(20+\d{2}){0,4}$/, 100 , "#class-message") 
});

$(accountType).on('input', function(e){
    if ($(accountType).val() === "" ){
        $(accountType).removeClass('correct')
        $(accountType).addClass('wrong')
        console.log('false')
        $("#account-message").html('Not acceptable');
        return false;
    }
    else{
        $(accountType).removeClass('wrong')
        $(accountType).addClass('correct');
        console.log('true');
        $("#account-message").html('');
        return true;
    }
});

$(password).on('input', function(e){
    validateField(e, password, passReg, 15, "#pass-message"); 
});

$(repeatPassword).on('input', function(e){
    if ($(password).val() !== $(repeatPassword).val()){
        $(password).removeClass('correct')
        $(password).addClass('wrong')
        console.log('false')
        $('#rpass-message').html('Not acceptable');
        return false;
    }

    validateField(e, repeatPassword, passReg , 100,  "#rpass-message" );
});


// Check if it is valid 
checkSubmit = (field) => {
    if($(field).hasClass('correct'))
        return true
    return false
}

// Validate that all fields are valid in sign up
 $("#login-form").submit(function(event){
    if (
        checkSubmit(username) &&
        checkSubmit(email) &&
        checkSubmit(year_group) &&
        checkSubmit(contact) &&
        checkSubmit(accountType) &&
        checkSubmit(password) &&
        checkSubmit(repeatPassword)
    ){
        return true;
    }
    else{
        event.preventDefault();
        console.log(
            checkSubmit(username),
            checkSubmit(email),
            checkSubmit(year_group) ,
            checkSubmit(contact) ,
            checkSubmit(accountType),
            checkSubmit(password),
            checkSubmit(repeatPassword) 
        )

        $("#error-message").html("Ensure all fields are filled correctly\nOne or more fields were not filled to specification. Kindly try again.")
    }
    

});


// Constants for the fields 
const logemail = '#logemail';
const logpass = '#logpassword';


// Event listener 
$(logemail).on('input', function(e){
    validateField(e, logemail, /^[a-z]+.+[a-z]@ashesi.edu.gh$/, 100, '#logemail-message' ) 
});

$(logpass).on('input', function(e){
    validateField(e, logpass, passReg, 50, '#logpass-message' ) 
});

// Validate that all fields are valid in log in
$("#log-form").submit(function(event){
    if (
        checkSubmit(logemail) && checkSubmit(logpass)
        
    ){
        return true;
    }
    else{
        event.preventDefault();
        console.log(
            checkSubmit(logemail),
            checkSubmit(logpass)
        )

        $("#logerror-message").html("Ensure all fields are filled correctly\nOne or more fields were not filled to specification. Kindly try again.")
    }
    

});