<?php require_once('/var/www/public_html/config.php');
 
 require "Produto.php";  // this will include the file

 include_once "Produto.php";  // this will not as it was included using "require"
 
 require_once "Produto.php";  // this will not as it was included using "require"
 