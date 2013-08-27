<?php 
$varName = $_POST['name'];
		$varpass = $_POST['formpass'];
$db = mysql_connect("localhost","root","bj");
			if(!$db) die("Error connecting to MySQL database.");
			mysql_select_db("scrapbook" ,$db);

		$partnum=mysql_real_escape_string($POST['id']);
$part_list=" ";
 
$l=1;
print(" <table style='background-color:blue;width:90%'> ");
for($l=1;;$l++){
$q="SELECT * FROM $ where id='".$l."' " ;
$result=mysql_query($q);
if(!$result){
echo "error";
mysql_error();
exit;
}
$row=mysql_fetch_assoc($result);

mysql_free_result($result);


 

print("<tr style='width=100%'><td style='background-color:green;width=10%'>"  .$row['id'].  "</td><td style='background-color:yellow;width=30%'>            "    .$row['date'].  "<td style='background-color:green;width=40%'>"   .$row['username'].    "<td style='background-color:green;width=60%'>               ".$row['msg']."</td>");

if($row['username']=="")
break;
 

}

exit ;
?>
