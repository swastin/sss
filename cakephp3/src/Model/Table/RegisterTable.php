<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class RegisterTable extends Table
{

	public function initialize(array $config)
	{
		parent::initialize($config);

		$this->table('register');
		$this->displayField('id');
		$this->primaryKey('id');

		$this->addBehavior('Timestamp');
	}
	
}
