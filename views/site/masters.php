<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.02.17
 * Time: 22:34
 */

use yii\helpers\Html;
use \yii\widgets\Pjax;

$this->title = 'Мастера';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row padding-bot">
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-0 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0">
        <p>
            <a class="text-inline" href="need-rem.html" role="button"><span class="lead">
              <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Зарегистрироваться как мастер
          </span></a>
        </p>
    </div>
</div>
<div class="row">
    <?php Pjax::begin(); ?>
    <div class="col-xs-12 col-xs-offset-0 col-sm-7 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
        <?php if (count($model['masters']) > 0) {
            foreach ($model['masters'] as $item) {
        ?>
        
        <div class="thumbnail">
            <div class="caption">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="http://rm.0x5.ru/images/user.png" style="width: 87px; height: 81px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $item['name'] ?><span class="glyphicon glyphicon-ok-sign" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Верифицирован"></span> <span class="glyphicon glyphicon-stats" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Premium"></span></h4>
                        <?= $item['bio'] ?>
                    </div>
                </div>
                <div class="media">
                    <p class="half-p">Рейтинг</p>
                    <ul class="stars">
                        <li><a href="#" class="full"></a></li>
                        <li><a href="#" class="full"></a></li>
                        <li><a href="#" class="full"></a></li>
                        <li><a href="#" class=""></a></li>
                        <li><a href="#" class=""></a></li>
                    </ul>
                    <p>
                        <button type="button" class="btn btn-md btn-primary">Предложить заказ</button>
                        <span class="btn btn-md pull-right">г.<?= \app\models\Regions::findOne($item['city'])['name'] ?></span>
                        <button type="button" class="btn btn-md btn-primary pull-right">Связаться</button>
                    </p>
                </div>
            </div>
        </div>

        <?php }} else { ?>
            Мастеров нет
        <?php } ?>
    </div>
    <div class="col-xs-12 col-xs-offset-0 col-sm-5 col-sm-offset-0 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
        <div class="">
            <h3 class="first">Регион</h3>
            <select class="selectpicker" title="Выберите регион" onchange="javascript:location.href = this.value;">
                <?php
                    foreach ($model['reg_items'] as $item) {
                        echo '<option value="http://localhost'.yii\helpers\Url::current(['region'=>$item['id']]).'">'.$item['name'].'</option>';
                    }

                ?>
            </select>
            <h3>Вид техники</h3>
            <div class="list-group">
                <?php
                    foreach ($model['tec_items'] as $item)  {
                        echo Html::a($item['name'], 'http://localhost'.yii\helpers\Url::current(['tech'=>$item['id']]), ['class' => 'list-group-item']);
                    }
                ?>
            </div>
        </div>
    </div>
    <?php Pjax::end(); ?>
</div>