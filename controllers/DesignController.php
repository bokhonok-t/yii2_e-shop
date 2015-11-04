<?
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Design;

class DesignController extends Controller{
  public function actionIndex(){
  $query = Design::find();
  $pagination = new Pagination([
    'defaultPageSize' => 3,
    'totalCount' =>$query->count(),
    ]);

    $bgs = $query->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

      return $this->render('index',[
        'bgs'  => $bgs,
        'pagination' => $pagination,
        ]);
}
}
?>
