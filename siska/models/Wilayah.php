<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property string $kode
 * @property string $nama_wilayah
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama_wilayah'], 'required'],
            [['kode'], 'string', 'max' => 13],
            [['nama_wilayah'], 'string', 'max' => 50],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama_wilayah' => 'Nama Wilayah',
        ];
    }
}
