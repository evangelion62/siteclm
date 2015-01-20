<?php
class SiteManager {
	private $xmlConfigFile;
	private $xmlElement;//objet simpleXMLElement
	private $adminId;
	private $adminpwd;
	private $installStatus;

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
	public function setInstallStatus($installStatus){
		if (is_string($installStatus)&&(strlen($installStatus)<255)){
			$this->xmlElement->installStatus[0] = $installStatus;
			$this->editXmlConfigFile();
		}
	}
	
	/*getters*/

	public function adminId() {
		return $this->xmlElement->adminId[0];
	}
	public function adminpwd() {
		return $this->xmlElement->adminpwd[0];
	}
	public function installStatus() {
		return $this->xmlElement->installStatus[0];
	}
}