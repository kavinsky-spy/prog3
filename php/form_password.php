<?php

function campoPass($name, $label){
	echo "<label for='".$name."'>".$label."</label> <input type='password' name='".$name."' id='".$name."'>\n";
}