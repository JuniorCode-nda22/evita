<?php

namespace siska\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "fakultas".
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
     * Gets query for [[Prodis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdis()
    {
        return $this->hasMany(Prodi::class, ['fakultas_id' => 'id']);
    }

    /**
     * Returns an array suitable for use in a dropdown.
     *
     * @return array
     */
    public static function dropdown()
    {
        $models = self::find()->all();
        return ArrayHelper::map($models, 'id', 'nama_fakultas');
    }
}
