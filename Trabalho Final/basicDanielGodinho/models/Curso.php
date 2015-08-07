<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $id
 * @property string $sigla
 * @property string $nome
 *
 * @property Aluno[] $alunos
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','sigla','nome'],'required','message'=>'Este campo é obrigatório'],
            [['id'], 'required'],
            [['id'], 'integer','message'=>'Digite apenas números!'],
            [['sigla'], 'string', 'max' => 4],
            [['nome'], 'string', 'max' => 50],
            //Poucas modificações
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sigla' => 'Sigla do Curso',
            'nome' => 'Nome do Curso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['nome' => 'id']);
    }
}
