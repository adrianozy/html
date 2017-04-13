<!DOCTYPE html>
<head>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 240px;
  height: 136px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 104px;
  width: 104px;
  left: 16px;
  bottom: 16px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(104px);
  -ms-transform: translateX(104px);
  transform: translateX(104px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 136px;
}

.slider.round:before {
  border-radius: 50%;
}

img {
    border-radius: 30px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Supernova</title>


<script>
$(document).ready(function(){
    $("#a1check").click(function(){
        $.post("exec.php", "a1execute", function(data) {
    });
    });

    $("#a2check").click(function(){
        $.post("exec.php", "a2execute", function(data) {
    });
    });

    $("#a3check").click(function(){
        $.post("exec.php", "a3execute", function(data) {
    });
    });

    $("#a4check").click(function(){
        $.post("exec.php", "a4execute", function(data) {
    });
    });

    $("#a5check").click(function(){
        $.post("exec.php", "a5execute", function(data) {
    });
    });

    $("#talk1check").click(function(){
        $.post("exec.php", "talk1execute", function(data) {
    });
    });

    $("#cam1check").click(function(){
        $.post("exec.php", "cam1toogle", function(data) {
    });
    });

    $("#cam2check").click(function(){
        $.post("exec.php", "cam2toogle", function(data) {
    });
    });

    $("#cam3check").click(function(){
        $.post("exec.php", "cam3toogle", function(data) {
    });
    });

});

var int=self.setInterval("reload()",3000);
function reload(){
   d = new Date();
   $.post("exec.php", "cam1execute", function(data) {
});
   $.post("exec.php", "cam2execute", function(data) {
});
   $.post("exec.php", "cam3execute", function(data) {
});
   $("#webcam1").attr("src", "image.jpg?"+d.getTime());
   $("#webcam2").attr("src", "camera1.jpg?"+d.getTime());
   $("#webcam3").attr("src", "camera2.jpg?"+d.getTime());
};


</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="60" />
<title>Monitoring - shadow.adrianozy.net</title>
</head>


<body>

<h1 style="font-size: 50px;" align=center>Światło</h1>

<table style="width:100%">
<tr>
<th><a style="font-size: 50px">MALY POKOJ</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a1');
	if ( $output == 'ON' ) {
			echo '<input id="a1check"  type="checkbox" checked>';
		} else {
			echo '<input id="a1check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th>
</tr>
<tr>
<th>
<a style="font-size: 50px">DUZY POKOJ 70%</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a2');
	if ( $output == 'ON' ) {
			echo '<input id="a2check"  type="checkbox" checked>';
		} else {
			echo '<input id="a2check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th>
</tr>
<tr>
<th>
<a style="font-size: 50px">DUZY POKOJ 30%</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a3');
	if ( $output == 'ON' ) {
			echo '<input id="a3check"  type="checkbox" checked>';
		} else {
			echo '<input id="a3check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th>
</tr>
<tr>
<th>
<a style="font-size: 50px">PRZEDPOKOJ 70%</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a4');
	if ( $output == 'ON' ) {
			echo '<input id="a4check"  type="checkbox" checked>';
		} else {
			echo '<input id="a4check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th>
</tr>
<tr>
<th>
<a style="font-size: 50px">PRZEDPOKOJ 30%</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.21:8080/relay/status/a5');
	if ( $output == 'ON' ) {
			echo '<input id="a5check"  type="checkbox" checked>';
		} else {
			echo '<input id="a5check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th>
</tr>
<tr>

</tr>
</table>

<h1 style="font-size: 50px;" align=center>Opcje</h1>

<table style="width:100%">
<tr>
<th>
<a style="font-size: 50px">TALK</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.21:8080/talk/status');
	if ( $output == 'ON' ) {
			echo '<input id="talk1check"  type="checkbox" checked>';
		} else {
			echo '<input id="talk1check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th>
</tr>
</table>
<h1 style="font-size: 50px;" align=center>Kamery</h1>


<table style="width:100%" align=center>
<tr><th>
	<img src="image.jpg" id="webcam1" alt="KAMERA WYLACZONA" />
</th></tr>
<tr><th>
<a style="font-size: 50px">MAŁY POKÓJ CAM1</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.23:8081/cam/status/cam1');
	if ( $output == 'ON' ) {
			echo '<input id="cam1check"  type="checkbox" checked>';
		} else {
			echo '<input id="cam1check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th></tr>

<tr><th>

	<img src="camera1.jpg" id="webcam2" alt="KAMERA WYLACZONA" />
</th></tr>

<tr><th>
<a style="font-size: 50px">DUŻY POKÓJ CAM1</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.22:8081/cam/status/cam1');
	if ( $output == 'ON' ) {
			echo '<input id="cam2check"  type="checkbox" checked>';
		} else {
			echo '<input id="cam2check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th></tr>


<tr><th>
	<img src="camera2.jpg" id="webcam3" alt="KAMERA WYLACZONA" />

</th></tr>

<tr><th>
<a style="font-size: 50px">DUŻY POKÓJ CAM2</a></th>
<th>
<label class="switch">
<?php
	$output=shell_exec('/usr/bin/curl http://192.168.0.22:8081/cam/status/cam2');
	if ( $output == 'ON' ) {
			echo '<input id="cam3check"  type="checkbox" checked>';
		} else {
			echo '<input id="cam3check" type="checkbox">';
		}

?>
  <div class="slider round"></div>
</label>
</th></tr>



</table>


</body>


