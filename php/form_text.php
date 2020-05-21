<?php

function campoText($name, $label, $valor=""){
	echo "<label for='".$name."'>".$label."</label> <input type='text' name='".$name."' id='".$name."' value='".$valor."'>\n";
}