<?php
use yii\web\Session;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
$session = new Session;
$session->open();
$this->registerCssFile('../../css/menu.css');
?>
<div class="site-menu">
    <div class = "menu"></div>
    <div class = "title"><span style="font-weight:bold;">GOOD
    	<font face = "mr de haviland, cursive" style = "font-size: 145%">  to</font>
    		EAT
    	</span>
    </div>
    <div class = "words">
    	<p> - Shop with us -</p>
    </div>

    <div class="category ">
      <ul id="category" class="list-inline">
        <?foreach ($roots as $root):?>
        <li>
        <?echo Html::a(
          Html::encode("{$root->name}"),
           Url::to([ 'site/menu/', 'id' => Html::encode("{$root->id}")])
        )?>
         </li>
          <?endforeach?>
      </ul>
</div>

<div class="categname">
  <? foreach($categ as $r):?>
    <?= Html::encode("{$r->name}")?>
  <?endforeach?>
</div>

<div class="products">
  <ul class = "list-inline">
    <?foreach($prods as $prod):?>
      <li>
        <img src="<?= $prod->image?>" alt="" width="200px" />
        <b>$<?= Html::encode("{$prod->price}")?></b>
        <?= Html::encode("{$prod->name}")?>
      <div class="amount">
        <a class="minus" href="#">-</a>
        <input name = "field" onkeydown="return check_symbol(event)" value="1"/>
        <a class="plus" href="#">+</a>

          <? $form = ActiveForm::begin([
            'method' => 'get',
          ]); ?>
          <input type="submit" name="<?= $prod->id?>" value=""/>
          <?ActiveForm::end()?>
          <?
          if(isset($_GET["$prod->id"])){
            \Yii::$app->cart->put($prod, 1);
            header('Location: '.$_GET["id"]);
            exit;
          }?>
        </div>
    </li>
    <?endforeach?>
  </ul>
</div>

<div class="box">
  <div class="small-cart">
    <a href="#" class="show_popup" rel="cart_form"><img src="../../img/cart2.png" alt="cart"/></a>
  </div>
  <div class="itemsCount">
    <?= $itemsCount = \Yii::$app->cart->getCount();?>
  </div>
</div>

<div class="popup cart_form">
  <a href="#" class="close"><img src="../../img/remove.png" alt="" /></a>
  <h2>Products In Your Cart</h2>
  <ul class="positions">
  <?foreach(Yii::$app->cart->positions as $position):?>
    <li>
      <?= $position->name;?>
      <?= $position->getQuantity();?>
      <?= $position->price*$position->getQuantity()?>
    </li>
  <?endforeach?>
  $<?= \Yii::$app->cart->getCost();?>
</div>

<div id = "toTop"> <img src = "../../img/Move_to_the_next.png"> </div>
</div>
