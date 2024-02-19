<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; 
?>

<?php  

   if(Yii::$app->session->hasFlash('success')){
      echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>"; 
   }

?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model,'name'); ?>      
<?php echo $form->field($model,'email'); ?>  

<br>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>  