<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;



// echo "<pre>"; print_r($listaProfessor); echo "</pre>"; exit;


// mudar dados

class Cliente
{
    /** 
     * Identificador único da Curso
     * @var integer
     */
    public $id;

    /** 
     * nome do cliente
     * @var string
     */
    public $nome;

    /** 
     * senha do cliente
     * @var string
     */
    public $senha;

    /** 
     * cidade do cliente
     * @var string
     */
    public $cidade;

     /** 
     * define o telefone
     * @var bigint
     */
    public $telefone;

     /** 
     * Define o endereço
     * @var string
     */
    public $endereco;
    
    /** 
     * Define o email
     * @var string
     */
    public $email;

    

    /** 
     * Função para cadastrar a Curso no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;
        //Inserir a Curso no banco e retornar o ID
        $objDatabase = new Database('cliente');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'senha' => $this->senha,
            'cidade'=> $this->cidade,
            'telefone'=> $this->telefone,
            'endereco'=> $this->endereco,
            'email'=> $this->email,
            
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as Cursos do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getClientes($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('cliente');


        return ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as Cursos do banco de dados

     *@params int $id
     *@return Curso
     */

    public static function getCliente($id)
    {

        $objDatabase = new Database('cliente');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir Cursos no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('cliente');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a Curso no banco 
     * @return boolean
     */
    public function atualizar()
    {
        
        //Definir a data
        $this->data = date('Y-m-d');

        $objDatabase = new Database('cliente');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'senha' => $this->senha,
            'cidade'=> $this->cidade,
            'telefone'=> $this->telefone,
            'endereco'=> $this->endereco,
            'email'=> $this->email,
            
        ]);
    }
}
