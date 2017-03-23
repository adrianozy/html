<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="15" />
<title>Monitoring - shadow.adrianozy.net</title>
</head>


<body>

<h1 align=center>Swiatlo</h1>


<?php
if (isset($_POST['malyon'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/maly/on');
}
?>
<form align=center action="index.php" method="post">
	<input align=center type="hidden" name="malyon" value="true">
        <p align=center>
                <input align=center type="submit" value="MALY ON" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['malyoff'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/maly/off');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="malyoff" value="true">
        <p align=center>
                <input align=center type="submit" value="MALY OFF" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['duzy3on'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/duzy3/on');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="duzy3on" value="true">
        <p align=center>
                <input align=center type="submit" value="DUZY3 ON" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['duzy3off'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/duzy3/off');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="duzy3off" value="true">
        <p align=center>
                <input align=center type="submit" value="DUZY3 OFF" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['duzy2on'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/duzy2/on');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="duzy2on" value="true">
        <p align=center>
                <input align=center type="submit" value="DUZY2 ON" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['duzy2off'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/duzy2/off');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="duzy2off" value="true">
        <p align=center>
                <input align=center type="submit" value="DUZY2 OFF" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>



<?php
if (isset($_POST['hol2on'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/hol2/on');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="hol2on" value="true">
        <p align=center>
                <input align=center type="submit" value="HOL2 ON" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['hol2off'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/hol2/off');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="hol2off" value="true">
        <p align=center>
                <input align=center type="submit" value="HOL2 OFF" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['hol1on'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/hol1/on');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="hol1on" value="true">
        <p align=center>
                <input align=center type="submit" value="HOL1 ON" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>

<?php
if (isset($_POST['hol1off'])){
shell_exec('/usr/bin/curl http://192.168.0.21:8080/hol1/off');
}
?>
<form align=center action="index.php" method="post">
        <input align=center type="hidden" name="hol1off" value="true">
        <p align=center>
                <input align=center type="submit" value="HOL1 OFF" style="width:700px; height:200px; font-size: 50px;">
        </p>
</form>






</body>

