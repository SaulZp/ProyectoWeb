function validar() {
    var matricula, nombre, apellidos, email, contra, contra2, expresion;
    
    contra = document.getElementById("pass").value;
    contra2 = document.getElementById("pass2").value;
    
    if(contra != contra2 ) {
        alert("Sus contraseñas no coinciden");
        return false;
    }
}