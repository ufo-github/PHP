<?php 
//1. 引入所需的文件
require_once '../swiftmailer_lib/swift_required.php';
require_once 'PdoMySQL.class.php';
require_once 'config.php';

//2.接收信息
$act = $_GET['act'];
$username = addslashes($_POST['username']);
$password = md5($_POST['password']);
// $password = md5($_POST['password'], raw_output);

/**/
$sql = <<< EOF
           CREATE TABLE IF NOT EXISTS pdo_users(
	       id INT(32) UNSIGNED AUTO_INCREMENT KEY,
	       username VARCHAR(255) NOT NULL UNIQUE,
	       password VARCHAR(255) NOT NULL,
	       email VARCHAR(255) NOT NULL UNIQUE,
	       token VARCHAR(255) NOT NULL UNIQUE,
	       token_expire INT(32) NOT NULL DEFAULT(0),
	       status tinyint(1) NOT NULL,
	       register_time VARCHAR(255) NOT NULL
	       );
EOF;

 ?>