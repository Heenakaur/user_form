$(document).ready(function(){

  //Validations

  $("form#user").validate({
    rules: {
      firstname: "required",
      emailid: {
        required: true,
        email: true
      }
    },
    messages: {
      name: "Please specify your name",
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com"
      }
    }
  });



  $("form#user input[type=button]").click(function(){

    if( $("form#user").valid() == true ) {
      //get value of the textfield with id firstname.
      //get value of the textfield with id lastname.
      firstname = $('input#firstname').val();
      lastname = $('input#lastname').val();

      //get value of the textfield with id email.
      emailid = $('input#email').val();

      //get value of the textfield with id description.
      descriptionofuser = $('input#description').val();

      //get the value of the radio button with class gender.
      gender = $("input[name=gender]:checked").val();

      //get the value of the checkboxes with different id's.
      teacher = $('input#teacher').val();

      //get the value of the checkboxes with different id's.
      engineer = $('input#engineer').val();

      //get the value of the checkboxes with different id's.
      housewife = $('input#housewife').val();

      //get the value of the checkboxes with different id's.
      ca = $('input#ca').val();


      html = '<label>Firstname</label>: ';
      html += firstname + '<br>';
      html += '<label>Lastname</label>: ';
      html += lastname + '<br>';
      html += '<label>Email ID</label>: ';
      html += emailid + '<br>';
      html += '<label>Description of user</label>: ';
      html += descriptionofuser + '<br>';
      html += '<label>Gender</label>: ';
      html += gender + '<br>';
      // html = '<label>Checkbox</label>: ';
      // html += checkbox;

      $('div#selectedData').html(html);
    }
  })
})