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
     * nota do feedback
     * @var int
     */
    public $nota;

    /** 
     * Comentario
     * @var text
     */
    public $comentario;

    /** 
     * feedback
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
        $objDatabase = new Database('feedback');
        $this->id = $objDatabase->insert([
            'nota' => $this->nota,
            'comentario' => $this->comentario,
            'cliente_id'=> $this->cliente_id,
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

    public static function getFeedbacks($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('feedback');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(pDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as professors do banco de dados

     *@params int $id
     *@return professor
     */

    public static function getFeedback($id)
    {

        $objDatabase = new Database('feedback');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('feedback');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('feedback');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nota' => $this->nota,
            'comentario' => $this->comentario,
            'cliente_id'=> $this->cliente_id,
        ]);
    }
}
