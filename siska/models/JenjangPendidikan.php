<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "jenjang_pendidikan".
 *
 * @property int $id
 * @property string $jenjang
 */
class JenjangPendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenjang_pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenjang'], 'required'],
            [['jenjang'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenjang' => 'Jenjang',
        ];
    }
}
