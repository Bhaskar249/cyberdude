<?php
session_start();
?>
<?php  if(session_is_registered('$Y')){
print("  <html><head>
<meta http-equiv='refresh'  content='18'>
<title>Posts from people</title>
<style type='text/css'> .porn1 {button border:soloi 1px #FFFFFF;
background-color:#FFFFFF;}</style>
</head><body style='background-color:#FFFFFF  '>");
$db = mysql_connect('localhost','root','bj'); 
if(!$db) die('Error connecting to MySQL database.'); 
mysql_select_db('status' ,$db);
$partnum=mysql_real_escape_string($POST['id']);

 for($l=1;;$l++){  
   $q=" SELECT * FROM  posts  where id=$l" ;
$result=mysql_query($q);
if(!$result){ echo " error " ;mysql_error();exit;}           
     $row=mysql_fetch_assoc($result);

mysql_free_result($result);
if($row['username']=="")
break;
}
print("
<script>
function fuck(){document.getElementById('popup').style.display='block' ;}
function baal(){document.getElementById('popup').style.display='none' ; }
</script>
<font style='color:green'>Posts from everyone </font>
&nbsp;&nbsp;<a href='expandpost.php' onmouseover=this.style.cursor='pointer' font style='color:red' target='_main'>Expand</a>");
if($_POST['fresh']!=0)
$l=$_POST['fresh'];
$db = mysql_connect('localhost','root','bj'); 
if(!$db) die('Error connecting to MySQL database.'); 
mysql_select_db('status' ,$db);
$q=" SELECT * FROM  posts where id=$l-1" ;
$result=mysql_query($q);
if(!$result){ echo " error " ;mysql_error();exit;}                $row=mysql_fetch_assoc($result);

mysql_free_result($result);

if($row['post']!='deleted' ){ $name=$row['username'] ;
 
print("<form method='post' action='search.php' ><input type='hidden' value='".$row['username']."'  name='search'></form>");
$db = mysql_connect('localhost','root','bj'); if(!$db) die('Error connecting to MySQL database.');
 mysql_select_db('login' ,$db);    
$x="select * from users where username= '".$name."'  ;" ;
$paa=mysql_query($x);
$col=mysql_fetch_assoc($paa);
mysql_free_result($paa);
if($col['online']==1){
print("<fieldset style='width:95%;background-color:rgb(248,248,248);border-radius:10px '><table style='width:100%;' border=0><tr style='width:100%'><td style='width:30%;'>
<div style='width:70%'><font size=2 style='color:red'><a   onclick='document.forms[0].submit()'  onmouseover=this.style.cursor='pointer'>
<img src='available.png' width='20px' height='30px' onmouseover=this.style.width='50px' onmouseout=this.style.width='20px'><img src='".$row['username']."/".$row['photo']."'width='50px' height='50px'><br>" .$row['username']. "</a></font><HR><font style='color:rgb(33,33,33) '  onmouseover=this.size='5' onmouseout=this.size='2'>
<a onclick='fuck()' onmouseover=this.style.cursor='crosshair' >".$row['post']."</a>
</font><font size=1 style='color:#787878'><br>date- ".$row['date']."</div><div style='width:40%;'>comment ".$row['comment']."
</td><td style='width:35%'><font size=1 style='color:#787878'>

<b style='position:absolute;top:100px;left:300px'>Patkai People:<br></td></tr></table>
</div></fieldset>");}
else
 print("<fieldset style='width:95%;background-color:rgb(248,248,248);border-radius:10px '><table style='width:100%;' border=0><tr style='width:100%'><td style='width:30%;'>
<div style='width:60%'><font size=2 style='color:red'><a   onclick='document.forms[0].submit()'  onmouseover=this.style.cursor='pointer'>
<img src='".$row['username']."/".$row['photo']."'width='50px' height='50px'><br>" .$row['username']. "</a></font><HR><font style='color:rgb(33,33,33) ' onmouseover=this.size='5' onmouseout=this.size='2'>
<a onclick='fuck()' onmouseover=this.style.cursor='crosshair' >".$row['post']."</a>
</font><font size=1 style='color:#787878'><br>date- ".$row['date']."</div><div style='width:40%;'>comment ".$row['comment']."
</td><td style='width:70%'><font size=1 style='color:#787878'>

<b style='position:absolute;top:100px;left:300px'>Patkai People:<br>

<br>
</div></td></tr></table></fieldset>");

print("<div id='popup' style='position:absolute;display: none;background-color:rgb(33,33,33); width: 300px; top:100px; left: 100px;padding: 40px' font size='5'>Not in action now<br><br><form >
<input type='text' maxlength='500'  size='40' height='40px' onfocus='this.stop()'>
<a onclick='baal()' onmouseover=this.style.cursor='pointer' font style='color:red'><br>
<br>Cancel</a></form></div>");

}
  for($k=$l-2;$k>=$l-4;$k--){   
$db = mysql_connect('localhost','root','bj'); 
if(!$db) die('Error connecting to MySQL database.'); 
mysql_select_db('status' ,$db);
$q=" SELECT * FROM  posts where id=$k" ;
$result=mysql_query($q);
if(!$result){ echo " error " ;mysql_error();exit;}                $row=mysql_fetch_assoc($result);

mysql_free_result($result);

if($row['post']!=" Deleted "){

print("<form method='post'  action='search.php'>  </form><script>

</script>");
if($row['username']!='deleted'){
 print("<form method='post'  name='".$row['username']."'   action='search.php' ><input type='hidden' value='".$row['username']."'  name='search'></form>");
print("<fieldset style=';width:90%;height:15%;background-color:#F8F8F8;border-radius:10px'><font size=2 style='color:red'><a   onclick='document.forms[$l-$k+2].submit()'  onmouseover=this.style.cursor='pointer'>
<img src='".$row['username']."/".$row['photo']."' width='50px' height='50px'><br>" .$row['username'].   "</a></font><br><font style='color:#FFFFFF '>Click older to see this post </font><font size=1 style='color:#787878'><br>date- ".$row['date']."</fieldset>"); }
else "post deleted";

}}
$z=md5($l-1);
print("<script> a$z() ; </script>");
 
   $ma=$k+4;

print("<div style='position:absolute;left:190px;top: 7px'><form method='post' action='post.php'><input type='hidden' name='fresh' value=''><input type='submit'   button class='porn1' value='newer' ></form></div><div style='position:absolute;left:250px;top: 7px'><form method='post' action='post.php'><input type='hidden' name='fresh' value='$ma'>&nbsp;<input type='submit' button class='porn1' value='older' ></form></div>");
}
?>



