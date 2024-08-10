<?php

namespace siska\models;

use yii\helpers\ArrayHelper;
use Yii;

/**
 * Ini adalah kelas model untuk tabel "fakultas".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama_fakultas
 *
 * @property Prodi[] $prodis
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama_fakultas'], 'required'],
            [['kode'], 'string', 'max' => 10],
            [['nama_fakultas'], 'string', 'max' => 50],
            [['kode'], 'unique'],
            [['nama_fakultas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama_fakultas' => 'Nama Fakultas',
        ];
    }

    /**
     * Mengambil query untuk [[Prodis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdis()
    {
        return $this->hasMany(Prodi::class, ['fakultas_id' => 'id']);
    }

    /**
     * Mengembalikan array yang cocok untuk digunakan dalam dropdown.
     *
     * @return array
     */
    public static function dropdown()
    {
        $sql = 'SELECT id, nama_fakultas AS fakultas FROM fakultas';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'fakultas');
    }
}
