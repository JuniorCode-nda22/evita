<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "universitas".
 *
 * @property int $id
 * @property string $nama_universitas
 */
class Universitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'universitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_universitas'], 'required'],
            [['nama_universitas'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_universitas' => 'Nama Universitas',
        ];
    }
}
