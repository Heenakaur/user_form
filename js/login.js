$(document).ready(function() {

    //Validations

    $("form#admni").validate(
        {
            rules: {
                username: {
                    required: true,
                    AlphaOnly: true
                },
                emailId: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                password: {
                    required: true,
                    maxlength: 100
                },

                messages: {
                    username: {
                        required: "Please enter your name.",
                        number: "Your name should not contain any number."
                    },
                    emailId: {
                        required: "Please enter your email ID.",
                        email: "Your email ID should be in format yourname@domain.com"
                    },
                    password: {
                        required: "Please enter your password.",
                        maxlenght: "Your password must contain only letters, numbers, underscore and contains only 8 characters"
                    },
                }
            }
        }

    )
});
//adding custom method to jquery validate.
jQuery.validator.addMethod("AlphaOnly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Please enter alphabets only.");



//On button click binding.

$("form#admin input[type=submit]").click(function() {

    $("form#admin").valid()
});
