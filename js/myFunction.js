$(document).ready(function(){

  //Validations

  $("form#user").validate(

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
          email_id: {
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
          email_id: {
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


  //adding custom method to jquery validate.
  jQuery.validator.addMethod("AlphaOnly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Please enter alphabets only.");



  //On button click binding.

  $("form#user input[type=button]").click(function(){

    if( $("form#user").valid() == true ) {
      //get value of the textfield with id firstname.
      //get value of the textfield with id lastname.
      firstname = $('input#firstname').val();
      lastname = $('input#lastname').val();
      //get value of the textfield with id email.
      email_id = $('input#email').val();

      //get value of the textfield with id description.
      description = $('input#description').val();

      //get the value of the radio button with class gender.
      gender = $("input[name=gender]:checked").val();

      //get the value of the checkboxes with different id's.
      skills = $('input[name=skills]:checked').val();


      html = '<label>Firstname</label>: ';
      html += firstname + '<br>';
      html += '<label>Lastname</label>: ';
      html += lastname + '<br>';
      html += '<label>Email ID</label>: ';
      html += email_id + '<br>';
      html += '<label>Description of user</label>: ';
      html += description + '<br>';
      html += '<label>Gender</label>: ';
      html += gender + '<br>';
      html += '<label>Skills</label>: ';
      html += skills;
      html += '<br><button type = "submit">Submit</button>';

      $('div#selectedData').html(html);
    };
  });
});



















