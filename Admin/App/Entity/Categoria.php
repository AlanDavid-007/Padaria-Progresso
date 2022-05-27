<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Categoria
{
    /** 
     * Identificador único da Categoria
     * @var integer
     */
    public $id;

    /** 
     * Título da Categoria
     * @var string
     */
    public $nome;

    /** 
     * Título da Categoria
     * @var string
     */
    public $imagem;


    /** 
     * Função para cadastrar a Categoria no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a Categoria no banco e retornar o ID
        $objDatabase = new Database('categorias');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'imagem' =>$this->imagem,
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as Categorias do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getCategorias($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('categorias');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as Categorias do banco de dados

     *@params int $id
     *@return Categoria
     */

    public static function getCategoria($id)
    {

        $objDatabase = new Database('categorias');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir Categorias no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('categorias');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a Categoria no banco 
     * @return boolean
     */
    public function atualizar()
    {
        $objDatabase = new Database('categorias');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'imagem' =>$this->imagem,
        ]);
    }
}
