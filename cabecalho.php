<?php
session_start();
ob_start();

const USUARIO = 'adminGUxs1Tl';
const SENHA = 'hvyVcslYeB6_';
const BANCO = 'atividade05';
const PORTA = '3306'; 
const HOST = '127.10.107.2';

$con = new PDO("mysql:host=".HOST.";port=".PORTA.";dbname=".BANCO, USUARIO, SENHA,  array(PDO::ATTR_PERSISTENT => true));
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<style>
			table img {width: 40px;height: 40px;}
			
			.infoBox {border:2px solid black;}
			.infoBox p {padding-top: 10px;}
			
			figure {width: 250px;float: left;}
		</style>
		
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>