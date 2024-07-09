<?php
include_once("../method/modelo.php");


$categoriaN = $_GET['categoria'];

Modelo::sqlActuCate($id,$categoriaN);