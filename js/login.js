function show_eyes()
{
   
    document.getElementById("password-show").setAttribute("style","display:block");
}
function show_password(){
    var change = document.getElementById("passwordBox");
    if (change.type === "password") {
      change.type = "text";
      document.getElementById("password-show").setAttribute("style","display:none");
      document.getElementById("password-hide").setAttribute("style","display:block");
    } else {
      change.type = "password";
      document.getElementById("password-show").setAttribute("style","display:block");
      document.getElementById("password-hide").setAttribute("style","display:none");
    }

    
}



