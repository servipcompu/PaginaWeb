<?php

    $fichero = file_get_contents('./Certificado/AAA010101AAA.pfx', true);
	$wsdl = "https://wcfpruebas.facturoporti.com.mx/Timbrado/Servicios.svc?wsdl";
    
	$soapClient = new SoapClient($wsdl); 
	//Envia las credenciales de acceso
	$parametroSeguridad = array ('Usuario' => 'PruebasTimbrado','Contrasenia' => '@Notiene1');
	// Agrega los parametros para cancelar uno o varios UUID
	$parametro = array ('RFC' =>  'AAA010101AAA', 'PFX' => $fichero, 'Password' => '12345678a', 'UUID' => array('1543FB3C-2DA2-40A0-AC69-7BD592A816FD'));
	
	$retval = $soapClient->CancelarCFDICualquierPAC(array ('parametroSeguridad' => $parametroSeguridad,'parametro' => $parametro));
		
	print_r ($retval->CancelarCFDICualquierPACResult->FoliosRespuesta);
	
?>
