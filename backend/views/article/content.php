<?php
echo \yii\bootstrap\Html::a('返回',['article/index'],['class'=>'btn btn-info'])
?>
<hr>
<h1><?=$model->name ?></h1>
<hr>
<p><?=$detailmodel ->content ?></p>