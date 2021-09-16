<?php $form = App\core\FORM\Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'firstname'); ?>
<?php echo $form->field($model, 'lastname'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'pass'); ?>
<?php echo $form->field($model, 'cpass'); ?>
<button type="submit">create account</button>

<?php echo  $form::end(); ?>


