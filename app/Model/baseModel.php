<?php

namespace app\Model;

abstract class baseModel
{
	protected $table = 'conteudo';

	public function __construct(\Pimple $container)
	{
		$this->db = $container['db'];
	}

	public function select(array $listaDados, $where = null)
	{
		$colunas = $this->setKeysTableSelect($listaDados);
		$where = (!is_null($where) ? $where : null);
		return "select $colunas from " . $this->table . $where;
	}

	protected function getKeysTable(array $listaDados)
	{
		return array_keys($listaDados);
	}

	protected function getValuesTable(array $listaDados)
	{
		return array_values($listaDados);
	}

	protected function setKeysTableSelect(array $colum)
	{
		return implode(",", $colum);
	}

}