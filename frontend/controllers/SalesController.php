<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SalesController extends Controller
{
    // URL: .../index.php?r=sales/total-sales
    public function actionTotalSales()
    {
        echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl . "</strong></p>";
    }    
}
