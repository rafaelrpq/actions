<?php
    class Contato {

        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $email;

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
                echo ('email invalido');
                exit (1);
            }
        }

        public function codigoRepetido () : void {
            if (strpos ($this->email, '@') === false) {
                echo ('email invalido');
                exit (1);
            }

            echo ('código 239r8-123rmj0-238r0123b0r'. $this->getTelefone());

            if (strlen ($this->getNome()) > 0) {
                echo "teste: ".$this->getNome();
            }
        }

        public function example2 () : void {
            echo 'código 239r8-123rmj0-238r0123b0r '.{$this->getNome();
            if (strpos ($this->email, '@') === false) {
                echo 'email invalido';
                exit (1);
            }
        }
    }


    $novo = new Contato ([
        'nome' => 'teste',
        'endereco' => 'av 12 de agosto, n 123',
        'telefone' => '55-98765 4321',
    ]);
?>
