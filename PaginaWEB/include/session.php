<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(!isset($_SESSION['logged_id'])){
	die('Inicia sesion primero!');
}//end isset
