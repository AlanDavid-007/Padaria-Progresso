<?php

namespace App\Entity;

use \App\Db\Database;
use \pDO;
use \App\Entity\Pedido;
use \App\Entity\Promocao;



// mudar dados

class Produto
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
     * descricao
     * @var text
     */
    public $descricao;

    /** 
     * quantidade
     * @var int
     */
    public $quantidade;

    /** 
     * tipo
     * @var varchar
     */
    public $tipo;

    /** 
     * pedido_id
     * @var int
     */
    public $pedido_id;

    /** 
     * promocoes_id
     * @var int
     */
    public $promocoes_id;

    /** 
     * Função para cadastrar a professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a professor no banco e retornar o ID
        $objDatabase = new Database('produtos');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'quantidade'=> $this->quantidade,
            'tipo' => $this->tipo,
            'pedido_id' => $this->pedido_id,
            'promocoes_id'=> $this->promocoes_id,
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

    public static function getProdutos($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('produtos');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(pDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getProduto($id)
    {

        $objDatabase = new Database('produtos');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('produtos');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('produtos');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'quantidade'=> $this->quantidade,
            'tipo' => $this->tipo,
            'pedido_id' => $this->pedido_id,
            'promocoes_id'=> $this->promocoes_id,
        ]);
    }
}
