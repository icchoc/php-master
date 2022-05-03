<html>
<head>
<title>เทส</title>
<meta charset = "UTF-8">
<style>
        input {
            border:1px solid #ccc;
            width:200px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
        .send {
            width:220px;
        }
    </style>
</head>
<body>
<?php $chk_a = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "";
      $chk_click = isset($_REQUEST["login1"]) ? $_REQUEST["login1"] : "";
?>
  <center>
        <div>
        <form action="string_int.php" name="form1" method="POST">
            <input type= "" name="a" id="aa" value ="" >
			
            <input type= "submit" name="login1" id="login1" value="check value">
			<br>
			<?php
				if($chk_a!="" && $chk_a==is_numeric($chk_a)){echo $chk_a , " คือ ตัวเลข";}
				else if($chk_a=="0"){echo $chk_a , " คือ ตัวเลข";}
				else if($chk_a!="" && $chk_a==is_string($chk_a)){echo $chk_a , " คือ ข้อความ";}
			?>
              
        </form>
        </div>
        </center>
</body>
</html>