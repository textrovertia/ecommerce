// Validate field 
validateField = (e, field, regex, len, message) => {
    flag = false
        if (regex.test(e.target.value) && e.target.value.length <= len){
            $(message).removeClass('wrong')
            $(message).addClass('correct');
            console.log('true')
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
const username = '#username'
const email = '#email'
const year_group = '#class'
const contact = '#number'
const accountType = '#account-type'
const password = '#password'
const repeatPassword = '#repeat-password'

// Event listener 
$(username).on('input', function(e){
    validateField(e, username, /\S/, 100, '#email-message' ) 
});

$(email).on('input', function(e){
    validateField(e, email, /.+@.+\..+/, 50, '#username-message' ) 
});

// $(contact).on('input', function(e){
//     validateField(e, contact, /^[\+]\d{12}$/, 50 )
// });

// $(city).on('input', function(e){
//     validateField(e, city, /\S/, 100 ) 
// });

// $(country).on('input', function(e){
//     validateField(e, country, /\S/, 100 ) 
// });

// $(password).on('input', function(e){
//     validatePassword(e, password, 150 ) 
// });

// // Check if it is valid 
// checkSubmit = (field) => {
//     if($(field).hasClass('correct'))
//         return true
//     return false
// }

// // Validate that all fields are valid
//  $("#registration-form").submit(function(event){
//     if (
//         checkSubmit(fullname) &&
//         checkSubmit(email) &&
//         checkSubmit(city) &&
//         checkSubmit(contact) &&
//         checkSubmit(country) &&
//         checkSubmit(password)
//     ){
//         return true;
//     }
//     else{
//         event.preventDefault();
//         console.log(
//             checkSubmit(fullname),
//             checkSubmit(email),
//             checkSubmit(city) ,
//             checkSubmit(contact) ,
//             checkSubmit(country) 
//         )
//         swal({
//             title: "Ensure all fields are filled correctly",
//             text: `One or more fields were not filled to specification. Kindly try again.`,
//             icon: "error",
//         });
//     }
    

// });





// console.log()
// // Finish validation for password, city and country