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

		if(preg_match("/Version:[^.].[^.].[^.]/", $this->content, $version)) {
			
			$split = explode(':', $version[0]);

			$this->gitVersion = $split[1];
			
		} elseif(preg_match("/Version: [^.].[^.].[^.]/", $this->content, $version)) {

			str_replace(' ', '', $version[0]);

			$split = explode(':', $version[0]);

			$this->gitVersion = $split[1];

		} else {

			return FALSE;

		}
		
	}


}