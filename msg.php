<?php
session_start(); ?> <?php  if(session_is_registered('$Y')){print("  <html><head>
<meta http-equiv='refresh'  content='18'>
<title></title><style type='text/css'> .porn1 {button border:solid 1px #FFFFFF;
background-color:#FFFFFF;}</style></head><body style='background-color:#FFFFFF'>");
 print(" <script>
 function love(){
document.getElementById('PopUp').style.display = 'block' ;}
function amrita(){
document.getElementById('topup').style.display = 'block';
}
function nolove(){
document.getElementById('PopUp').style.display = 'none';}
function vandu(){
document.getElementById('topup').style.display = 'none';
}</script> ");

 $db = mysql_connect('localhost','root','bj'); if(!$db) die('Error connecting to MySQL database.'); mysql_select_db('scrapbook' ,$db);
$partnum=mysql_real_escape_string($POST['id']);
 for($l=1;;$l++){     $q=" SELECT * FROM ".$_SESSION['username']."  where id=$l" ;
$result=mysql_query($q);
if(!$result){ echo " error " ;mysql_error();exit;}           
     $row=mysql_fetch_assoc($result);

mysql_free_result($result);
if($row['username']=="")
break;
}print("<font style='color:green'><center>INBOX</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font style='color:red'><a href='expandmsg.php' target='_main'>Expand</a></font></center>");
$a=$l;
if($_POST['fresh']!=''){$a=$_POST['fresh'] ;}
 
 
  for($k=$a-1;$k>=$a-15;$k--){   
$q=" SELECT * FROM  ".$_SESSION['username']." where id=$k" ;
$result=mysql_query($q);
if(!$result){ echo " error " ;mysql_error();exit;}                $row=mysql_fetch_assoc($result);
mysql_free_result($result);
if($row['username']!=" Deleted "){
$w=md5($row['id']);
$chat=sha1($row['id']);
print(" <script> 
function 
 a$w(){document.getElementById('".$w."up').style.display = 'block' ;}
function b$w(){document.getElementById('".$w."up').style.display = 'none' ;}

</script> ");

print("<table style='width:100%;float:right'' border=1><tr style='width:100%;'><td style='background-color:#9999CC;width:5%;'>"  .$row['id'].  "</td>
<td style='background-color:#9999CC;width:21%'> "  .$row['date'].  "<td style='background-color:#9999CC;width:16%'>
<a    onmouseover= this.style.cursor='pointer'  onclick='$chat()'  font style='color:red' >"  .$row['username'].    "</a>
<td style='background-color:#9999CC;width:8%'><a    onmouseover= this.style.cursor='pointer'  onclick='a$w()' font style='color:red' >expand</a>
<div id='".$w."up' style='display: none; position: absolute;top:50px; left: 20px; border: solid black 1px; padding: 90px; background-color:rgb(33,33,33); text-align: justify; font-size: 18px; width: 600px;'>
<font style='color:red'>Date-"  .$row['date'].  "<br>From-"  .$row['username'].    " </font><hr><font style='color:#FFFFFF '>" .$row['msg']."  </font>
<hr>"  .$row['reply']. "<input type='button'  onclick='b$w()' value='close'  onmouseover='condom()' ></div>
</td><td style='background-color:#9999CC;width:27%'>"  .$row['reply']. "</td></tr> </table>");
print("
");
 } } 
if($l!=$_SESSION['lastid']){
$z=md5($l-1);
print("<script> a$z() ; </script>");
}
$_SESSION['lastid']=$l;
print("<div style='position:absolute;left:60px;top:7px'><form method='post' action='msg.php'>
<input type='hidden' name='fresh' value=''><input type='submit' button class='porn1'   value='newer' ></form></div>
<div style='position:absolute;left:120px;top:7px'><form method='post' action='msg.php'>
<input type='hidden' name='fresh' value='$k'>&nbsp;<input type='submit'  button class='porn1' value='older' ></form></div>");
}

?>
