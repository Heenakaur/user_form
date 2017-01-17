$(document).ready(function() {

    //Validations

    $("form#editUser").validate(
        {
            rules: {
                firstname: {
                    required: true,
                    AlphaOnly: true
                },
                lastname: {
                    required: true,
                    number: false
                },
                emailId: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                description: {
                    required: true,
                    maxlength: 100
                },
                gender: "required",
                skills: "required",
            },
            messages: {
                firstname: {
                    required: "Please enter your firstname.",
                    number: "Your name should not contain any number."
                },
                lastname: {
                    required: "Please enter your lastname.",
                    number: "Your name should not contain any number."
                },
                emailId: {
                    required: "Please enter your email ID.",
                    email: "Your email ID should be in format yourname@domain.com"
                },
                description: {
                    required: "Please enter your description.",
                    maxlenght: "Your description should not extend more then 100 characters."
                },
                gender: {
                    required: "Please select your gender."
                },
                skills: {
                    required: "Please select skills."
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

$("form#editUser input[type=submit]").click(function() {

    if ($("form#user").valid() == true) {
        //get value of the textfield with id firstname.
        //get value of the textfield with id lastname.
        firstname = $('input#firstname').val();
        lastname = $('input#lastname').val();
        //get value of the textfield with id email.
        emailid = $('input#email').val();

        //get value of the textfield with id description.
        description = $('input#description').val();

        //get the value of the radio button with class gender.
        gender = $("input[name=gender]:checked").val();

        //get the value of the checkboxes with different id's.
        skills = $('input[name=skills]:checked').val();
    }
});
