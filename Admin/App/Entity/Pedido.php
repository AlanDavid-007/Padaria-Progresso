<?php

namespace App\Entity;

use \App\Db\Database;
use \pDO;
use \App\Db\Pagamento;
use \App\Db\Usuario;
use \App\Db\Cliente;



// mudar dados

class Pedido
{
    /** 
     * Identificador único 
     * @var integer
     */
    public $id;

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
     * nota do feedback
     * @var text
     */
    public $descricao;

    /** 
     * valor_tele_entrega
     * @var float
     */
    public $valor_tele_entrega;

     /** 
     * pagamento_id
     * @var int
     */
    public $pagamento_id;

     /** 
     *usuario_id
     * @var int
     */
    public $usuario_id;

    /** 
     * cliente_id
     * @var int
     */
    public $cliente_id;

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
            'descricao' => $this->descricao,
            'valor_tele_entrega' => $this->valor_tele_entrega,
            'pagamento_id'=> $this->cliente_id,
            'usuario_id' => $this->usuario_id,
            'cliente_id' => $this->cliente_id,
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

        $objDatabase = new Database('pedido');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(pDO::FETCH_CLASS, self::class);
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
            'descricao' => $this->descricao,
            'valor_tele_entrega' => $this->valor_tele_entrega,
            'pagamento_id'=> $this->cliente_id,
            'usuario_id' => $this->usuario_id,
            'cliente_id' => $this->cliente_id,
        ]);
    }
}
