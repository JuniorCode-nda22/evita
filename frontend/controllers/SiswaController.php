<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SiswaController extends Controller
{
    // URL: .../index.php?r=siswa
    public function actionIndex()
    {
        echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl . "</strong></p>";
        echo "<p><strong>Ini adalah URL DEFAULT</strong></p>";
    }
     // URL: .../index.php?r=siswa/view&id=100
    public function actionView($id)
    {
        echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl . "</strong></p>";
        echo "<p>Siswa dengan nomer ID:<strong>$id</strong></p>";
    }
    
}
