<?php

namespace App\Entity;

use \App\Db\Database;
use \pDO;
use \App\Entity\Pagamento;
use \App\Entity\Usuario;
use \App\Entity\Cliente;



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
    public $obPagamentos;

    /** 
     * valor
     * @var float
     */
    public $obUsuarios;

    /** 
     * valor
     * @var float
     */
    public $obClientes;

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
        $obClientes = new Cliente;
        $obPagamentos = new Pagamento;
        $obUsuarios = new Usuario;
        $objDatabase = new Database('pedido');

        $return = ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        $result = array();

        foreach ($return as $key => $value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['valor'] = $value->valor;
            $result[$key]['aprovapedido'] = $value->aprovapedido;
            $result[$key]['descricao'] = $value->descricao;
            $result[$key]['data'] = $value->data;
            $result[$key]['valor_tele_entrega'] = $value->valor_tele_entrega;
            $result[$key]['pagamento_id'] = $obPagamentos::getPagamento($value->pagamento_id);
            $result[$key]['usuario_id'] = $obUsuarios::getUsuario($value->usuario_id);
            $result[$key]['cliente_id'] = $obClientes::getCliente($value->cliente_id);
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
            'descricao' => $this->descricao,
            'valor_tele_entrega' => $this->valor_tele_entrega,
            'pagamento_id'=> $this->cliente_id,
            'usuario_id' => $this->usuario_id,
            'cliente_id' => $this->cliente_id,
        ]);
    }
}
