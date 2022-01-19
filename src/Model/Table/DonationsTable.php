<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donations Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\BelongsTo $Produtos
 * @property \App\Model\Table\UsuarioPadariasTable&\Cake\ORM\Association\BelongsTo $UsuarioPadarias
 * @property \App\Model\Table\UsuarioFamiliasTable&\Cake\ORM\Association\BelongsTo $UsuarioFamilias
 * @property \App\Model\Table\UsuarioInstituicaosTable&\Cake\ORM\Association\BelongsTo $UsuarioInstituicaos
 *
 * @method \App\Model\Entity\Donation newEmptyEntity()
 * @method \App\Model\Entity\Donation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Donation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Donation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('donations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Produtos', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('UsuarioPadarias', [
            'className' => 'Usuarios',
            'foreignKey' => 'usuario_padaria_id',
            'joinType' => 'INNER',

        ]);
        $this->belongsTo('UsuarioFamilias', [
            'className' => 'Usuarios',
            'foreignKey' => 'usuario_familia_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('UsuarioInstituicaos', [
            'className' => 'Usuarios',
            'foreignKey' => 'usuario_instituicao_id',
            'joinType' => 'LEFT',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->date('data_doacao')
            ->requirePresence('data_doacao', 'create')
            ->notEmptyDate('data_doacao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('produto_id', 'Produtos'), ['errorField' => 'produto_id']);
        $rules->add($rules->existsIn('usuario_padaria_id', 'UsuarioPadarias'), ['errorField' => 'usuario_padaria_id']);
        $rules->add($rules->existsIn('usuario_familia_id', 'UsuarioFamilias'), ['errorField' => 'usuario_familia_id']);
        $rules->add($rules->existsIn('usuario_instituicao_id', 'UsuarioInstituicaos'), ['errorField' => 'usuario_instituicao_id']);

        return $rules;
    }
}
