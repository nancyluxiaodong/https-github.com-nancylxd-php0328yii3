<?php
$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'username');
echo $form->field($model,'password')->passwordInput();
echo $form->field($model,'rememberMe')->checkbox();
echo \yii\bootstrap\Html::submitButton('登录',['class'=>'btn btn-success btn-sm']);
\yii\bootstrap\ActiveForm::end();