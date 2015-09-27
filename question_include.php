<html>
<head>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
           $(document).ready(function(){
               
               $("#next").click(function(){
                 var val = $("input[name=quee]").val();
                     $.ajax({
                     url : 'question.php',
                     data:{id : val},
                     type: 'POST',
                     success: function(data){
                                    $("body").html(data);
                                }
              });
           });
           }); 
        </script>
        <style type="text/css">
            .question
            {
                height: 150px;
                width: 80%;
                background-color: white;
                color: black;
            }
            .contain
            {
                height: 400px;
                width: 80%;
                background-color: black;

            }
            .answer
            {
                height: 200px;
                width: 80%;
                background-color:white;
                color: black;
            }
        </style>
</head>
</html>