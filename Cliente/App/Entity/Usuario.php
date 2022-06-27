<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;




// mudar dados

class Usuario
{
    /** 
     * Identificador único 
     * @var integer
     */
    public $id;

    /** 
     * nome
     * @var varchar
     */
    public $nome;

    /** 
     * senha
     * @var varchar
     */
    public $senha;

    /** 
     * cargo
     * @var varchar
     */
    public $cargo;

     /** 
     * email
     * @var varchar
     */
    public $email;

    /** 
     * Função para cadastrar a professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a professor no banco e retornar o ID
        $objDatabase = new Database('usuario');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'ultimo_nome'=> $this->ultimo_nome,
            'senha' => $this->senha,
            'email'=> $this->email,
            'cidade'=> $this->cidade,
            'telefone'=> $this->telefone,
            'cpf'=> $this->cpf,
            'endereco'=> $this->endereco,
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

    public static function getUsuarios($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('usuario');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(pDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getUsuario($id)
    {

        $objDatabase = new Database('usuario');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('usuario');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('usuario');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'ultimo_nome'=> $this->ultimo_nome,
            'senha' => $this->senha,
            'email'=> $this->email,
            'cidade'=> $this->cidade,
            'telefone'=> $this->telefone,
            'cpf'=> $this->cpf,
            'endereco'=> $this->endereco,
        ]);
    }
}
