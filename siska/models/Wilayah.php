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
            'kode' => 'kode',
            'nama_wilayah' => 'Nama Wilayah',
        ];
    }

    public static function dropdown()
    {
        // Menggunakan kode sebagai pengganti id di ArrayHelper
        $sql = 'SELECT kode, CONCAT(nama_wilayah) AS wilayah FROM wilayah;';
        $result = yii::$app->db->createCommand($sql)->queryAll();
        return \yii\helpers\ArrayHelper::map($result, 'kode', 'wilayah'); // Ubah 'id' menjadi 'kode' dan 'agama' menjadi 'wilayah'
    }
}
