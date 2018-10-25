<?php
class banco{
 
 
var $nome = ""; // nome do cliente
var $conta = ""; // numero da conta
var $valor = ""; // saldo
 
 
// cria conta: caso não especifique o valor, o padrão será 100
function criaConta($nome,$conta,$valor = 100) {
    
    // seta nome
    $this -> nome = $nome;
    // seta conta
    $this -> conta = $conta;
    // seta valor
    $this -> valor = $valor;
 
}
 
// faz depósito através do número da conta
function deposito($conta, $valor) {
 
    // verifica se a conta existe
    if ($this -> conta == $conta) {
        
        // incrementa o deposito ao saldo
        $this -> valor = $this -> valor + $valor;
        echo "Depósito Efetuado Com Sucesso.";
    
    }
    else
        // conta errada
        echo "Conta Errada";
 
 
}
 
// faz saque tendo como parâmetro o numero da conta
function saque($conta, $valor) {
    
    // verifica se a conta existe
    if ($this -> conta == $conta) {
        // verifica se o saldo é suficiente
        if ($valor > $this -> valor) {  
            
            echo "Saldo Insuficiente.";
        
        }  
        else
        {
            // reduz o valor sacado do saldo
            $this -> valor = $this -> valor - $valor;
            echo "Saque Efetuado Com Sucesso";
        }
    }
    else
        // conta errada
        echo "Conta Errada";
}
 
 
// imprime os dados do cliente
function imprime() {
    
    // nome, conta e saldo
    echo "<br>--------------------------------------------------<br>";
    echo "Nome: ".$this -> nome."<br>";
    echo "Conta: ".$this -> conta."<br>";
    echo "Saldo: ".$this -> valor;
    echo "<br>--------------------------------------------------<br>";
 
 
 
}
 
 
}

class contaCorrente extends banco{

function taxaManipulacao($conta,$valor){
    // verifica se a conta existe
    if ($this -> conta == $conta) {
        // verifica se o saldo é suficiente
        if ($valor > $this -> valor) {  
            
            echo "Saldo Insuficiente.";
        
        }  
        else
        {
            // reduz o valor sacado do saldo
            $this -> valor = $this -> valor - ($valor*1.05);
            echo "Saque Efetuado Com Sucesso, cobrada taxa de 5%";
        }
    }
    else
        // conta errada
        echo "Conta Errada";
}

}

// exemplo 
// cria o objeto
 
$bancoteste = new banco();
sscanf(string $conta),sscanf(int $valor)
$cc = new contaCorrente();
//-----
$cc -> taxaManipulacao();
echo "Retirar dinheiro do caixa tem uma taxa de 5%";
// imprime o cliente que é vazio
$bancoteste -> imprime();
echo "Cria Conta";
// cria uma conta
$bancoteste -> criaConta("Tonho","011-1406",200);
// imprime
$bancoteste -> imprime();
// realiza saque de 300
echo "Faz Saque de 300<br>";
$bancoteste -> saque("011-1406",300);
// realiza saque de 150
echo "<br>Faz Saque de 150<br>";
$bancoteste -> saque("011-1406",150);
// imprime
$bancoteste -> imprime();
// faz deposito em conta errada
echo "<br>Faz Depósito Com Numero da Conta Errado<br>";
$bancoteste -> deposito("011-1407",234);
// faz depósito em conta certa
echo "<br>Faz Depósito Com Numero da Conta Certo<br>";
$bancoteste -> deposito("011-1406",234);
// imprime
$bancoteste -> imprime();
