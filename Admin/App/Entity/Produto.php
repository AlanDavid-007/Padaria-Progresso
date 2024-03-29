<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
use \App\Entity\Pedido;
// use \App\Entity\Promocao;
use \App\Entity\Categoria;
use \App\Entity\Feedback;



// mudar dados

class Produto
{
    /** 
     * Identificador único 
     * @var integer
     */
    public $id;

    /** 
     * Identificador único 
     * @var integer
     */
    public $obCategorias;

    /** 
     * Identificador único 
     * @var integer
     */
     public $obPedidos;

    /** 
     * Identificador único 
     * @var integer
     */
    // public $obPromocoes;

    /** 
     * Identificador único 
     * @var integer
     */
    public $obFeedbacks;


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
     * preco
     * @var int
     */
    public $preco;

    /** 
     * tipo
     * @var varchar
     */
    public $tipo;

    /** 
     * imagem
     * @var blob
     */
    public $imagem;

    /** 
     * link
     * @var varchar
     */
    public $link;
    /** 
     * pedido_id
     * @var int
     */
    // public $pedido_id;

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
            'quantidade' => $this->quantidade,
            'tipo' => $this->tipo,
            'preco' => $this->preco,
            // 'imagem' => $this->imagem,
            'link' => $this->link,
            // 'pedido_id' => $this->pedido_id,
            // 'promocoes_id' => $this->promocoes_id,
        ]);
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

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
        $obCategorias = new Categoria;
        $obFeedbacks = new Feedback;
        $obPedidos = new Pedido;
        // $obPromocoes = new Promocao;
        $objDatabase = new Database('produtos');


        $return = ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        $result = array();

        foreach ($return as $key => $value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['nome'] = $value->nome;
            $result[$key]['descricao'] = $value->descricao;
            $result[$key]['quantidade'] = $value->quantidade;
            $result[$key]['link'] = $value->link;
            $result[$key]['preco'] = $value->preco;
            // $result[$key]['feedbacks'] = $obFeedbacks::getFeedback($value->feedbacks);
            $result[$key]['tipo'] = $obCategorias::getCategoria($value->tipo);
            // $result[$key]['imagem'] = $value->imagem;
            //  $result[$key]['pedido_id'] = $obPedidos::getPedido($value->pedido_id);
            // $result[$key]['promocoes_id'] = $obPromocoes::getPromocao($value->promocoes_id);
        }
        // echo "<pre>"; print_r($result); echo "</pre>"; exit;
        return $result;
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
            'quantidade' => $this->quantidade,
            'tipo' => $this->tipo,
            'preco' => $this->preco,
            // 'imagem' => $this->imagem,
            'link' => $this->link,
            // 'pedido_id' => $this->pedido_id,
            // 'promocoes_id' => $this->promocoes_id,
        ]);
    }
}
