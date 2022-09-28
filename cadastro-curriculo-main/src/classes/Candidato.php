<?php

require_once 'crud.php';

class Candidato extends Crud{

    protected $table = 'Candidato';
    private $nome;
    private $sobrenome;
    private $dtNascimento;
    private $genero;
    private $email;
    private $telefone;
    private $bio;
    private $formacao;
    private $cep;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $uf;
    private $numero;
    private $complemento;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setDtNascimento($dtNascimento){
        $this->dtNascimento = $dtNascimento;
    }

    public function getDtNascimento(){
        return $this->dtNascimento;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setBio($bio){
        $this->bio = $bio;
    }

    public function getBio(){
        return $this->bio;
    }

    public function setFormacao($formacao){
        $this->formacao = $formacao;
    }

    public function getFormacao(){
        return $this->formacao;
    }

    public function setCEp($cep){
        $this->cep = $cep;
    }

    public function getCep(){
        return $this->cep;
    }
    
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }
    
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setUF($uf){
        $this->uf = $uf;
    }

    public function getUF(){
        return $this->uf;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }
    
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }

    public function getComplemento(){
        return $this->complemento;
    }
    
    public function insert(){
        $sql = "INSERT $this->table (
                                        nome, 
                                        sobrenome, 
                                        dtNascimento,
                                        genero,
                                        email,
                                        telefone,
                                        bio,
                                        formacao,
                                        cep,
                                        logradouro,
                                        bairro,
                                        cidade,
                                        uf,
                                        numero,
                                        complemento 
                                    ) 
            INTO VALUES (
                            :Nome, 
                            :Sobrenome,
                            :dtNascimento,
                            :Genero,
                            :Email,
                            :Telefone,
                            :Bio,
                            idFormacao,
                            :CEP,
                            :Logradouro,
                            :Bairro,
                            :Cidade,
                            :UF,
                            :Numero,
                            :Complemento
                        )";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':Nome', $this->nome);
        $stmt->bindParam(':Sobrenome', $this->sobrenome);
        $stmt->bindParam(':dtNascimento', $this->dtNascimento);
        $stmt->bindParam(':Genero', $this->genero);
        $stmt->bindParam(':Email', $this->email);
        $stmt->bindParam(':Telefone', $this->telefone);
        $stmt->bindParam(':Bio', $this->bio);
        $stmt->bindParam(':Formacao', $this->formacao);
        $stmt->bindParam(':CEP', $this->cep);
        $stmt->bindParam(':Logradouro', $this->logradouro);
        $stmt->bindParam(':Bairro', $this->bairro);
        $stmt->bindParam(':Cidade', $this->cidade);
        $stmt->bindParam(':UF', $this->cidade);
        $stmt->bindParam(':Numero', $this->complemento);
        $stmt->bindParam(':Complemento', $this->complemento);
        return $smt->execute();
    }

}