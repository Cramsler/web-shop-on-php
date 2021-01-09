<?php


namespace app\controllers;

use app\models\Good;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id)
    {
        $catGoods = new Good();
        $catGoods = $catGoods->getGoodsCategory($id);
        return $this->render('view', compact('catGoods'));
    }

    public function actionSearch()
    {
        $search = Yii::$app->request->get('search');
        $catGoods = new Good();
        $catGoods = $catGoods->getSearchResult($search);
        return $this->render('search', compact('catGoods', 'search'));
    }
}