<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
/**
 * Job controller
 */
class JobController extends Controller
{
    public $layout='test_main.php';
    /**
     * @inheritdoc
     */
    public function actionJob_add()
    {
        return $this->render('job_add');
    }
}
?>