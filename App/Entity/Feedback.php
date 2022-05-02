<?php

namespace App\Entity;

use \App\Db\Database;
use \pDO;




// mudar dados

class professor
{
    /** 
     * Identificador único da professor
     * @var integer
     */
    public $id;

    /** 
     * Nome da professor
     * @var string
     */
    public $nome;

    /** 
     * Sobrenome do professor
     * @var string
     */
    public $sobrenome;

    /** 
     * CpF da professor
     * @var Bigint
     */
    public $cpf;


    /** 
     * Formação do professor
     * @var varchar
     */
    public $formação;

    /** 
     * Endereço do professor
     * @var varchar
     */
    public $endereco;

     /** 
     * tel da professor
     * @var Bigint
     */
    public $telefone;
    
     /** 
     * CpF da professor
     * @var varchar
     */
    public $email;

    /** 
     * Define a ordem do professor
     * @var int
     */
    public $ordem;

    /** 
     * Define se a professor está ativa (s or n)
     * @var string
     */
    public $status;

    

    /** 
     * Função para cadastrar a professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a professor no banco e retornar o ID
        $objDatabase = new Database('professores');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'cpf'=> $this->cpf,
            'formacao' => $this->formacao,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'ordem' => $this->ordem,
            'status' => $this->status,
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getProfessores($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('professores');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(pDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getProfessor($id)
    {

        $objDatabase = new Database('professores');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('professores');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('professores');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'cpf'=> $this->cpf,
            'formacao' => $this->formacao,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'ordem' => $this->ordem,
            'status' => $this->status,
        ]);
    }
}
