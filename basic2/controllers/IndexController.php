<?php
namespace app\controllers;

use yii\web\Controller;

use app\models\Test;

class IndexController extends Controller
{
  public function actionIndex()
  {
    // echo "index/index";
    // $model = new Test;
    // $data = $model->find()->one();
    // return $this->render("index", array("row" => $data));
    // $this->layout = false;
    // return $this->render("index");
    $this->layout = "layout1";
    return $this->render("index");
  }
}