<?php
/**
 * Created by PhpStorm.
 * User: thev
 * Date: 2018/10/14
 * Time: 9:30
 */
$N=$_POST['username'];
$M=$_POST['pwd'];
$S=$_POST['sex'];
$H=$_POST['hobby'];
$X=$_POST['school'];
echo "您的账户：".$N,"您的密码：".$M.$S.$X;
var_dump($H);
// get  post put delete head