<?php

	require_once 'setup.php';
	require_once 'php_ext/RedBeanPHP4_3/rb.php';
	
	R::setup( 'mysql:host=' . HOSTNAME . ';dbname=' . SCHEMATA, USERNAME, PASSWORD );

	if( isset( $_GET['device'] ) && NULL != ( $device = substr( $_GET['device'], 0, 20 ) ) )
	{
		$data = R::findOne( TABLE, " name = \"$device\"" );

		if( !isset( $data ) ) $data = R::dispense( TABLE );
		
		$data->name	= $device;
		$data->ip	= $_SERVER['REMOTE_ADDR'];
		$data->date	= time();
		
		R::store( $data );
	}
	else
	{
		$ips = R::findAll( TABLE );
		echo( json_encode( R::exportAll( $ips ), JSON_NUMERIC_CHECK ) );
	}

?>