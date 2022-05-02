<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
use \App\Entity\Professor;
use \App\Entity\Categoria;



// echo "<pre>"; print_r($listaProfessor); echo "</pre>"; exit;


// mudar dados

class Curso
{
    /** 
     * Objeto de professor
     * @var object
     */
    public $obProfessores;

    /** 
     * Objeto de professor
     * @var object
     */
    public $obCategorias;

    /** 
     * Identificador único da Curso
     * @var integer
     */
    public $id;

    /** 
     * Título da Curso
     * @var string
     */
    public $nome;

    /** 
     * Data da publicação da Curso
     * @var timestamp
     */
    public $data;

    /** 
     * palavra_chave da Curso
     * @var int
     */
    public $palavra_chave;

     /** 
     * define o valor do curso
     * @var float
     */
    public $valor;

     /** 
     * Define a ordem do curso
     * @var int
     */
    public $ordem;
    
    /** 
     * Define se a Curso está ativa (s or n)
     * @var string
     */
    public $status;

    

    /** 
     * Função para cadastrar a Curso no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;
        //Inserir a Curso no banco e retornar o ID
        $objDatabase = new Database('cursos');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'palavra_chave' => $this->palavra_chave,
            'valor'=> $this->valor,
            'ordem'=> $this->ordem,
            'professor'=> $this->professor,
            'categoria'=> $this->categoria,
            'data' => $this->data,
            'status' => $this->status,
            
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as Cursos do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getCursos($where = null, $order = null, $limit = null)
    {

        $obProfessores = new Professor;
        $obCategorias = new Categoria;
        $objDatabase = new Database('cursos');

        $return = ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
        $result = array();

        foreach ($return as $key => $value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['nome'] = $value->nome;
            $result[$key]['data'] = $value->data;
            $result[$key]['palavra_chave'] = $value->palavra_chave;
            $result[$key]['valor'] = $value->valor;
            $result[$key]['ordem'] = $value->ordem;
            $result[$key]['status'] = $value->status;
            $result[$key]['professor'] = $obProfessores::getProfessor($value->professor);
            $result[$key]['categoria'] = $obCategorias::getCategoria($value->categoria);
        }

        // echo "<pre>"; print_r($result); echo "</pre>"; exit;
        return $result;
    }

    /**
     * Método responsável por obter as Cursos do banco de dados

     *@params int $id
     *@return Curso
     */

    public static function getCurso($id)
    {

        $objDatabase = new Database('cursos');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir Cursos no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('cursos');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a Curso no banco 
     * @return boolean
     */
    public function atualizar()
    {
        
        //Definir a data
        $this->data = date('Y-m-d');

        $objDatabase = new Database('cursos');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'palavra_chave' => $this->palavra_chave,
            'valor'=> $this->valor,
            'ordem'=> $this->ordem,
            'professor'=> $this->professor,
            'categoria'=> $this->categoria,
            'data' => $this->data,
            'status' => $this->status,
        ]);
    }
}
