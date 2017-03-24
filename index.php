<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="15" />
<title>Monitoring - shadow.adrianozy.net</title>
</head>


<body>

<h1 align=center>Światło</h1>


<?php
if (isset($_POST['a1'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a1/toogle');
}
?>
<form align=center action="index.php" method="post">
	<input align=center type="hidden" name="a1" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a1/status');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="MAŁY POKÓJ: ON" style="width:300px; height:40px; font-size: 20px;">';
}
else {
              echo  ' <input align=center type="submit" value="MAŁY POKÓJ: OFF" style="width:300px; height:40px; font-size: 20px;">';
}

?>

        </p>
</form>

<?php
if (isset($_POST['a2'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a2/toogle');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a2" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a2/status');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="DUŻY POKÓJ 70%: ON" style="width:300px; height:40px; font-size: 20px;">';
}
else {
              echo  ' <input align=center type="submit" value="DUŻY POKÓJ 70%: OFF" style="width:300px; height:40px; font-size: 20px;">';
}

?>

        </p>
</form>




<?php
if (isset($_POST['a3'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a3/toogle');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a3" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a3/status');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="DUŻY POKÓJ 30%: ON" style="width:300px; height:40px; font-size: 20px;">';
}
else {
              echo  ' <input align=center type="submit" value="DUŻY POKÓJ 30%: OFF" style="width:300px; height:40px; font-size: 20px;">';
}

?>

        </p>
</form>



<?php
if (isset($_POST['a4'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a4/toogle');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a4" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a4/status');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="PRZEDPOKÓJ 70%: ON" style="width:300px; height:40px; font-size: 20px;">';
}
else {
              echo  ' <input align=center type="submit" value="PRZEDPOKÓJ 70%: OFF" style="width:300px; height:40px; font-size: 20px;">';
}

?>

        </p>
</form>


<?php
if (isset($_POST['a5'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a5/toogle');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a5" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/a5/status');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="PRZEDPOKÓJ 30%: ON" style="width:300px; height:40px; font-size: 20px;">';
}
else {
              echo  ' <input align=center type="submit" value="PRZEDPOKÓJ 30%: OFF" style="width:300px; height:40px; font-size: 20px;">';
}

?>

        </p>
</form>




</body>

