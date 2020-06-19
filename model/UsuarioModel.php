<?php
    require '../../db/db.php';

    class Usuario {
        private $id;
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        private $sobrenome;
        public function setSobrenome($sobrenome) { $this->sobrenome = $sobrenome; }
        public function getSobrenome() { return $this->sobrenome; }

        private $email;
        public function setEmail($email) { $this->email = $email; }
        public function getEmail() { return $this->email; }

        private $senha;
        public function setSenha($senha) { $this->senha = $senha; }
        public function getSenha() { return $this->senha; }

        private $foto;
        public function setFoto($foto) { $this->foto = $foto; }
        public function getFoto() { return $this->foto; }

        public static function cadastrar($novoReview) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Usuario (Nome, Sobrenome, Email, Senha, Foto) VALUES (?, ?, ?, ?, ?);');
            $query->bind_param("sssss", $novoReview->getNome(), $novoReview->getSobrenome(), $novoReview->getEmail(), $novoReview->getSenha(), $novoReview->getFoto());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

    }
?>