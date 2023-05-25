<?php

include_once "../conexion.php";

    if(!isset($_GET['enviar'])|| empty($_GET['dni_profe'])|| empty($_GET['nom_profe'])|| empty($_GET['cognom1_profe'])|| empty($_GET['cognom2_prof'] || empty($_GET['email_prof'])|| empty($_GET['telf_prof'])|| empty($_GET['sal_prof'])|| empty($_GET['dept_prof']))){
        var_dump($_GET);
        die;
        header('Location:../pagina2.php');
} else{
    $dniProf=$_GET['dni_profe'];
    $nom=$_GET['nom_profe'];
    $cognom1=$_GET['cognom1_profe'];
    $cognom2=$_GET['cognom2_prof'];
    $email=$_GET['email_prof'];
    $telfProf=$_GET['telf_prof'];
    $salario=$_GET['sal_prof'];
    $dept=$_GET['dept_prof'];
    // var_dump($_GET);
    //     die;
    $query=$connection->prepare('UPDATE professor SET
    nom_profe=?,
    cognom1_profe=?,
    cognom2_profe=?,
    email_prof=?,
    telf_prof=?,
    sal_prof=?,
    dept_prof=?
    WHERE dni_profe=?');
    $query->bind_param('sssssiii',$dniProf,$nom,$cognom1,$cognom2,$email,$telfProf,$salario,$dept);
    $query->execute();
    header('Location:../pagina2.php');
};