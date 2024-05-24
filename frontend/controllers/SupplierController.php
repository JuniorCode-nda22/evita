<?php

namespace frontend\controllers;

class SupplierController extends \yii\web\Controller
{
    public function actionView($id)
    {
        return $this->render('view', ['id'=> $id]);
    }

}
