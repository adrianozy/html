<!DOCTYPE html>
<head>
</head>


<body>



<?php
if (isset($_POST['a1execute'])){
	$output1 = shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a1');
}

if (isset($_POST['a2execute'])){
	$output1 = shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a2');
}

if (isset($_POST['a3execute'])){
	$output1 = shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a3');
}

if (isset($_POST['a4execute'])){
	$output1 = shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a4');
}

if (isset($_POST['a5execute'])){
	$output1 = shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/toogle/a5');
}

if (isset($_POST['talk1execute'])){
	$output1 = shell_exec('/usr/bin/curl http://192.168.0.21:8080/talk/toogle');
}

if (isset($_POST['cam1execute'])){
	$output1 = shell_exec('/usr/bin/curl -o /var/www/html/image.jpg http://192.168.0.23:8081/cam/get/camera1.jpg');
}
?>

</body>

