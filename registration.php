
<?php
error_reporting(0);
include('class/mysql_connect.php');
$var1 = $_POST["fname"];
$var2 = $_POST["lname"];
$var3 = $_POST["regno"];
$var4 = $_POST["email"];
$var5 = $_POST["mobile"];
$var6 = $_POST["gen"];
$var7 = $_POST["dept"];
$var8 = $_POST["year"];
$var9 = $_POST["applywdev"];
$var10 = $_POST["applywd"];
$var11 = $_POST["applygd"];
$var12 = $_POST["applyv"];
$var13 = $_POST["applya"];
$var14 = $_POST["knowweb"];
$var15 = $_POST["joinweb"];
$var16 = $_POST["exceptweb"];
echo($var3."  ".$var2."  ".$var3." ".$var4."  ".$var9."  ".$var10."  ".$var11." ".$var12." ".$var14." ".$var15." ".$var16."end");
if($var9&$var10&$var11&$var12&$var13)
{
	$apply = "all";
}
else{
	$apply = $var9.$var10.$var11.$var12.$var13;
}
$db = new Database();
$db->connect();
if(!$db)
{
	echo "error while connecting Database";
}
$db->insert('recruit',array('fname'=>$var1,'lname'=>$var2,'reg_no'=>$var3,'email'=>$var4,'mobile_no'=>$var5,'gender'=>$var6,'department'=>$var7,'year'=>$var8,'applyfor'=>$apply,'knowweb'=>$var14,'joinweb'=>$var15,'exceptweb'=>$var16));
$res = $db->getResult();
if($res)
{?>
<script type="text/javascript">
alert( "registration successfull" );
</script>
<?php
}
$subject = "mail to verify email address";
$to = $var4;
$RANDOM = rand(1111,99999);
echo $RANDOM;
$message = "thank you for registration your verification code is : ".$RANDOM;
$header = "From:sid7326@gmail.com";
$header = "Cc:sid7326@gmail.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
$retval = mail($to,$subject,$message,$header);
 if( $retval == true )
         {
            echo "Message sent successfully...";
         }
         else
         {
            echo "Message could not be sent...";
         }
?>
