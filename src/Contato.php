 <?php
     class Contato {
         private string $nome;
         private string $endereco;
         private string $telefone;
         private string $email;

         private function __construct(string $nome, string $endereco, string $telefone, string $email){
             $this->nome = $nome;
             $this->endereco = $endereco;
             $this->telefone = $telefone;
             $this->email = $email;
         }

         /**
         * @param array<string> $contato
         */
         public static function fromArray(array $contato): Contato{
             if (!isset($contato['nome'], $contato['endereco'], $contato['telefone'], $contato['email'])){
                throw new InvalidArgumentException("Contato array must have keys 'nome', 'endereco', 'telefone' and 'email'");
             }
             return new self($contato['nome'], $contato['endereco'], $contato['telefone'], $contato['email']);
         }

         public function getNome(): string {
             return $this->nome;
         }

         public function getEndereco(): string {
             return $this->endereco;
         }

         public function getTelefone(): string {
             return $this->telefone;
         }

         public function getEmail(): string {
             return $this->email;
         }

         public function codigo() : void {
             if (!strpos ($this->email, '@')){
                throw new InvalidArgumentException('Email inválido');
             }
             // TODO
         }

         public function codigoRepetido () : void {

             if (!strpos ($this->email, '@')){
                throw new InvalidArgumentException('Email inválido');
             }

             if (strlen($this->getNome()) > 0){
                 echo "teste: ".$this->getNome();
             }
             // TODO
         }

         public function example2(): void {
            if (!strpos ($this->email, '@')){
               throw new InvalidArgumentException('Email inválido');
            }
            echo "código 239r8-123rmj0-238r0123b0r {$this->getNome()}";
         }
     }
