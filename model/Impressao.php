<?php 

class Impressao {
    private $nome;
    private $quantidade;
    private $tipo;
    //private $turno; 
    //private $curso;
    private $ano;
    private $status; 
    private $data_necessita;
    private $lado; 
    private $id_usuario;   
    private $data_solicitacao;




    function getNome(){
        return $this->nome;
    }

    function getQuantidade(){
        return $this->quantidade;
    }

    function getTipo(){
        return $this->tipo; 
    }

    function getTurno(){
        return $this->turno; 
    }

    function getAno(){
        return $this->ano;
    }

    function getStatus(){
        return $this->status; 
    }

    function getCurso(){
        return $this->curso; 
    }
    
    function getData_necessita(){
        return $this->data_necessita;
    }
    function getLado(){
        return $this->lado;
    }
    function getId_usuario(){
        return $this->id_usuario;
    }

    function getData_solicitacao(){
        return $this->data_solicitacao; 
    }

/**Funções sets */
    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function setTurno($turno){
        $this->turno = $turno;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }

    function setAno($ano){
        $this->ano = $ano; 
    }

    function setStatus($status){
        $this->status = $status;
    }

    function setData_necessita($data_necessita){
        $this->data_necessita = $data_necessita; 
    }
    function setLado($lado){
        $this->lado = $lado;
    }

    function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setData_solicitacao($data_solicitacao){
        $this->data_solicitacao = $data_solicitacao;
    }
}
?>