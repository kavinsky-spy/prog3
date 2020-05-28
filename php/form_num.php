<?php

function campoNum($name, $label, $valor=""){
	echo "<label for='".$name."'>".$label."</label> <input type='number' name='".$name."' id='".$name."' value='".$valor."'>\n";
}