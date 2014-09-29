<?php
class BddManager {
	private $xmlConfigFile;
	private $xmlstr;
	private $host;
	private $dbname;
	private $user;
	private $pwd;

	/*constructeur*/
	public function __construct($xmlConfigFile){
		$this->setXmlConfigFile($xmlConfigFile);
	}
	/*setters*/
	private function setXmlConfigFile($xmlConfigFile) {
		if (is_file($xmlConfigFile)){
			$this->xmlConfigFile=$xmlConfigFile;
		}
	}
	private function setXmlstr($xmlstr) {
		if (is_string($xmlstr)){
			$this->xmlstr = $xmlstr;
		}
	}
	private function setHost($host){
		
	}
	/*getters*/
	
}