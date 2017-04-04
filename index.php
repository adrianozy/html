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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="15" />
<title>Monitoring - wojzy.adrianozy.net</title>


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
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="15" />
<title>Monitoring - shadow.adrianozy.net</title>
</head>


<body>

<a style="font-size: 50px">MALY POKOJ</a>
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

<a style="font-size: 50px">DUZY POKOJ 70%</a>
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

<a style="font-size: 50px">DUZY POKOJ 30%</a>
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

<a style="font-size: 50px">PRZEDPOKOJ 70%</a>
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

<a style="font-size: 50px">PRZEDPOKOJ 30%</a>
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



<h1 style="font-size: 50px;" align=center>Opcje</h1>
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

