<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

  public function create($table, $array)
  {

      // Executa o insert..
      $this->db->insert($table, $array);

      // Retorna o ID da inserção..
      return this->db->insert_id()

  }
  
  public function retrieve($table, $where = NULL)
  {

    // Ajustando a clausula da pesquisa
    // caso ela tenha sido ajustada..
    if ($where) $this->db->where ($where);

    // Executando a query..
    $query = $this->db->get ($table);

    // Retornando os resultados...
    return $query->result_array();

  }

  public function update($table, $array, $where)
  {

      // Executa o update..
      $this->db->update($table, $array, $where);

      // Apenas para retornar..
      return TRUE;

  }

  public function delete($table, $where)
  {

    // Executa o delete
    $this->db->delete($table, $where);

    // Apenas para retornar..
    return TRUE;

  }

}
