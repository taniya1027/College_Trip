$(document).ready(function () {
  $("#form").on('submit', function (e) {
    console.log("working");
    valid = validate();
    if (!valid) {
      
      if(!$("#name").val())
      { 
        $("#name").css('border','2px solid red');
        $("#name").on('keyup', function(){
          $("#name").css('border','2px solid black');
        })
      }
      
      if(!$("#phone").val())
      {
        $("#phone").css('border','2px solid red');
        $("#phone").on('keyup', function(){
          $("#phone").css('border','2px solid black');
        })
      }

      if(!$("#email").val())
      {
        $("#email").css('border','2px solid red');
        $("#email").on('keyup', function(){
          $("#email").css('border','2px solid black');
        })
      }

      if(!$("#gender").val())
      {
        $("#gender").css('border','2px solid red');
        $("#gender").on('keyup', function(){
          $("#gender").css('border','2px solid black');
        })
      }
      e.preventDefault();
    }
  

  })

  function validate() {
    if (!$("#name").val()) {
      return false;
    }
    else if (!$("#phone").val()) {
      return false;
    }
    else if (!$("#email").val()) {
      return false;
    }
    else if (!$("#gender").val()) {
      return false;
    }
    else { return true }
  }


})
