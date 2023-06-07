<?php
    class Contato {
        public function __construct (private string $nome, private string $endereco, private string $telefone, private string $email) {}

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

            /*
                codigo a ser executado
            */
        }


        // public function example1 () {
        //     if ($a == $b) {
        //         if ($a1 == $b1) {
        //             fiddle();
        //         } elseif ($a2 == $b2) {
        //             fiddle();
        //         } else {
        //             fiddle();
        //         }
        //     } elseif ($c == $d) {
        //         while ($c == $d) {
        //             fiddle();
        //         }
        //     } elseif ($e == $f) {
        //         for ($n = 0; $n < $h; $n++) {
        //             fiddle();
        //         }
        //     } else {
        //         switch ($z) {
        //             case 1:
        //                 fiddle();
        //                 break;
        //             case 2:
        //                 fiddle();
        //                 break;
        //             case 3:
        //                 fiddle();
        //                 break;
        //             default:
        //                 fiddle();
        //                 break;
        //         }
        //     }
        // }

        public function example2 () {
            print ('código 239r8-123rmj0-238r0123b0r');
        }
    }


    $novo = new Contato ('teste', 'av 12 de agosto, n 123', '55-98765 4321', '');
?>
