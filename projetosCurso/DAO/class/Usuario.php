<?php

class Usuario {
    
    private $usu_id;
    private $usu_login;
    private $usu_senha;
    private $usu_dt_cadastro;

    public function __construct($login = "", $password = "")
    {
        $this->setUsuLogin($login);
        $this->setUsuSenha($password);
    }

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

    public function setData($data) {
        $this->setUsuId($data['usu_id']);
        $this->setUsuLogin($data['usu_login']);
        $this->setUsuSenha($data['usu_senha']);
        $this->setUsuDtCadastro(new DateTime($data['usu_dt_cadastro'])); # formata data
    }


    public function loadById($id) { # carrega usuario
        $sql = new Sql();

        # passa parametro id
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE usu_id = :id", array(
            ":id"=>$id
        ));

        if (count($result) > 0) {
            $row = $result[0];

            $this->setData($row);
        }
    }


    public static function getList() { # metodo pode ser estatico pois nao tem associacao ao proprio objeto
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY usu_login");
    }


    public static function search($login) {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE usu_login LIKE :login ORDER BY usu_login", array(
            ':login'=>"%$login%"
        ));
    }


    public function login($login, $password) {
        $sql = new Sql();

        # passa parametro id
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE usu_login = :login AND usu_senha = :password", array(
            ":login"=>$login,
            ":password"=>$password,
        ));

        if (count($result) > 0) {
            $row = $result[0];

            $this->setData($row);
        }
        else {
            throw new Exception("Login e/ou senhas inválidos", 1);
        }
    }


    public function insert() {  # insere novo cadastro
        $sql = new Sql();
        
        $result = $sql->select("CALL sp_usuarios_insert(:login, :password)", array(
            ":login"=>$this->getUsuLogin(),
            ":password"=>$this->getUsuSenha()
        )); # cria procedimento

        if (count($result) > 0) {
            $row = $result[0];

            $this->setData($row);
        }
    }


    public function update($login, $password) {  # atualiza registro
        
        $this->setUsuLogin($login);
        $this->setUsuSenha($password);

        $sql = new Sql();
        
        $sql->runQuery("UPDATE tb_usuarios SET usu_login = :login, usu_senha = :password WHERE usu_id = :id", array(
            ":login"=>$this->getUsuLogin(),
            ":password"=>$this->getUsuSenha(),
            ":id"=>$this->getUsuId()
        ));
    }


    public function delete() {  # deleta registro
        
        $sql = new Sql();
        
        $sql->runQuery("DELETE FROM tb_usuarios WHERE usu_id = :id", array(
            ":id"=>$this->getUsuId()
        ));

        $this->setUsuId(0);
        $this->setUsuLogin("");
        $this->setUsuSenha("");
        $this->setUsuDtCadastro(new DateTime()); # limpa os dados do usuario
    }


}

?>