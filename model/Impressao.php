<?php 

class Impressao {
    private $nome;
    private $quantidade;
    private $tipo;
    private $status; 
    private $data_necessita;
    private $lado; 
    private $id_usuario;   
    private $data_solicitacao;
    private $caminho;
    private $turma;  


    function getNome(){
        return $this->nome;
    }

    function getQuantidade(){
        return $this->quantidade;
    }

    function getTipo(){
        return $this->tipo; 
    }


    function getStatus(){
        return $this->status; 
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

    function getCaminho(){
        return $this->caminho; 
    }

     function getTurma(){
        return $this->turma; 
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


    function setCaminho($caminho){
        $this->caminho = $caminho;
    }

    function setTurma($turma){
        $this->turma = $turma;
    }    
}
?>