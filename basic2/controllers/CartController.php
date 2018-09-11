<?php

namespace app\controllers;

use yii\web\Controller;

class CartController extends Controller
{
  public function actionIndex()
  { $this->layout = false;
    $this->layout = "layout2";
    return $this->render("index");
  }
}