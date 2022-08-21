<?php

$name=$_POST['username'];
$_FILES['img']['name']=$name;

echo $_FILES['img']['name'];
$tmp=$_FILES['img']['tmp_name'];
// print_r($_FILES);
move_uploaded_file($tmp,'/images');
