<?php
    class Contato {
        public function __construct (private $nome, private $endereco, private $telefone, private $email) {}

        public function getNome () {
            return $this->nome;
        }
        public function getEndereco () {
            return $this->endereco;
        }
        public function getTelefone () {
            return $this->telefone;
        }
        public function getEmail () {
            // return $this->email;
        }
    }
?>
