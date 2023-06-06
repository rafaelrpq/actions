<?php
    class Contato {
        public function __construct (private $nome, private $endereco, private $telefone, private $email) {}

        public function getNome () : string {
            return $this->nome;
        }
        public function getEndereco () : string {
            return $this->endereco;
        }
        public function getTelefone () : string {
            return $this->telefone;
        }
        public function getEmail () : string {
            return $this->email;
        }

        public function codigo () {
            if (strpos ($this->email, '@') === false) {
                print ('email invalido');
                exit (1);
            }


            print ('código asfasdfasdf');
            /*
                codigo a ser executado
            */
        }

        public function codigoRepetido () {
            if (strpos ($this->email, '@') === false) {
                print ('email invalido');
                exit (1);
            }

            print ('código 239r8-123rmj0-238r0123b0r');

            /*
                codigo a ser executado
            */
        }
    }
?>
