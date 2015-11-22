<?
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yz\shoppingcart;
class Product extends ActiveRecord implements  \yz\shoppingcart\CartPositionInterface{
  use \yz\shoppingcart\CartPositionTrait;
  public function getPrice(){
    return $this->price;
  }

  public function getId(){
    return $this->id;
  }
}
?>
