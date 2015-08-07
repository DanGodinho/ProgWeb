<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'id_curso', 'ano_ingresso','nome','sexo'],'required','message'=>'Este campo é obrigatório'],
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer', 'message'=>'Digite apenas números!'],
            [['nome'], 'string', 'max' => 200],
            [['nome'],'match','pattern'=>'/^[A-Za-z]+$/u','message'=> 'Digite apenas letras!'],
            [['sexo'], 'string', 'max' => 1,],
            //['matricula', 'length' => 8], O código apresentava erro, mesmo seguindo o exemplo do slide.
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matrícula',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de Graduação',
            'ano_ingresso' => 'Ano Ingresso',
            // Não fiz muitas modificações !
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }
    
    public function afterFind() {
        
        $this->nome = ucwords(strtolower($this->nome));
        if($this->sexo == 'F'){
            $this->sexo = 'Feminino';
        }
        else if($this->sexo == 'M'){
            $this->sexo = 'Masculino';           
        }
        
      
        parent::afterFind();
    }
    
}
