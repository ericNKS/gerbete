<?php
    namespace App\Models;
    use MF\Model\Model;



    class Usuario extends Model{
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function __set($attr, $value)
        {
            $this->$attr = $value;
            return $this;
        }


        public function registrar(){
            $query = "INSERT INTO users(nome,email,senha) VALUES(:nome, :email, :senha)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':nome', $this->__get('nome'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();
            header('Location: /');
        }

        public function getUser(){
            $query = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->execute();
            $user = $stmt->fetchAll(\PDO::FETCH_OBJ);
            return $user;

        }
        public function validaUser(){
            $query = "SELECT * FROM users WHERE email = :email AND senha = :senha";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();
            $user = $stmt->fetch(\PDO::FETCH_OBJ);
            return $user;
        }
    }
?>