<?php
class SiteManager {
	private $xmlConfigFile;
	private $xmlElement;//objet simpleXMLElement
	private $name;
	private $url;
	private $adminId;
	private $adminpwd;

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
	public function setName($name){
		if (is_string($name)&&(strlen($name)<255)){
			$this->xmlElement->name[0] = $name;
			$this->editXmlConfigFile();
		}
	}
	public function setUrl($url){
		if (is_string($url)&&(strlen($url)<255)){
			$this->xmlElement->url[0] = $url;
			$this->editXmlConfigFile();
		}
	}
	public function setAdminId($adminId){
		if (is_string($adminId)&&(strlen($adminId)<255)){
			$this->xmlElement->adminId[0] = $adminId;
			$this->editXmlConfigFile();
		}
	}
	public function setAdminpwd($adminpwd){
		if (is_string($adminpwd)&&(strlen($adminpwd)<255)){
			$this->xmlElement->adminpwd[0] = $adminpwd;
			$this->editXmlConfigFile();
		}
	}
	/*getters*/
	public function name() {
		return $this->xmlElement->name[0];
	}
	public function url() {
		return $this->xmlElement->url[0];
	}
	public function adminId() {
		return $this->xmlElement->adminId[0];
	}
	public function adminpwd() {
		return $this->xmlElement->adminpwd[0];
	}
}