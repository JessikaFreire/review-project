<?php
    require '../db/db.php';

    class Filme {
        private $id;
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }

        private $nome;
        public function setNome($nome) { $this->nome = $nome; }
        public function getNome() { return $this->nome; }

        private $descricao;
        public function setDescricao($descricao) { $this->descricao = $descricao; }
        public function getDescricao() { return $this->descricao; }

        private $categoria;
        public function setCategoria($categoria) { $this->categoria = $categoria; }
        public function getCategoria() { return $this->categoria; }

        private $ano;
        public function setAno($ano) { $this->ano = $ano; }
        public function getAno() { return $this->ano; }

        private $foto;
        public function setFoto($foto) { $this->foto = $foto; }
        public function getFoto() { return $this->Foto; }

        private $diretor;
        public function setDiretor($diretor) { $this->diretor = $diretor; }
        public function getDiretor() { return $this->diretor; }

        private $notaMedia;
        public function setNotaMedia($notaMedia) { $this->notaMedia = $notaMedia; }
        public function getNotaMedia() { return $this->notaMedia; }

        private $avaliacoes;
        public function setAvaliacoes($avaliacoes) { $this->avaliacoes = $avaliacoes; }
        public function getAvaliacoes() { return $this->avaliacoes; }

        public static function cadastrar($novoReview) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Filme (Nome, Descricao, Categoria, Ano, Foto, Diretor, NotaMedia, Avaliacoes) VALUES (?, ?, ?, ?, ?, ?, ?, ?);');
            $query->bind_param("ssssssss", $novoReview->getNome(), $novoReview->getDescricao(), $novoReview->getCategoria(), $novoReview->getAno(), $novoReview->getFoto(), $novoReview->getDiretor(), $novoReview->getNotaMedia(),$novoReview->getAvaliacoes());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

    }
?>