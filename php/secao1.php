<?php
session_start();
$_SESSION["nome"] = "Felipe Luiz Pereira";
session_write_close();
echo "<a href='secao2.php'>Link</a>";