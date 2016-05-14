<?php
namespace app\Model\Conteudo;
use app\Model\baseModel;

class conteudoModel extends baseModel
{
	public function conteudoQuemSomos()
	{
		$where = ' WHERE titulo = "quemsomos"';
		$sql = $this->select(['id', 'texto'], $where);
		return $this->db->fetchAssoc($sql);
	}
}