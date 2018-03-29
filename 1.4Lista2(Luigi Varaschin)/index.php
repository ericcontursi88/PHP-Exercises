<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
class livro {
	private $nome;
	private $tipo;
	private $preco;
	//construtor
	public function __construct($nome, $tipo, $preco){
		$this->nome=$nome;
		$this->tipo=$tipo;
		$this->preco= precoLivro($tipo);
	}
	//método definir preço livro
	public function precoLivro($tipo){
		$valor = '0';
		switch ($tipo) {
			case '1':
				$valor = 20;
				break;
			case '2':
				$valor = 40;
				break;
			case '3':
				$valor = 80;
				break;
			default:
				$valor = 0;
				break;
		}
		return $valor;
	}
	//método definir tipo do livro
	public function tipoLivro(){
		$_tipo= null;
		switch ($tipo) {
			case '1':
				$_tipo = "EPUB";
				break;
			case '2': 
				$_tipo = "PDF";
				break;
			case '3':
				$_tipo = "FÍSICO";
				break;
			default:
				$_tipo = null;
				break;
			}
			return $_tipo;		
	}
	//get não sei
	$nome $_GET["nome"];
	$preco $_GET["Preco"];
}
$l1 = new livro("Lindas tranças de um careca", '1');
echo($l1->getNome() + $l1->tipoLivro() + $l1->getPreco());
        ?>
    </body>
</html>
