<?php
class BddManager {
	private $xmlConfigFile;
	private $xmlElement;//objet simpleXMLElement
	private $host;
	private $dbname;
	private $user;
	private $pwd;

	/*constructeur*/
	public function __construct($xmlConfigFile){
		$this->setXmlConfigFile($xmlConfigFile);
		$this->setXmlElement($xmlConfigFile);
	}
	/*setters*/
	private function setXmlConfigFile($xmlConfigFile) {
		if (is_file($xmlConfigFile)){
			$this->xmlConfigFile=$xmlConfigFile;
		}
	}
	private function editXmlConfigFile() {
		$xmlstr = $this->xmlElement->asXML();
		file_put_contents($this->xmlConfigFile, $xmlstr);
	}
	private function setXmlElement($xmlConfigFile) {
		if (is_file($xmlConfigFile)) {
			$this->xmlElement = simplexml_load_file($xmlConfigFile);
		}
	}
	public function setHost($host){
		if (is_string($host)&&(strlen($host)<255)){
			$this->xmlElement->host[0] = $host;
			$this->editXmlConfigFile();
		}
	}
	public function setdbname($dbname){
		if (is_string($dbname)&&(strlen($dbname)<255)){
			$this->xmlElement->dbname[0] = $dbname;
			$this->editXmlConfigFile();
		}
	}
	public function setuser($user){
		if (is_string($user)&&(strlen($user)<255)){
			$this->xmlElement->user[0] = $user;
			$this->editXmlConfigFile();
		}
	}
	public function setpwd($pwd){
		if (is_string($pwd)&&(strlen($pwd)<255)){
			$this->xmlElement->pwd[0] = $pwd;
			$this->editXmlConfigFile();
		}
	}
	/*getters*/
	public function host() {
		return $this->xmlElement->host[0];
	}
	public function dbname() {
		return $this->xmlElement->dbname[0];
	}
	public function user() {
		return $this->xmlElement->user[0];
	}
	public function pwd() {
		return $this->xmlElement->pwd[0];
	}
	
}