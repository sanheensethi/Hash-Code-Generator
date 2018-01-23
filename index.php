<!--

      Author : Sanheen Sethi
      Package : Hash Code Generator
      Date : 23 - January - 2018
      Time : 11:50 AM 
      
      This Code Is Free to use and Change .. 
      

-->


<html>
<head>
	<link rel="stylesheet" href="css/style.css">
</head>
<title>Hash Code Generator :: Sanheen Sethi</title>
<body>
<?php
error_reporting(0);
echo "<h1 style='color:#b36718'><u><i><b><center>Hash Code Generator</center></b></i></u></h1><br><hr style='background-color:#7800ff'>";
if(isset($_POST['s']))
{
$st=$_POST['st'];
$ha=$_POST['ha'];
$a="$ha";
$co=hash($a,$st);
$br3=str_repeat("<br>",3);
$br2=str_repeat("<br>",2);
$msg =" <centre><h2 style='color:#307fa1'> Your ( $ha ) Hash Code of text ( $st ) is = </h2></centre>";
}
 ?>
<h2><center>Please Select The Hash Code Engine</center></h2>
<center><span style='color:7800ff'>$----------------------------------$</span></centre>


<center><div class="header">
  <div id="clockbox" style="text-align:center;color:#aa4b4b;font-weight:bold;"></div>
  
</div>
<span style='color:7800ff'>$----------------------------------$</span>

</center>
<center>
<form action="" method="post">
<label><h3>Please Input Some Text which you want to Convert</h3></label>
<input class="form-control" type="text" name="st" required><br><br><hr style="background-color:#7800ff"><br>
<select name="ha" class="form-control" required>
<option name="ha" value="md2" selected>md2</option>
<option name="ha" value="md4">md4</option>
<option name="ha" value="md5">md5</option>
<option name="ha" value="sha1">sha1</option>
<option name="ha" value="sha224">sha224</option>
<option name="ha" value="sha256">sha256</option>
<option name="ha" value="sha384">sha384</option>
<option name="ha" value="sha512">sha512</option>
<option name="ha" value="ripemd128">ripemd128</option>
<option name="ha" value="ripemd160">ripemd160</option>
<option name="ha" value="ripemd256">ripemd256</option>
<option name="ha" value="ripemd320">ripemd320</option>
<option name="ha" value="whirlpool">whirlpool</option>
<option name="ha" value="tiger128,3">tiger128,3</option>
<option name="ha" value="tiger160,3">tiger160,3</option>
<option name="ha" value="tiger192,3">tiger192,3</option>
<option name="ha" value="tiger128,4">tiger128,4</option>
<option name="ha" value="tiger160,4">tiger160,4</option>
<option name="ha" value="tiger192,4">tiger192,4</option>
<option name="ha" value="snefru">snefru</option>
<option name="ha" value="snefru256">snefru256</option>
<option name="ha" value="gost">gost</option>
<option name="ha" value="adler32">adler32</option>
<option name="ha" value="crc32">crc32</option>
<option name="ha" value="crc32b">crc32b</option>
<option name="ha" value="fnv132">fnv132</option>
<option name="ha" value="fnv164">fnv164</option>
<option name="ha" value="joaat">joaat</option>
<option name="ha" value="haval128,3">haval128,3</option>
<option name="ha" value="haval160,3">haval160,3</option>
<option name="ha" value="haval192,3">haval192,3</option>
<option name="ha" value="haval224,3">haval224,3</option>
<option name="ha" value="haval256,3">haval256,3</option>
<option name="ha" value="haval128,4">haval128,4</option>
<option name="ha" value="haval160,4">haval160,4</option>
<option name="ha" value="haval192,4">haval192,4</option>
<option name="ha" value="haval224,4">haval224,4</option>
<option name="ha" value="haval256,4">haval256,4</option>
<option name="ha" value="haval128,5">haval128,5</option>
<option name="ha" value="haval160,5">haval160,5</option>
<option name="ha" value="haval192,5">haval192,5</option>
<option name="ha" value="haval224,5">haval224,5</option>
<option name="ha" value="haval256,5">haval256,5</option>
</select><br><br>
<input id="o" type="submit" name="s" value="Generate Code">
</form></center>
<br><br>
<h1 style="color:red;"><?php 
echo $msg;
echo $co; ?></h1>
<?PHP echo $br3; ?>
<h1>User Agent :: </h1>
<h2 style="color:#5d2ec9"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></h2>
<?php echo $br2; ?>
<h3 style="background:#000;width:100%;color:#fff"><center><<<<---- © Sanheen Sethi © ---->>>></center></h3>

<script type="text/javascript" src="js/date.js"></script>
</body>
</html>