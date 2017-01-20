<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
	public function initialize(array $config){
		$this->addBehavior('Timestamp');
	}
	public function validationDefault(Validator $validator){
		$validator
			->notEmpty('title')
			->RequirePresence('title')
			->notEmpty('body')
			->RequirePresence('body');

		return $validator;
	}
}
?>