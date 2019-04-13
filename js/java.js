function pashider () {
    if (document.getElementById("hider").className == "khususini far fa-eye-slash form-control-feedback") {
        document.getElementById("hider").className = "khususini far fa-eye form-control-feedback";
        document.getElementById("password").type = "text";
    } else {
        document.getElementById("hider").className = "khususini far fa-eye-slash form-control-feedback";
        document.getElementById("password").type = "password";
    }
}