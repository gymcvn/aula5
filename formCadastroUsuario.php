<?php
//Inicia uma nova sessão ou continua a sessão atual
session_start();
//Verifica se a pagina foi acessada com metodo POST
if($_SERVER["REQUEST_METHOD"]== 'POST'){
    //Capturar os dados formularios usuario o metodo POST
    $username= $_POST['username']?? 'Anonimo';
    $email= $_POST['email']?? 'Sem email';
    $password= $_POST['password']?? '';
    echo "Usuario cadastrado com sucesso!<br>";
    echo "Nome de Usuario". htmlspecialchars($username). "<br>";
    echo "Email". htmlspecialchars($email). "<br>";
}else{
    //Redirenciona o usuário de volta ao formulario se não for método POST
header("location: register html");
exit;
}
?>