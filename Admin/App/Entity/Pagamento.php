<?php

namespace App\Entity;

use \App\Db\Database;
use \pDO;




// mudar dados

class Pagamento
{
    /** 
     * Identificador único 
     * @var integer
     */
    public $id;

    /** 
     * debito
     * @var float
     */
    public $debito;

    /** 
     * credito
     * @var float
     */
    public $credito;

    /** 
     * pix
     * @var float
     */
    public $pix;

     /** 
     * dinheiro
     * @var float
     */
    public $dinheiro;

     /** 
     * parcela
     * @var int
     */
    public $parcela;

    /** 
     * Função para cadastrar a professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a professor no banco e retornar o ID
        $objDatabase = new Database('pagamento');
        $this->id = $objDatabase->insert([
            'debito' => $this->debito,
            'credito' => $this->credito,
            'pix'=> $this->pix,
            'dinheiro' => $this->dinheiro,
            'parcela'=> $this->parcela,
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

    public static function getPagamentos($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('pagamento');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(pDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getPagamento($id)
    {

        $objDatabase = new Database('pagamento');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('pagamento');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('pagamento');

        return ($objDatabase)->update('id = ' . $this->id, [
            'debito' => $this->debito,
            'credito' => $this->credito,
            'pix'=> $this->pix,
            'dinheiro' => $this->dinheiro,
            'parcela'=> $this->parcela,
        ]);
    }
}
