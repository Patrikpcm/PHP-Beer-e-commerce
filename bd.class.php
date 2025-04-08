<?php
ini_set('display_errors', 1); error_reporting(-1);
//dados de conexão
class bd{
    //host  
    private $host = 'localhost:3306';

    //usuario
    private $usuario = 'barukalkh';
    
    //senha
    private $senha = 'barukalkh';
    
    //banco de dados
    private $database = 'baruk_alkh';

    //função de conexão com o BD
    public function conecta_mysql(){
        //criar a conexão
        $con =  mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($con, 'utf8');

        //verificar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o banco de dados BD MySQL: '.mysqli_connect_error();
        }
        
        //depois de tudo criado, podemos retornar nossa variável de conexão
        return $con;
    }
}
?>