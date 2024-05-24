<?php

use Yii\helpers\Html;

$this->title='siswa';
$this->params['breadcrumb']=$this->title;

?>
<div>
<p>Ini URL: <strong>  <?=Yii::$app->request->absoluteUrl ?></strong></p>
      <p>Siswa dengan nomer ID:<strong><?= $id ?></strong></p>
      <ul>
        <li>NISN : <strong><?= $model->nisn?></strong></li>
        <li>Nama Lengkap : <strong><?= $model->namaLengkap?></strong></li>
        <li>Jenis Kelamin: <strong><?= $model->jenisKelamin?></strong></li>
      </ul>
</div>
