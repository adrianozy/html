<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="15" />
<title>Monitoring - shadow.adrianozy.net</title>
</head>


<body>

<h1 style="font-size: 50px;" align=center>Światło</h1>


<?php
if (isset($_POST['a1'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a1');
}
?>
<form align=center action="index.php" method="post">
	<input align=center type="hidden" name="a1" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a1');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="MAŁY POKÓJ: ON" style="width:700px; height:200px; font-size: 50px;">';
}
else {
              echo  ' <input align=center type="submit" value="MAŁY POKÓJ: OFF" style="width:700px; height:200px; font-size: 50px;">';
}

?>

        </p>
</form>

<?php
if (isset($_POST['a2'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a2');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a2" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a2');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="DUŻY POKÓJ 70%: ON" style="width:700px; height:200px; font-size: 50px;">';
}
else {
              echo  ' <input align=center type="submit" value="DUŻY POKÓJ 70%: OFF" style="width:700px; height:200px; font-size: 50px;">';
}

?>

        </p>
</form>




<?php
if (isset($_POST['a3'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a3');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a3" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a3');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="DUŻY POKÓJ 30%: ON" style="width:700px; height:200px; font-size: 50px;">';
}
else {
              echo  ' <input align=center type="submit" value="DUŻY POKÓJ 30%: OFF" style="width:700px; height:200px; font-size: 50px;">';
}

?>

        </p>
</form>



<?php
if (isset($_POST['a4'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a4');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a4" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a4');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="PRZEDPOKÓJ 70%: ON" style="width:700px; height:200px; font-size: 50px;">';
}
else {
              echo  ' <input align=center type="submit" value="PRZEDPOKÓJ 70%: OFF" style="width:700px; height:200px; font-size: 50px;">';
}

?>

        </p>
</form>


<?php
if (isset($_POST['a5'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a5');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="a5" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a5');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="PRZEDPOKÓJ 30%: ON" style="width:700px; height:200px; font-size: 50px;">';
}
else {
              echo  ' <input align=center type="submit" value="PRZEDPOKÓJ 30%: OFF" style="width:700px; height:200px; font-size: 50px;">';
}

?>

        </p>
</form>

<?php
if (isset($_POST['talk'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/talk/toogle');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="talk" value="true">
        <p align=center>
<?php
$var=shell_exec('/usr/bin/curl http://192.168.0.21:8080/talk/status');
if ( $var == 'ON'){
              echo  '<input align=center type="submit" value="TALK: ON" style="width:700px; height:200px; font-size: 50px;">';
}
else {
              echo  ' <input align=center type="submit" value="TALK: OFF" style="width:700px; height:200px; font-size: 50px;">';
}

?>

        </p>
</form>




</body>

