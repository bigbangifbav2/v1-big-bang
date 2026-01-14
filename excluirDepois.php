<?php
/**
 * Conexão com o banco de dados
 *
 * @author Breno Lessa
 */
class Conexao {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'bigbang';
    public $con; //mudar isso aqui
    function __construct() {
        $this->conectar();
    }
    
    function conectar(){
        $con = mysql_connect($this->host, $this->user, $this->pass) or die("Não foi possível conectar ao banco".mysql_error());        
        $con = mysql_select_db($this->database) or die("Não foi possível selecionar o banco de dados".  mysql_error());
        return $con;
    }
    
    // Método para selecionar os elementos pelo nome do nivel passado.
    function selecionarElementos($nivel){
        $query = "SELECT a.resposta FROM Questao a, Nivel b WHERE a.codNivel =b.codNivel AND b.nome = '$nivel'";
        $res = mysql_query($query);
        while ($row = mysql_fetch_object($result, MYSQL_NUM)) {
               //printf("ID: %s  Name: %s", $row[0], $row[1]);
                
            
        $consulta = mysql_query(" select * from usuario");
        while($resultado = mysql_fetch_object($consulta)){
        $nome =  $resultado->nome;
        
        }
    }
    
    // Método para selecionar as dicas pelo nome do nivel passado.        
    function selecionarDicas($nivel){
            $query = "SELECT a.dica, a.pontuacao FROM Dicas a, Questao b, Nivel c WHERE a.codQuestao = b.codQuestao AND b.codNivel = c.codNivel AND c.nome = '$nivel'";
            $res = mysql_query($query);
            while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
              //printf("ID: %s  Name: %s", $row[0], $row[1]);
            
        }
    }
    
    // Método para selecionar os Bonus pelo nome do nivel passado.
    function selecionarBonus($nivel){
         $query = "SELECT a.pergunta, a.resposta, a.pontuacao FROM Bonus a, Questao b, Nivel c WHERE a.codQuestao = b.codQuestao AND b.codNivel = c.codNivel AND nome = '$nivel'";
         $res = mysql_query($query);
         while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                //printf("ID: %s  Name: %s", $row[0], $row[1]);
         }    
    }
    
    
    // Método para inserir ranking, passando nome e pontuação.
    function inserirRanking($nome, $pontuacao, $nivel){
        $query = "INSERT INTO Ranking VALUES('$nome', '$nivel', '$pontuacao', now())";
        mysql_query($query);
    }
  
    
    
    
    } 
}
?>