function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x !== "") {
        $("#first").removeClass("log");
      return true;
    }
    else{
        $("#first").addClass("log");
        return false;
    }
  }

 