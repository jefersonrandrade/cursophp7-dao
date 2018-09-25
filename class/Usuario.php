<?php

class Ususario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario($value) {
		$this->idusuario = $value;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($value) {
		$this->deslogin = $value;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($value) {
		$this->dessenha = $value;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($value) {
		$this->dtcadastro = $value;
	}

	public function loadById($id) {
		$sql = new Sql();

		$results = $sql->("SELECT * FROM tb_ususarios WHERE idusuario");
	}
}

?>