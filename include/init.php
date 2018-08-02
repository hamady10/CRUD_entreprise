<?php
//------- CONNEXION BDD
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT => 'SET NAMES utf8'));

//------ SESSION
session_start();

//------ VARIABLES
$content = '';
$error = '';




