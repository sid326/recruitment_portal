<?php
error_reporting(0); 
$count=$_POST["id"];
include('class/mysql_connect.php');
include('question_include.php');
$db = new Database();
$db->connect();
if(!$db)
{
    echo "error while connecting Database";
}
if($count=='')
$count=1;
$db->select('devlopment','qid,question,option_a,option_b,option_c,option_d,answer',NULL,'qid='.$count,'qid DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$d=json_encode($res[0]);
$a=json_decode($d,true);
?>
<html>  
<body>
<div class="contain">
<div id="que" class="question">
    <?php
    echo $a['question'];
    ?>
</div>
<br><br>
<form action="" method="Post">
<div id="ans" class="answer">
    <input type="radio" name="your"><?php
     echo $a['option_a'];
    ?>
    <input type="radio" name="your"><?php
     echo $a['option_b'];
    ?>
    <input type="radio" name="your"><?php
     echo $a['option_c'];
    ?>
    <input type="radio" name="your"><?php
     echo $a['option_d'];
    ?>
</div>
<input type="button" value="sub" id="next">
<input type="hidden" value="<?php echo $count+1;?>" id="nextque" name="quee">
</div>
</body>
</html>
