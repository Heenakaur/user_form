$(document).ready(function(){
  $("form#user input[type=button]").click(function(){
    //get the data of the textfield with id firstname.
    firstname = $('input#firstname').val();

    //get value of the text field with id lastname.

    //get value of the checkboxes.

    //get value of radio button

    //etc...

    html = '<label>Firstname</label>: ';
    html += firstname;


    $('div#selectedData').html(html);
  })
})