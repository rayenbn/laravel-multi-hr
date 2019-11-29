<?php
/**
 * Created by PhpStorm.
 * User: WALAA
 * Date: 03/11/2019
 * Time: 01:57
 */
$host='localhost';
$user='h5506_h550678';
$password='1K2ob4m#';
$db='h550678_dbgeneral';
$con=mysqli_connect($host,$user,$password,$db);
if (!$con)
{
    die('please check your connection '.mysqli_error());
}