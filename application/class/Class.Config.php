<?php

class Config {

	public static function get( $path = null ) {

		if( $path ) {
			
			$config = $GLOBALS['config'];
			$path = explode( '/', $path );

			foreach ($path as $bit ) {

				if( isset( $config[$bit] ) ) {
					
					$config = $config[$bit];
				
				}
			
			}

			return $config;

		}

		return false;
	
	}

	public static function update($first, $second, $value) {

		$path = self::get('path/config') . 'lofex_config.php';

		if(file_exists($path)) {
			$loadContent = file_get_contents($path);
			$changeContent = str_replace( self::get( $first . '/' . $second ) , $value, $loadContent); 
			
			if(file_put_contents($path, $changeContent)) {
				echo "Plik config został zaktualizowany";
			}
		} else {
			return FALSE;
		}
		
	}
	
}