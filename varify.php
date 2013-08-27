<?php
session_start();
?>
<?php
$Y=sha1($_POST['passwd']);
$e=$_POST['email'];

$db = mysql_connect('localhost','root','bj'); if(!$db) die('Error connecting to MySQL database.'); mysql_select_db('login' ,$db);
$partnum=mysql_real_escape_string($POST['id']);
      
  for($l=1;;$l++){  
   $q=" SELECT * FROM  users where id=$l " ;
$result=mysql_query($q);
if(!$result){ 
echo " error " ;mysql_error();exit;}               

 $row=mysql_fetch_assoc($result);

mysql_free_result($result);
if($row['username']=='')
break;}

for($k=$l-1;$k>=0;$k--){

 $q=" SELECT * FROM  users where id=$k " ;
$result=mysql_query($q);
if(!$result){ 
echo " error " ;mysql_error();exit;}               

 $row=mysql_fetch_assoc($result);

mysql_free_result($result);

if($row['username']!=deleted){
if(($row['email']==$_POST['email']) && ($row['passwd']==$Y)){
session_register('$Y') ;
$_SESSION['password']=$Y;
$_SESSION['username']=$row['username'];
$_SESSION['email']=$_POST['email'];

if($row['photo']!='')
{$_SESSION['photo']=$row['photo'];}



$db = mysql_connect('localhost','root','bj'); if(!$db) die('Error connecting to MySQL database.');
 mysql_select_db('login' ,$db);      
$x="update users set online=1 where email='".$_SESSION['email']."' ;" ;
mysql_query($x);

header("location:Home.php");

}

}

}
echo "";

print("<script>window.location='error.html' ; </script>");

  
?>
