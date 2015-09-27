<?php
//include("image1.php");
//
//abc();
if (mysql_connect("localhost" , "root" , "abc") )
{
print "DB connected" . "\n";
}
else
{
print "DB not connected : "  . mysql_error() . "\n" ;
}
if(mysql_select_db("userdetails"))
{
print "DB selected". "\n";
}
else
{
print "DB not selected : " . mysql_error() . "\n" ;
}
$name=$_POST['name'];
$password=$_POST['p'];
$check=0;
$tselect="SELECT * FROM student;";
if ($data=mysql_query($tselect) )
{
//print "<table border='5' align='center'>";
//for($i=1;$i<=20;$i++)
while($a=mysql_fetch_array($data))
{
if($a['name']==$name  &&  $a['password']==$password)
{
$check=1;	

//setcookie("x" , "vimal", time()+120);

//session_start();

//$_SESSION['x']="vimal";
//header('location: home1.php');
}
}
}
if($check==0)
{
//print "Login incorrect "."<br/>";
header("location:login1.html");	
}	
else
{
	session_start();
	 echo $_SESSION	['randm'];
if(($_SESSION['randm'])==($_POST['randm']))
		{
			$x=$_SESSION['randm'];
		//	echo "matched";
			//print "welcome you are logged in";
		  header("location:https://www.google.co.in");
		}
		else
		{
		header("location:login1.html");	
			echo "not matched";
			echo '<br/>';
            //$_SESSION['randm']=$text;	
            
            $x=$_SESSION['randm'];			
		}
	   
	   
   }
   
?>