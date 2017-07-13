<?php
session_start();

	session_unset('username');
	session_unset('password');
	session_unset('nomcli');
	header('location: index.php');
?>

<!--
<a href="logicaLogout.php">
	<i class="li_paperplane icon-white" style="alight: right;"></i> Cerrar Sesión
</a>