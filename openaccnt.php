<?php
$db=mysql_connect('localhost','root','bj');
mysql_select_db('login',$db);
for($z=1;;$z++){
$j="SELECT * from users where id=$z ; " ;
$result=mysql_query($j) ;
$col=mysql_fetch_assoc($result) ;
mysql_free_result($result) ;
if(($col['email']==$_POST['email'])||($col['email']=='')){
break;
exit;
}

}
$dir=$_POST['name'];
mkdir("$dir",0777);
copy("scrapbook/image.jpg","$dir/image.jpg");
if ((($_FILES["photo"]["type"] == "image/gif")
|| ($_FILES["photo"]["type"] == "image/jpeg")
||($_FILES["photo"]["type"] == "image/jpg")
|| ($_FILES["photo"]["type"] == "image/pjpeg"))
)
  {
  if ($_FILES["photo"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["photo"]["error"] . "<br />";
    }
  else
    {
   

    if (file_exists("$dir/" . $_FILES["photo"]["name"]))
      {
      echo $_FILES["photo"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["photo"]["tmp_name"],
    "$dir/" . $_FILES["photo"]["name"]);}


      
    }
  }
else
  {
  echo "Invalid photo type";
  }
$filename = md5($_POST['email']);
$rname=$_POST['name'];
$email=$_POST['email'];
$comma='"';


$y=md5($_POST['pass']);



copy("Admin/index.php","$dir/index.php");

$db=mysql_connect('localhost','root','bj');
mysql_select_db('friends',$db);
$s="create table $rname(id int(240) unsigned auto_increment primary key not null,friend varchar(100) not null,photo varchar(100) not null,online varchar(30) not null);" ;
mysql_query($s);
$p="INSERT into $rname(friend,photo,online) values('deleted','image.jpg',0)";
mysql_query($p);

if($_FILES["photo"]["name"]==''){$_FILES["photo"]["name"]='image.jpg' ;} 
$db=mysql_connect('localhost','root','bj');
mysql_select_db('profile',$db);
$q="insert into people(name,photo,place,rstatus,proposal,images,videos,post,about,email,visitor1) values('".$_POST['name']."','".$_FILES['photo']['name']."','','','',0,0,0,'','".$_POST['email']."','None') ;";
$result=mysql_query($q);

if($result){
 
 $to = "bhaskarpathak@tezu.ernet.in";
 $subject = "Hi!";
 $body = "Hi,\n\nThanks for joining this site?";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 


print("<form action='database.php' method='post'><input type='hidden' name='email'  value='".$_POST['email']."' >

<input type='hidden' name='pass'  value='".$_POST['pass']."' ><input type='hidden' name='name'  value='".$rname."' >
<input type='hidden'  name='photo'  value='".$_FILES['photo']['name']."' >");
}else echo"error"; 


?>
</form>
<script language='javascript'> document.forms[0].submit() ;</script>

