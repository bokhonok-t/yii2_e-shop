<?
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<ul>
<? foreach ($bgs as $bg): ?>
<li>
  <?=  Html::encode("{$bg->background} {$bg->id}") ?>
</li>
<?endforeach;?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
