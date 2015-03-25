<?php

class Update {

	public 	$content = NULL,
			$currentVersion,
			$gitVersion,
		   	$url;
	
	public function __construct(){

		$this->currentVersion = Config::get('version/last');
		
		$this->url = Config::get('github/readme');
		
	}

	public function checkUpdate() {

		$this->content = file_get_contents($this->url);
		
		if(preg_match("/Version:[^.].[^.].[^.]/", $content, $version)) {
			
			$split = explode(':', $version[0]);
			$this->version = $split[1];
			
		}
		
	}


}