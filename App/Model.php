<?php

abstract class ClassConexao{
    public function Conectar()
        {
            try
            {
                //Conexão com o Sqlite
                $Con=new PDO("sqlite:".__DIR__."/BancoDados.db");
                $sql = "CREATE TABLE IF NOT EXISTS cadastro (id integer primary key autoincrement, nome  text, telefone text, endereco text)";
                
                //Conexão com o Mysql
                //$Con = new PDO('mysql:host=localhost;dbname=crudcadastro;charset=utf8', 'root','');
                //$sql = "CREATE TABLE IF NOT EXISTS cadastro ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NULL DEFAULT NULL , `telefone` INT(15) NULL DEFAULT NULL , `endereco` TEXT NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

                
                $stmt = $Con->prepare($sql);
                $stmt->execute();
                return $Con;
            }
            catch (PDOException $ex){
                echo 'Erro ao Conectar com o Banco de Dados: '.$ex->getMessage();
            }
        }
}






class Model  extends ClassConexao
{

    public $id;
    public $nome;
    public $endereco;
    public $telefone;

    public function __construct(){
        $this->id;
        $this->nome;
        $this->endereco;
        $this->telefone;
    }

    public function Read(){
        $Select=$this->Conectar()->prepare("SELECT * FROM cadastro");
        $Select->execute();
        return $Select;//Retorna 
    }

    public function Create(){
        $Select=$this->Conectar()->prepare("INSERT INTO cadastro (nome, telefone, endereco) VALUES (:nome ,:telefone, :endereco)");
        $Select->bindParam(":nome",$this->nome,PDO::PARAM_STR);
        $Select->bindParam(":endereco",$this->endereco,PDO::PARAM_STR);
        $Select->bindParam(":telefone",$this->telefone,PDO::PARAM_STR);
        $Select->execute();
        return $Select;//Retorna 
    }

    public function Update(){
        $Select=$this->Conectar()->prepare("UPDATE cadastro SET nome = :nome , telefone = :telefone , endereco = :endereco WHERE id = :id ");
        $Select->bindParam(":nome",$this->nome,PDO::PARAM_STR);
        $Select->bindParam(":endereco",$this->endereco,PDO::PARAM_STR);
        $Select->bindParam(":telefone",$this->telefone,PDO::PARAM_STR);
        $Select->bindParam(":id",$this->id,PDO::PARAM_STR);
        $Select->execute();
        return $Select;//Retorna 
    }

    public function Delete(){
        $Select=$this->Conectar()->prepare("DELETE FROM cadastro WHERE id = :id ");
        $Select->bindParam(":id",$this->id,PDO::PARAM_STR);
        $Select->execute();
        return $Select;//Retorna 
    }

    public function Read_Update(){
        $Select=$this->Conectar()->prepare("SELECT * FROM cadastro WHERE id = :id ");
        $Select->bindParam(":id",$this->id,PDO::PARAM_STR);
        $Select->execute();
        return $Select;//Retorna 
    }

}
