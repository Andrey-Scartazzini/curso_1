<?php
SESSION_START();
function usuarioestalogado(){
    return isset($_SESSION["usuario_logado"]);
};
function verificaUsuario(){
    if(!usuarioestalogado()){
        header("Location: index.php?falhadeseguranca=true");
        die();
    };
};
function usuariologado(){
    return $_SESSION["usuario_logado"];
};
function logausuario($email){
    $_SESSION["usuario_logado"] = $email;
};

function logout(){
    session_destroy();
};
