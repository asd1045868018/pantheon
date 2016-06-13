<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\session;
class IndexController extends Controller
{
    public $layout='test_main.php';
    //首页
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $admin_id=$session->get('admin_id');
        
        return $this->render('index',['admin_id'=>$admin_id]);
    }

}
?>