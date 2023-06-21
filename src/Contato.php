<?php
    class Contato {
        // public function __construct (private string $nome, private string $endereco, private string $telefone, private string $email) {}

        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $email;

        /**
         * @param array<string> $contato
         */
        public function __construct (array $contato = []) {
            $this->nome = $contato['nome'];
            $this->endereco = $contato['endereco'];
            $this->telefone = $contato['telefone'];
            $this->email = $contato['email'];
        }

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

        public function codigo () : void {
            if (strpos ($this->email, '@') === false) {
                print ('email invalido');
                exit (1);
            }


            print ('código asfasdfasdf');
            /*
                codigo a ser executado
            */
        }

        public function codigoRepetido () : void {
            if (strpos ($this->email, '@') === false) {
                print ('email invalido');
                exit (1);
            }

            print ('código 239r8-123rmj0-238r0123b0r');

            if (strlen ($this->getNome()) > 0) {
                echo "teste";
            }
            /*
                codigo a ser executado
            */
        }

        public function example2 () : void {
            print ('código 239r8-123rmj0-238r0123b0r');
        }
    }


    $novo = new Contato ([
        'nome' => 'teste',
        'endereco' => 'av 12 de agosto, n 123',
        'telefone' => '55-98765 4321',
    ]);
?>
