<?php

class Usuario {
    
    private $usu_id;
    private $usu_login;
    private $usu_senha;
    private $usu_dt_cadastro;

    public function __toString()
    {
        return json_encode(array(
            "usu_id"=>$this->getUsuId(),
            "usu_login"=>$this->getUsuLogin(),
            "usu_senha"=>$this->getUsuSenha(),
            "usu_dt_cadastro"=>$this->getUsuDtCadastro()->format("d/m/Y H:i:s") # já está com datetime
        ));    
    }

    public function getUsuId() {
        return $this->usu_id;
    }

    public function setUsuId($value) {
        $this->usu_id = $value;
    }

    public function getUsuLogin() {
        return $this->usu_login;
    }

    public function setUsuLogin($value) {
        $this->usu_login = $value;
    }

    public function getUsuSenha() {
        return $this->usu_senha;
    }

    public function setUsuSenha($value) {
        $this->usu_senha = $value;
    }

    public function getUsuDtCadastro() {
        return $this->usu_dt_cadastro;
    }

    public function setUsuDtCadastro($value) {
        $this->usu_dt_cadastro = $value;
    }

    public function loadById($id) { # carrega usuario

        $sql = new Sql();

        # passa parametro id
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE usu_id = :id", array(
            ":id"=>$id
        ));

        if (count($result) > 0) {
            $row = $result[0];

            $this->setUsuId($row['usu_id']);
            $this->setUsuLogin($row['usu_login']);
            $this->setUsuSenha($row['usu_senha']);
            $this->setUsuDtCadastro(new DateTime($row['usu_dt_cadastro'])); # formata data

        }

    }

}

?>