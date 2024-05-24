<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SalesChartController extends Controller
{
  //  // URL: .../index.php?r=
  public function actionPerRegion($year) {
    echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl . "</strong></p>";
    if ($year == "all") {
      echo " menampilkan semua chart";
    } else if ($year > 1980  && $year < 2025) {
      echo  "menampilkan chart tahun $year";
    } else {
      echo "chart tidak dapat di tampilkan";
    }
  }

}