<?php

	/*
	require("core/controller.php");
	require("core/config.php");
	require("core/views.php");
	
	if($_GET && isset($_GET["controller"]))
	{
		$default_controller = $_GET["controller"];
		if(file_exists("controllers/".$default_controller.".php"))
			require("controllers/".$default_controller.".php");
		else
			die("Controlador no encontrado");
	}
	else
	{
		if(file_exists("controllers/".$default_controller.".php"))
			require("controllers/".$default_controller.".php");
		else
			die("Controlador no encontrado");
	}
	$codestack = new $default_controller();
	*/
	
	require_once("Config/Config.php");
	/* require_once("Config/ConfigSqli.php"); */
	require_once("Helpers/Helpers.php");
	
	/* url la variable del htacces */
	$url = !empty($_GET['url']) ? $_GET['url'] : 'login/login';
	$arrUrl = explode("/", $url);
	/* print_r ($arrUrl); */
	/* echo $url; */
	
	$controller = $arrUrl[0];
	$method = $arrUrl[0];
	$params = "";
	
	/* Metodos */
	if(!empty($arrUrl[1]))
	{
		if($arrUrl[1] != "")
		{
			$method = $arrUrl[1];
		}
	}
	
	/* Parametros */
	if(!empty($arrUrl[2]))
	{
		if($arrUrl[2] != "")
		{
			for ($i=2; $i < count($arrUrl); $i++)
			{
				$params .= $arrUrl[$i].',';
			}
			$params = trim($params,',');
			//echo $params;
		}
	}
	
	/*
	echo 'controlador: '.$controller . '<br>';
	echo 'método: '.$method . '<br>';
	echo 'parametros: '.$params . '<br>';
	*/
	
	require_once("Libraries/Core/Autoload.php");

	require_once("Libraries/Core/Load.php");
	/*
		ideas
		fixed nav bar
		fixed side bar
		fixed footer
		colapsed sidebar
		widget maximizable
		modal y alert      SweetAlert2 Examples   Toastr Examples
		navbar y tabs
	*/
?>