<?php 

class Usuario {
    private $id_usuario;
    private $nome;
    private $email;
    private $matricula;
    private $senha;
    private $tipo;

    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getMatricula()
    {
        return $this->matricula;
    }

    function getTipo()
    {
        return $this->tipo;
    }


    function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}
