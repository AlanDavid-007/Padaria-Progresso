<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
use \App\Entity\Produto;
use \App\Entity\Categoria;



// mudar dados

class Pedido
{
    /** 
     * Identificador único 
     * @var integer
     */
    public $id;

    /** 
     * produto
     * @var float
     */
    public $obProdutos;
    
        /** 
     * categoria
     * @var float
     */
    public $obCategorias;

    /** 
     * valor
     * @var float
     */
    public $valor;

    /** 
     * aprovapedido
     * @var boolean
     */
    public $aprovapedido;

    /** 
     * feedback
     * @var date
     */
    public $data;

    /** 
     * valor_tele_entrega
     * @var float
     */
    public $valor_tele_entrega;

     /** 
     * quantidade
     * @var int
     */
    public $quantidade;
    
    /** 
     * Função para cadastrar a professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a professor no banco e retornar o ID
        $objDatabase = new Database('pedido');
        $this->id = $objDatabase->insert([
            'valor' => $this->valor,
            'aprovapedido' => $this->aprovapedido,
            'data'=> $this->data,
            'valor_tele_entrega' => $this->valor_tele_entrega,
            'quantidade' => $this->quantidade,
//             'categoria' => $this->categoria,
//             'nome' => $this->nome,
//             'preco' => $this->preco,
            'produto_id' => $this->produto_id,
//             'categoria_id' => $this->categoria_id,
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

    public static function getPedidos($where = null, $order = null, $limit = null)
    {
        $obProdutos = new Produto;
        $obCategorias = new Categoria;
        $objDatabase = new Database('pedido');

        $return = ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        $result = array();

        foreach ($return as $key => $value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['valor'] = $value->valor;
            $result[$key]['aprovapedido'] = $value->aprovapedido;
            $result[$key]['data'] = $value->data;
            $result[$key]['valor_tele_entrega'] = $value->valor_tele_entrega;
            $result[$key]['quantidade'] = $value->quantidade;
//             $result[$key]['categoria'] = $value->categoria;
//             $result[$key]['nome'] = $value->nome;
//             $result[$key]['preco'] = $value->preco;
            $result[$key]['produto_id'] = $obProdutos::getProduto($value->produto_id);
//             $result[$key]['categoria_id'] = $obCategorias::getCategoria($value->categoria_id);
        }
        return $result;
    }
    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getPedido($id)
    {

        $objDatabase = new Database('pedido');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('pedido');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('pedido');

        return ($objDatabase)->update('id = ' . $this->id, [
            'valor' => $this->valor,
            'aprovapedido' => $this->aprovapedido,
            'data'=> $this->data,
            'valor_tele_entrega' => $this->valor_tele_entrega,
            'quantidade' => $this->quantidade,
//             'categoria' => $this->categoria,
//             'nome' => $this->nome,
//             'preco' => $this->preco,
            'produto_id' => $this->produto_id,
//             'categoria_id' => $this->categoria_id,
        ]);
        
    }
}
