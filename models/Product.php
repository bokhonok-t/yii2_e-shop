<?
namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord implements CartPositionInterface{
  use CartPositionTrait;
  public function getPrice(){
    return $this->price;
  }

  public function getId(){
    return $this->id;
  }
}
?>
