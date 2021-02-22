<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "demo";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


// SQL Querry:

/*CREATE TABLE users (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	isAdmin BOOLEAN DEFAULT 0,
	username varchar(128) NOT NULL,
	password varchar(128) NOT NULL
);

CREATE TABLE items (
    itemsId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	category VARCHAR(128) NOT NULL,
	model varchar(128) NOT NULL,
	make varchar(128) NOT NULL,
	available BOOLEAN DEFAULT 0
);*/