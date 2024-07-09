<?php
$id_categoria = $_GET['id_categoria'];
$categoria = $_GET['categoria'];

include("../method/modelo.php");
Modelo::sqlAgregarCate($id_categoria,$categoria);