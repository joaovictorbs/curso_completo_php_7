<?php

class Sql extends PDO { # classe nativa PDO

    private $conn;

    public function __construct() { # construtor se conecta ao banco

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

    private function setParams($statement, $parameters = array()) { # pega diversos parametros para query
        
        foreach ($parameters as $key => $value) {
        
            $this->setParam($statement, $key, $value);
        
        }

    }

    private function setParam($statement, $key, $value) { # pega um unico parametro para query
        
        $statement->bindParam($key, $value);
    
    }

    public function runQuery($rawQuery, $params = array()) { # cria a query e executa no banco de dados
        
        $stmt = $this->conn->prepare($rawQuery);
    
        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array { # pega dados do banco
        
        $stmt = $this->runQuery($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }
}

?>