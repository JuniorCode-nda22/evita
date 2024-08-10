<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "status_dosen".
 *
 * @property int $id
 * @property string $status
 */
class StatusDosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
        ];
    }

    /**
     * Returns an array suitable for use in a dropdown.
     *
     * @return array
     */
    public static function dropdown()
    {
        $sql = 'SELECT id, status AS status_dosen FROM status_dosen';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return \yii\helpers\ArrayHelper::map($result, 'id', 'status_dosen');
    }
}
