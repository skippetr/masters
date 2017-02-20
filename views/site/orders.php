<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.02.17
 * Time: 22:41
 */

use yii\helpers\Html;

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row padding-bot">
        <div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-0 col-md-9 col-md-offset-0 col-lg-8 col-lg-offset-0">
          <!--<p>
             <a class="text-inline" href="need-rem.html" role="button"><span class="lead">
Оставить заявку на ремонт <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
          </span></a>&nbsp;
             <a class="text-inline" href="spares-order.html" role="button"><span class="lead">
Оставить заявку на запчасть <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
          </span></a>
          </p>-->
        </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
              <div class="thumbnail">
                  <div class="caption">
                    <h4>Заменить подшипники + сальник</h4>
                    <p>Стиральная машинка lg e1091</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> <a class="open-map" href="#">г.Самара, Промышленный район, ул.Московское шоссе 131</a></p>
                    <p class="p-for-map" style="display:none;">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Ho60XGB-iaVDjFYF7aNtky1k6EjRxL0x&amp;width=100%&amp;height=240&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                    </p>
                    <p class="text-right">Техника: стиральная машина</p>
                    <button type="button" class="btn btn-md btn-primary">Принять заявку</button>
                    <button type="button" class="btn btn-md btn-primary pull-right">Подробнее</button>
                  </div>
              </div>
              <div class="thumbnail">
                  <div class="caption">
                    <h4>Заменить тэн</h4>
                    <p>samsung f813g</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> <a class="open-map" href="#">г.Самара, Промышленный район, ул.Фадеева 46</a></p>
                    <p class="p-for-map" style="display:none;">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Ho60XGB-iaVDjFYF7aNtky1k6EjRxL0x&amp;width=100%&amp;height=240&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                    </p>
                    <p class="text-right">Техника: стиральная машина</p>
                    <button type="button" class="btn btn-md btn-primary">Принять заявку</button>
                    <button type="button" class="btn btn-md btn-primary pull-right">Подробнее</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
              <div class="">
                <h3 class="first">Город:</h3>
                <select class="selectpicker" title="Выберите город" >
                  <option>Самара</option>
                  <option>Новгород</option>
                  <option>Москва</option>
                </select>
                  <h3>Вид техники</h3>
                  <ul class="lst-checksboxs">
                      <li>
                          <label for="inlineCheckbox1" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox1" value="option1">Стиральные и сушильные машины:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide" >
                              <li>
                                  <label for="inlineCheckbox11" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox11" value="option1">Стиральные машины</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox12" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox12" value="option2">Сушильные машины</label>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <label for="inlineCheckbox2" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox2" value="option3">Холодильники и морозильники:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide">
                              <li>
                                  <label for="inlineCheckbox21" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox21" value="option4">Холодильники</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox22" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox22" value="option5">Морозильники</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox23" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox23" value="option6">Винные шкафы</label>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <label for="inlineCheckbox3" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox3" value="option7">Пылесосы</label>
                      </li>
                      <li>
                          <label for="inlineCheckbox4" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox4" value="option8">Телевизоры</label>
                      </li>
                      <li>
                          <label for="inlineCheckbox5" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox5" value="option9">Крупная бытовая техника:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide">
                              <li>
                                  <label for="inlineCheckbox51" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox51" value="option10">Газовые плиты</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox52" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox52" value="option11">Электрические плиты</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox53" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox53" value="option12">Микроволновые печи</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox54" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox54" value="option13">Посудомоечные машины</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox55" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox55" value="option14">Духовые шкафы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox56" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox56" value="option15">Панели газовые и электрические</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox57" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox57" value="option16">Вытяжки</label>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <label for="inlineCheckbox6" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox6" value="option17">Мелкая бытовая техника:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide">
                              <li>
                                  <label for="inlineCheckbox61" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox61" value="option18">Кухонные машины</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox62" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox62" value="option19">Электрочайники</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox63" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox63" value="option20">Мультиварки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox64" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox64" value="option21">Мясорубки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox65" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox65" value="option22">Миксеры и блендеры</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox66" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox66" value="option23">Хлебопечки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox67" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox67" value="option24">Соковыжималки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox68" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox68" value="option25">Кухонные комбайны</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox69" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox69" value="option26">Кофемашины</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox610" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox610" value="option27">Кофеварки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox611" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox611" value="option28">Кофемолки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox612" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox612" value="option29">Аэрогрили</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox613" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox613" value="option30">Блендеры</label>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <label for="inlineCheckbox7" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox7" value="option31">Климатическая техника:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide">
                              <li>
                                  <label for="inlineCheckbox71" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox71" value="option32">Обогревательные приборы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox72" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox72" value="option33">Тепловентиляторы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox73" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox73" value="option34">Конвекторы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox74" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox74" value="option35">Радиаторы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox75" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox75" value="option36">Электрокамины</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox76" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox76" value="option37">Увлажнители и очистители воздуха</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox77" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox77" value="option38">Водонагреватели</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox78" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox78" value="option39">Кондиционеры</label>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <label for="inlineCheckbox8" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox8" value="option40">Уход за одеждой и домом:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide">
                              <li>
                                  <label for="inlineCheckbox81" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox81" value="option41">Швейные машины</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox82" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox82" value="option42">Отпариватели</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox83" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox83" value="option43">Утюги</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox84" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox84" value="option44">Парогенераторы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox85" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox85" value="option45">Оверлок</label>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <label for="inlineCheckbox9" class="checkbox-outline"><input class="maincheck" type="checkbox" id="inlineCheckbox9" value="option46">Товары для ухода за собой:</label><i class="glyphicon glyphicon-plus plus"></i>
                          <ul class="lst-checksboxs hide">
                              <li>
                                  <label for="inlineCheckbox91" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox91" value="option47">Фены и фен-щётки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox92" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox92" value="option48">Выпрямители</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox93" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox93" value="option49">Электрощипцы и плойки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox94" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox94" value="option50">Машинки для стрижки</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox95" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox95" value="option51">Фотоэпиляторы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox96" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox96" value="option52">Эпиляторы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox97" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox97" value="option53">Электробритвы</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox98" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox98" value="option54">Лампы для сушки гель-лаков</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox85" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox85" value="option55">Для ухода за ногами</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox85" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox85" value="option56">Ирригаторы и зубные центры</label>
                              </li>
                              <li>
                                  <label for="inlineCheckbox85" class="checkbox-outline"><input type="checkbox" id="inlineCheckbox85" value="option57">Массажёры</label>
                              </li>
                          </ul>
                      </li>
                  </ul>

                  <!--<div class="list-group">
                    <a href="#" class="list-group-item">
                      <label class="checkbox-outline"><input type="checkbox" id="inlineCheckbox1" value="option1">Стиральная машина</label>
                    </a>
                    <a href="#" class="list-group-item"><label class="checkbox-outline"><input type="checkbox" id="inlineCheckbox2" value="option2">Водонагреватель</label></a>
                    <a href="#" class="list-group-item"><label class="checkbox-outline"><input type="checkbox" id="inlineCheckbox3" value="option3">Холодильник</label></a>
                    <a href="#" class="list-group-item"><label class="checkbox-outline"><input type="checkbox" id="inlineCheckbox4" value="option4">Посудомойка</label></a>
                  </div>-->
              </div>
           </div>
      </div>