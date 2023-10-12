<?php
require_once 'impot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $revenu = floatval($_POST['revenu']);

    $impot = new Impot($nom, $revenu);
    $message = $impot->AfficheImpot();

    echo $message;
}
?>