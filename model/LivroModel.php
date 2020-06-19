<?php
    require '../../db/db.php';

    class Livro {
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

        private $autor;
        public function setAutor($autor) { $this->autor = $autor; }
        public function getAutor() { return $this->autor; }

        private $paginas;
        public function setPaginas($paginas) { $this->paginas = $paginas; }
        public function getPaginas() { return $this->paginas; }

        private $ano;
        public function setAno($ano) { $this->ano = $ano; }
        public function getAno() { return $this->ano; }

        private $foto;
        public function setFoto($foto) { $this->foto = $foto; }
        public function getFoto() { return $this->foto; }

        private $notaMedia;
        public function setNotaMedia($notaMedia) { $this->notaMedia = $notaMedia; }
        public function getNotaMedia() { return $this->notaMedia; }

        private $avaliacoes;
        public function setAvaliacoes($avaliacoes) { $this->avaliacoes = $avaliacoes; }
        public function getAvaliacoes() { return $this->avaliacoes; }

        public static function cadastrar($novoReview) {
            $objBD = new db();
            $link = $objBD->mysqlConnect();

            $query = $link->prepare('INSERT INTO Livro (Nome, Descricao, Categoria, Autor, Paginas, Ano, Foto, NotaMedia, Avaliacoes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);');
            $query->bind_param("sssssssss", $novoReview->getNome(), $novoReview->getDescricao(), $novoReview->getCategoria(), $novoReview->getAutor(), $novoReview->getPaginas(), $novoReview->getAno(), $novoReview->getFoto(), $novoReview->getNotaMedia(),$novoReview->getAvaliacoes());
            $runQuery = $query->execute();

            if($runQuery)
                return true;
            else
                return false;
        }

    }
?>