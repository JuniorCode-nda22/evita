<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama_prodi
 * @property int $fakultas_id
 *
 * @property Fakultas $fakultas
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama_prodi', 'fakultas_id'], 'required'],
            [['fakultas_id'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['nama_prodi'], 'string', 'max' => 50],
            [['kode'], 'unique'],
            [['nama_prodi'], 'unique'],
            [['fakultas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::class, 'targetAttribute' => ['fakultas_id' => 'id']],
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
            'nama_prodi' => 'Nama Prodi',
            'fakultas_id' => 'Fakultas ID',
        ];
    }

    /**
     * Gets query for [[Fakultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultas()
    {
        return $this->hasOne(Fakultas::class, ['id' => 'fakultas_id']);
    }
}
