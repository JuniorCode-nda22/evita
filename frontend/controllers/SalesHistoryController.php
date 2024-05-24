<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SalesHistoryController extends Controller
{
    // URL: .../index.php?r=sales-history/quarterly&year=2024
    public function actionQuarterly($year)
    {
            echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl . "</strong></p>";
            echo "<p>Penjualan Q1 tahun $year adalah....</p>";
            echo "<p>Penjualan Q2 tahun $year adalah....</p>"; 
            echo "<p>Penjualan Q3 tahun $year adalah....</p>";
            echo "<p>Penjualan Q4 tahun $year adalah....</p>";
    }
}
