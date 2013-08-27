<?php session_start(); ?> <?php  if(session_is_registered('$Y')){
	print("  <html><head><title>Patkai Network-".$_SESSION['username']."</title></head>
<body id='body' style='background-color:#FFFFCC' onmouseover=this.style.cursor=>
<script>
function maa(){
document.getElementById('maa').style.display='block';
document.getElementById('body').style.backgroundColor='black' ;
}
function paa(){
document.getElementById('maa').style.display='none';document.getElementById('body').style.backgroundColor='#FFFFCC' ;
}</script>

<div id='maa' style='display:none;position:absolute;top:10px;left:90px;height:40px;padding:10px;background-color:red' onmouseover=this.style.cursor='pointer' onclick='paa()'>
<fieldset style='position:absolute;top:30px;left:30px' onmouseover=this.style.backgroundColor='orange' onmouseout=this.style.backgroundColor='#300000'>
<a  href='logout.php'  onmouseover= this.style.cursor='pointer' font size=3 style='color:red'> signout</a></fieldset>
<fieldset style='position:absolute;top:30px;left:100px' onmouseover=this.style.backgroundColor='yellow' onmouseout=this.style.backgroundColor='#300000'>
<a href='home.php' font style='color:blue'>Home</a></fieldset>

<fieldset style='position:absolute;top:30px;height:20px;left:160px;width:300px' onmouseover=this.style.backgroundColor='orange' 
onmouseout=this.style.backgroundColor='#300000' >
<a href='".$_SESSION['username']."/index.php' target='_blank' onmouseover= this.style.cursor='pointer' font size=4 style='color:#787878'>Create a profile page</a></fieldset>

</div>


<div id='bj' style='display:none;background-color:;width:200px;height:300px;left:900px;top:900px;position:absolute' onmouseover=this.style.cursor='pointer' onclick=document.getElementById('bj').style.display='none'>
X<iframe src='order.php' scrolling='yes' position='fit'></iframe></div>
<div style='background-color:#9999CC'>
<a  onclick='maa()' font style='color:#300000' size=5  onmouseover= this.style.cursor='pointer' ><u onmouseover=this.style.backgroundColor='orange'
onmouseout=this.style.backgroundColor='#787878' >My ssession</u></a>&nbsp;&nbsp;&nbsp;&nbsp;  your IP is <font style='color:red'  onmouseover=this.size='9' onmouseout=this.size='3'> "  .$_SERVER['REMOTE_ADDR'].  " </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font style='color:red' size=6>Patkai Network</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script>

function papon(){
document.getElementById('sending').style.display = 'block';
document.getElementById('rank').style.display = 'none';
document.getElementById('inbox').style.display = 'none';
document.getElementById('post').style.display = 'none';


}
function inbox(){document.getElementById('inbox').style.display='block'; document.getElementById('post').style.display='none';
document.getElementById('rank').style.display='none';
document.getElementById('sending').style.display = 'none';
}

function post(){document.getElementById('post').style.display='block';document.getElementById('inbox').style.display='none';
document.getElementById('rank').style.display='none';
document.getElementById('sending').style.display = 'none';
}
function rank(){document.getElementById('rank').style.display='block';document.getElementById('inbox').style.display='none';
document.getElementById('post').style.display='none';
document.getElementById('sending').style.display = 'none';
}
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

$sex=md5($_SESSION['email']);

print(" <font style='color:red' size='6'> ". $_SESSION['username']."</font><form style='position:absolute;top:10px;left:840px'  method='post'  action='ownprofile.php'><font style='color:white'>Search People
<input type='textarea' style='border-radius:10px' name='search'  colums='10'> &nbsp;&nbsp;<input type='submit'  value='search' style='background-color:orange;border:circle white'></font></form>
 
<br></div>");
 print(" <script>
function photo(){
document.getElementById('runup').style.display='block';
}
function nophoto(){
document.getElementById('runup').style.display='none';
}

 function upload(){
document.getElementById('pup').style.display = 'block' ;document.getElementById('hello').style.color = 'red' ;}
function closer(){
document.getElementById('pup').style.display = 'none' ;
}function sexy(){document.getElementById('thumbsup').style.display = 'block';
}
function nosex(){document.getElementById('thumbsup').style.display = 'none';
}
function kalam(){document.getElementById('kal').style.display = 'block';document.getElementById('pup').style.display = 'none' ;
document.getElementById('alla').style.color = 'red' ;

}
function chetan(){document.getElementById('kal').style.display = 'none';
}
</script> 


 ");

$com='$_' ;
 print(" <div style='background-color:#9999CC;position:absolute;border-radius:10px;width:30%;top:80px;left:10px' >
 <a onclick='upload()' onmouseover=this.style.cursor='pointer' font style='color:red'><font id='alla' onclick=style.color='green'>Share Photo</font></a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
 
 <a onclick='kalam()' onmouseover=this.style.cursor='pointer' font style='color:red'><font id='hello' onclick=style.color='green'>Share Status</font></a>
 </div>
 
 
 <div id='kal' style='background-color:#9999CC;border-radius:10px;position:absolute;width:30%;top:100px;left:10px' ><fieldset style='border-radius:8px'>
 <form method='post' action='update.php'><font size=4>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br> Write your status: <input type='textarea' rows='3' cols='30' name='post' style='position:absolute;width:230px' onfocus=this.style.height='50px' 
onblur=this.style.height='20px' ><input type='hidden' name='hidden' value='" .$_SESSION['username']. "' > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input type='submit' onclick='document.forms[0].elements[0].focus()' value='send' style='background-color:orange;border-radius:12px'></font></form><br><br></fieldset></div>
<div style='position:absolute;left: 440px;top: 80px;background-color:#787878;width: 130px;height: 140px'><a onmouseover='photo()' onmouseout='nophoto()' onclick='love()'><img src='".$_SESSION['username']."/".$_SESSION['photo']."' width='130px' height='130px'  border style='color:white' ></a ></div>
<div id='runup' style='display: none; position: absolute; left: 440px; top: 180px; border: solid black 1px; padding: 7px; background-color: rgb(33,33,33); text-align: justify; font-size: 18px; width: 160px;'><font style='color:red'>
Change Photo</font></div>

<div id='pup'   style='display:none;background-color:#9999CC;position:absolute;top:100px;left:20px ;padding: 10px; text-align: justify; font-size: 18px;height:180px; width: 370px;'><font style='color:white'><br><form action='photoupload.php'  method='post'  enctype='multipart/form-data'>Select<input type='file' name='file'  id='file' /  ><input type='text' name='post'><input type='submit' onclick='closer()' value='Share'>&nbsp;&nbsp;<a onmouseover=this.style.cursor='pointer' onclick='closer()'  font style='color:red' >cancel</a></form></div>
");


print("<br><iframe src='post.php'     scrolling='no'  frameborder=0
        style='border:none;position:absolute;width:41%;height:95%;top:220px;left:10px'></iframe>
        <div style='background-color:#FFFFCC;position:absolute;width:600px;top:80px;left:598px;height:38px' onload='rank()'>
       <a onmouseover=this.style.cursor='pointer' onclick='inbox()' >
       <div style='background-color:#FFFFCC;border-radius:12px;position:absolute;height:37px;width:120px'   onmouseover=style.backgroundColor='red' 
       onmouseout=style.backgroundColor='#FFFFCC' > &nbsp;&nbsp;<img src='message.jpg' height=50px width=70px>
       
<iframe src='inbox.php' scrolling='no' frameborder=0
       style='width:40px;height:40px;position:absolute' ></iframe>
       </div></a> 
        <a onmouseover=this.style.cursor='pointer'  onclick='post()'>
         
       <div style='background-color:#FFFFCC;position:absolute;border-radius:12px;height:37px;width:100px;left:130px'  onmouseover=style.backgroundColor='red' 
       onmouseout=style.backgroundColor='#FFFFCC'><img src='post.png' height=50px width=90px></div></a>
       
     <a onmouseover=this.style.cursor='pointer'  onclick='papon()' >
         
       <div style='background-color:#FFFFCC;border-radius:12px;position:absolute;height:37px;width:100px;left:370px'  onmouseover=style.backgroundColor='red' 
       onmouseout=style.backgroundColor='#FFFFCC'>
       &nbsp;&nbsp;&nbsp;<img src='quick.jpg' height=50px width=70px></div></a>

       
        <a onmouseover=this.style.cursor='pointer'  onclick='rank()' >
         
       <div style='background-color:#FFFFCC;border-radius:12px;position:absolute;height:37px;width:100px;left:250px'  onmouseover=style.backgroundColor='red' 
       onmouseout=style.backgroundColor='#FFFFCC'>
       &nbsp;&nbsp;&nbsp;<img src='rank.jpg' height=50px width=70px></div></a></div>
       
       
   <div id='sending'  style='display:none;background-color:rgb(33,33,33)
   ;position:absolute;top:130px;left:590px;width:400px;padding:20px;height:300px'><fieldset><form method='post' action='send.php'><font size=4>
 Username: <input type='text' name='name'><font style='color:red' size=3>(To whom you r sendin') </font><br>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<br>Message: &nbsp;&nbsp;<input type='textarea' rows='3' cols='30' name='msg' id='msg'  
style='position:absolute;width:230px' onfocus=this.style.height='70px' 
onblur=this.style.height='20px'><input type='hidden' name='hidden' value='" .$_SESSION['username']. "' > 
<br><input type='submit' value='send' style='background-color:orange;border:circle white'></font></form><br><br></fieldset>

</div>     
       
<div id='rank' style='backgrount-color:red;display:none;position:absolute;width:600px;padding:10px;top:120px;height:92%;left:560px'>
<iframe src='ranklist.php' scrolling='no'  frameborder=0 style='position:absolute;width:600px;padding:10px;height:100%;'></iframe></div>
        
<div id='inbox' style='backgrount-color:red;display:none;position:absolute;width:600px;padding:10px;top:120px;height:95%;left:560px'>
<iframe src='msg.php' scrolling='no'  frameborder=0 style='position:absolute;width:600px;padding:10px;height:100%;'></iframe></div>

<div id='post' style='backgrount-color:red;display:block;position:absolute;width:600px;padding:10px;top:120px;height:95%;left:560px'>
<iframe src='domain.php' scrolling='yes'  frameborder=0 style='position:absolute;width:600px;padding:10px;height:100%;'></iframe></div>");


if($_SERVER['HTTP_USER_AGENT']=="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1")
{print(" <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><BR><BR>"); }

else if($_SERVER['HTTP_USER_AGENT']=="Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2")
{ print("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> ");}

else
 print("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
 

print("<div style='background-color:#787878;top: 1220px'> ");  print(" <br><br><br><div style='background-color:#787878'>
 ");
 print(" <script> function love(){
document.getElementById('PopUp').style.display = 'block' ;}
function amrita(){
document.getElementById('topup').style.display = 'block';
}
function nolove(){
document.getElementById('PopUp').style.display = 'none';}
function vandu(){
document.getElementById('topup').style.display = 'none';
}

function aloke(){
document.getElementById('alokeUp').style.display = 'block';document.getElementById('part').style.display = 'none' ;document.getElementById('upload').style.display = 'none' ; }

function sex(){ window.open('chat.php','_main');
}
function palash(){
document.getElementById('alokeUp').style.display = 'none'; 
document.getElementById('part').style.display = 'block'; 
document.getElementById('fuckup').style.display='block' ;document.getElementById('upload').style.display = 'block' ;
}
function shy(){document.getElementById('fuckup').style.display='block' ;}
function bhaskar(){
document.getElementById('fuckup').style.display='none' ;
document.getElementById('part').style.display = 'none' ; 

}
</script> ");

 if($_SERVER['HTTP_USER_AGENT']=="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1"){$k='aloke' ;}
else $k='aloke' ;

print(" 
<div id='part' style='display:block;height:300px;position:absolute; width:20px;top:150px;left:1190px' onclick=this.style.display='none'><img src='part.png' height='600px' width='4px''></div>s

<div id='alokeUp' style='display: none;position:absolute; left: 1000px; top: 180px; border: solid black 1px; padding: 10px; background-color: #FFFFFF; text-align: justify; font-size: 18px; height:750px;width: 300px;'  >
<div style='background-color:green;position:absolute;width:85%;heigth:100px' onclick='palash()' onmouseover=this.style.cursor='pointer'>Chat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  
<a onclick='palash()' onmouseover=this.style.cursor='pointer' ><img src='close.png' height=14px width='20px' float='right'></a></div>
<iframe src='online.php'     scrolling='no'  frameborder=0 
        style='border:none; width:100%;height:95% '></iframe>
<form style='position:absolute;top:700px' action ='send.php' method='post'>
<input type='textarea'  style='width:250px' name='msg'  font style='color:blue'>
<input type='hidden'  name='hidden' value='".$_SESSION['username']."' ><input type='hidden' name='email'  value='".$_SESSION['email']."' >
<input type='hidden' name='name'  value='".$_SESSION['talk']."' >
<input type='submit'    value='send' 
onclick='aloke()' style='background-color:red;border:solid' onmouseover=this.style.cursor='pointer' ></form>

</div>
<div id='fuckup' style='background-color:;height:60px;position:fixed; width:420px;top:140px;left:1290px' onclick='bhaskar()' onmouseover='$k()' onmouseout=this.style.display='none'><a onclick='$k()'     onmouseover= this.style.cursor='crosshair' >
<img src='online.png' height='240px' width='40px'></a></div>
 
<div id='upload' style='height:300px;position:absolute;width:70px;top:170px;left:1210px' ><img src='uploads.png' width='27px' height='25px' ><div style='position:;top:310px;width:70px;height:20px' ><font style='color:blue;strength:bold' size=2 onmouseover=this.size=3 onmouseout=this.size='2'>My upload</div><br>
<img src='notes.png' width='27px' height='25px' >
<div style='position:;top:370px;width:70px;height:20px' ><font style='color:blue;strength:bold' size=2 onmouseover=this.size=3 onmouseout=this.size='2'>My Notes</div><br>

<img src='Link.png' width='27px' height='25px' >
<div style='position:;top:430px;width:70px;height:20px' ><font style='color:blue;strength:bold' size=2 onmouseover=this.size=3 onmouseout=this.size='2'>My Links</div><br>
<a href='".$_SESSION['username']."/index.php' target='_blank' onmouseover=this.style.cursor='pointer' border=0 >
<img src='profile.png' width='27px' height='25px' border=0>
<div style='position:;top:460px;width:70px;height:20px' ><font style='color:blue;strength:bold' size=2 onmouseover=this.size=3 onmouseout=this.size='2'>My Profile</a></div><br>
</div>

<div style='background-color:#787878;top: '>

<div style='background-color:#282828;width:100%;'><a    onmouseover= this.style.cursor='pointer'  onclick='love()' font style='color:white' >Account Settings</a><font style='color:white'>&nbsp;&nbsp;| &nbsp;&nbsp;Online friends &nbsp;&nbsp;|&nbsp;&nbsp; <a    onmouseover= this.style.cursor='pointer'  onclick='love()' font style='color:white' >Deactivate Account</a> &nbsp;&nbsp; |&nbsp;&nbsp;<a    onmouseover= this.style.cursor='pointer'  onclick='love()' font style='color:white' > Change Password</a>&nbsp;&nbsp;|<a onclick='sexy()' onmouseover=this.style.cursor='pointer' >&nbsp;&nbsp;My Friends</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick=document.getElementById('bj').style.display='block' onmouseover=this.style.cursor='pointer'>Order a Download</a></font>  </div>
<div id='thumbsup' style='display: none; position: absolute; left:100px; top:600px; border: solid black 1px; padding: 60px; background-color: rgb(33,33,33); text-align: justify; font-size: 18px; width: 500px;'><font style='color:white'>My Friends on Patkai Network<iframe src='friendlist.php'   width='480px' height='400px' ></iframe><a onclick='nosex()' font style='color:red' onmouseover=this.style.cursor='pointer'>
Close</a>
</div>
</font>  </div>
<div id='PopUp' style='display: none; position: absolute; left: 100px; top: 400px; border: solid black 1px; padding: 100px; background-color: rgb(33,33,33); text-align: justify; font-size: 18px; width: 800px;'><font style='color:white'>Account Settings<hr><img src='".$_SESSION['username']."/".$_SESSION['photo']."' width='40px' height='48px' >
	<form method='post' action='dp.php' enctype='multipart/form-data'>
Select and submit if want to change: <input type='file' name='photo'>
<input type='submit' value='Change'></form>

<form method='post' action='bone.php'>
Do you want to permanantly deactivate your account:<input type='checkbox' name='sex' value='1'><br><hr>Enter your new username here or leave empty: <input type='text' name='newname'  ><br>
confirm current password:<input type='text' name='currentpass'  ><hr>
Change password:<input type='text' name='newpass'  ><br><hr><br><br>
<input type='submit' value='save'  onmouseover='condom()' >
<input type='button'  onclick='nolove()'  value='cancel'  onmouseover='condom()' >
</font></form><br /><form action='profile.php' method='post'><font size=2 style='color:white'>You are From-<input type='text' name='place'><br><br>
Relationship Status-<input type='checkbox' name='rstatus' value='single'>single
&nbsp;&nbsp;&nbsp;<input type='checkbox' name='rstatus' value='In a Relationship'>In relationship
&nbsp;&nbsp;&nbsp;<input type='checkbox' name='rstatus' value='Married'>Married
&nbsp;&nbsp;&nbsp;<input type='checkbox' name='rstatus' value='Seperated'>Seperated
&nbsp;&nbsp;&nbsp;<input type='checkbox' name='rstatus' value='Divorced'>Divorced

<br>
<br><input type='submit' value='save' onclick='nolove()'></font><a onmouseover=this.style.cursor='pointer' onclick='nolove()' font style='color:red'>Cancel</a></form>
</div>

<br>


<form action='delete.php' method='post'>
<input type='hidden' name='username' value='".$_SESSION['username']."'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Delete Message number:<input type='text' name='id'  >&nbsp;&nbsp;&nbsp;
<input type='submit' value='delete'>
</form><hr><center>Patkai Network &copy 2012 <br><a    onmouseover= this.style.cursor='pointer'  onclick='amrita()' font style='color:white' >Bhaskarjyoti Pathak</a>(Bhaskar)
<div id='topup' style='display: none; position: absolute; left:100px; top:600px; border: solid black 1px; padding: 100px; background-color: rgb(33,33,33); text-align: justify; font-size: 18px; width: 800px;'><font style='color:white'>I m a cse student from Tezpur Central University ,India. Now m in the 3 rd sem.....hope you will scrap me soon
<hr><a onmouseover= this.style.cursor='pointer' font style='color:red' onclick='vandu()'>close</div>



</div></center></body></html> "); } 

else{
// echo " <script>window.location='error2.php' ;</script> "  
echo "wrong pass!!" ;
}
?>




