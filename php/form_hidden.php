<?php

function campoHidden($name, $valor=""){
	echo "<input type='hidden' name='".$name."' id='".$name."' value='".$valor."'>\n";
}