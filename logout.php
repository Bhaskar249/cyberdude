<?php
session_start();

$db = mysql_connect('localhost','root','bj'); if(!$db) die('Error connecting to MySQL database.');
 mysql_select_db('login' ,$db);      
$x="update users set online=0 where email='".$_SESSION['email']."' ;" ;
mysql_query($x);
session_unregister('$Y');
unset($_SESSION['password']);unset($_SESSION['username']);

unset($_SESSION['lastod']);unset($_SESSION['email']);
unset($_SESSION['fresh']);
unset($_SESSION['photo']);
unset($_SESSION['search']);
unset($_SESSION['ol']);
for($k=1;$k<=$_SESSION['max'];$k++){
unset($_SESSION['friends'][$k]);}
unset($_SESSION['max']);
session_unset();

session_destroy() ;
header("location:index.html");

?>
