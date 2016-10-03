<?php
session_start();

if(session_destroy()){
	header("Location:../view/pages/login_index.html");
	}
?>