<?php
session_start();

require_once('ControllerProspect.php');
use controllers\ControllerProspect;

$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$facebook = $_POST['facebook'];
$whatsapp = $_POST['whatsapp'];


$ctrlProspect = new ControllerProspect();

try{
    $ctrlProspect->salvarProspect($nome, $email, $celular, $facebook, $whatsapp);
    unset($ctrlProspect);
    $_SESSION['erroSalvar'] = "prospect não salvo";
    header("Location: ../../index.php");
}catch(Exception $e){
    $_SESSION['erroNovoProspect'] = $e->getMessage();
    unset($ctrlUsuario);
    header("Location: ../../views/Prospect/v_incluir_prospect.php");
}
?>