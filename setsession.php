<?php
session_start();
$id=$_GET['id'];
$_SESSION['pid']=$id;
