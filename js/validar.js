function validar(){
    var nombres, apellidos, correo, usuario,password, tipo, pais,nacimiento;
    nombres=document.getElementById("nombres").value;
    apellidos=document.getElementById("apellidos").value;
    correo=document.getElementById("correo").value;
    usuario=document.getElementById("usuario").value;
    tipo="Usuario";
    pais=document.getElementById("pais").value;
    nacimiento=document.getElementById("nacimiento").value;
    
    alert(nombres);
    console.log(apellidos);
    console.log(correo);
    console.log(usuario);
    console.log(tipo);
    console.log(pais);
    console.log(nacimiento);
}