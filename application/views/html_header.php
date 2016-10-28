<?php echo doctype('html5'); ?>

<html lang="pt">

<head>

<meta charset="UTF-8">

<title>Minha primeira view</title>

<?php

$meta = array(

array('name' => 'robots', 'content' => 'no-cache'),

array('name' => 'description', 'content' => 'Meu primeiro site CodeIgniter'),

array('name' => 'keywords', 'content' => 'codeigniter, site, primeiro'),

array('name' => 'robots', 'content' => 'no-cache'),

array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')

);

echo meta($meta);

echo link_tag('assets/img/icon.ico', 'shortcut icon', 'image/ico');

echo link_tag('assets/css/layout.css');

?>

</head>

<body>