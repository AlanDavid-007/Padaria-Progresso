<?php

namespace App\Entity;

use \App\Db\Database;
use \pDO;
use \App\Entity\Pedido;
use \App\Entity\Pagamento;
use \App\Entity\Usuario;
use \App\Entity\Cliente;



// mudar dados

class Promocao
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
    public $obPedidos;

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
     * desconto
     * @var float
     */
    public $desconto;

     /** 
     * dataInicio
     * @var date
     */
    public $dataInicio;

    /** 
     *dataTermino
     * @var date
     */
    public $dataTermino;

    /** 
     * pedido_id
     * @var int
     */
    public $pedido_id;

     /** 
     * pedido_pagamento_id
     * @var int
     */
    public $pedido_pagamento_id;

    /** 
     * pedido_usuario_id
     * @var int
     */
    public $pedido_usuario_id;

    /** 
     * pedido_cliente_id
     * @var int
     */
    public $pedido_cliente_id;

    /** 
     * Função para cadastrar a professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a professor no banco e retornar o ID
        $objDatabase = new Database('promocoes');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'desconto'=> $this->desconto,
            'dataInicio' => $this->dataInicio,
            'dataTermino' => $this->dataTermino,
            'pedido_id'=> $this->pedido_id,
            'pedido_pagamento_id' => $this->pedido_pagamento_id,
            'pedido_usuario_id' => $this->pedido_usuario_id,
            'pedido_cliente_id'=> $this->pedido_cliente_id,
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

    public static function getPromocoes($where = null, $order = null, $limit = null)
    {
        $obPedidos = new Pedido;
        $obClientes = new Cliente;
        $obPagamentos = new Pagamento;
        $obUsuarios = new Usuario;
        $objDatabase = new Database('pedido');

        $return = ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        $result = array();

        foreach ($return as $key => $value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['nome'] = $value->nome;
            $result[$key]['descricao'] = $value->descricao;
            $result[$key]['desconto'] = $value->desconto;
            $result[$key]['dataInicio'] = $value->dataInicio;
            $result[$key]['dataTermino'] = $value->valor_tele_entrega;
            $result[$key]['pedido_id'] = $obPedidos::getPedido($value->pedido_id);
            $result[$key]['pagamento_id'] = $obPagamentos::getPagamento($value->pagamento_id);
            $result[$key]['usuario_id'] = $obUsuarios::getUsuario($value->pedido_id);
            $result[$key]['cliente_id'] = $obClientes::getCliente($value->cliente_id);
        }
        return $result;
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getPromocao($id)
    {

        $objDatabase = new Database('promocoes');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('promocoes');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('promocoes');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'desconto'=> $this->desconto,
            'dataInicio' => $this->dataInicio,
            'dataTermino' => $this->dataTermino,
            'pedido_id'=> $this->pedido_id,
            'pedido_pagamento_id' => $this->pedido_pagamento_id,
            'pedido_usuario_id' => $this->pedido_usuario_id,
            'pedido_cliente_id'=> $this->pedido_cliente_id,
        ]);
    }
}
