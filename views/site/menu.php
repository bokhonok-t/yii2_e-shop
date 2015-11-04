<?php
use yii\web\Session;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
$session = new Session;
$session->open();
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

    <div class="category">
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
        <input name = "field" onkeydown="return check_symbol(event)" value="100"/>
        <a class="plus" href="#">+</a>
        <input type="image" src="../../img/cart.png"/>
      </div>
    </li>
    <?endforeach?>
  </ul>
</div>
</div>
