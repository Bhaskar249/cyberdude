<?php
session_start();
?>
<?php
if(session_is_registered('$Y')){

print("<html><head><meta http-equiv='refresh' content='5'></head><body style='background-color:#FFFFFF'> <br> ");
$me=$_SESSION['username'];


$db=mysql_connect('localhost','root','bj');
mysql_select_db('friends',$db);

for($l=1;;$l++){
$r="SELECT * from $me where id=$l;" ;
$q=mysql_query($r);
$row=mysql_fetch_assoc($q);
mysql_free_result($q);
if($row['friend']=='')break;}

for($k=$l-1;$k>=1;$k--){$db=mysql_connect('localhost','root','bj');
mysql_select_db('friends',$db);
	$r="SELECT * from $me where id=$k ;" ;
$q=mysql_query($r);
$row=mysql_fetch_assoc($q);
mysql_free_result($q);
	

$chat=md5($row['id']);
$talk=md5($row['id']);
$fno=$l-$row['id']-1;

print("<script>
function 
 $chat(){ 
document.getElementById('".$chat."up').style.display = 'block' ; 
}
function c$chat(){document.getElementById('".$chat."up').style.display = 'none' ;}
 
</script>");$name=$row['friend'] ;
 $db = mysql_connect('localhost','root','bj'); if(!$db) die('Error connecting to MySQL database.');
 mysql_select_db('login' ,$db);    
$x="select * from users where username= '".$name."'  ;" ;
$paa=mysql_query($x);
$col=mysql_fetch_assoc($paa);
mysql_free_result($paa);
if(($col['online']==1)&&($row['friend']!='deleted')){
  
print("<form method='post' action='kiss.php'><input type='hidden' value='".$row['friend']."' name='talk'></form>
<fieldset style='width:85%;background-color:rgb(33,33,33)' onclick='document.forms[$fno].submit()'>
<a onclick='document.forms[$fno].submit()' onmouseover=this.style.cursor='pointer'><img src='available.png' width='20px' height='20px'>
<img src='".$row['friend']."/".$row['photo']."' width='30px' height='30px' > <font style='color:white' size=3>".$row['friend']."</a></font></fieldset>");}
else if($row['friend']!='deleted')
{print("<form method='post' action='kiss.php'><input type='hidden' value='".$row['friend']."' name='talk'></form>
<fieldset style='width:85%;background-color:rgb(33,33,33)' onclick='document.forms[$fno].submit()'>
<a onclick='document.forms[$fno].submit()' onmouseover=this.style.cursor='pointer'>
<img src='".$row['friend']."/".$row['photo']."' width='30px' height='30px' > <font style='color:white' size=3>".$row['friend']."</a></font></fieldset>");}



 

}}
?>


