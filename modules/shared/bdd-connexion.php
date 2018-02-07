<?php

// Base de données locale
$bdd = new PDO('mysql:host=localhost;dbname=chef-connect;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Base de données de production
//$bdd = new PDO('mysql:host=db715347631.db.1and1.com;dbname=db715347631;charset=utf8', 'dbo715347631', 'Fypio123%');

// Base de données de production go-daddy
//$bdd = new PDO('mysql:host=localhost;dbname=chef-connect;charset=utf8', 'tomjefferson', 'JhP%L~UeDM-S');


    