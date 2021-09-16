<h1>Login</h1>

<?php $form = App\core\FORM\Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'pass'); ?>

<?php echo $form->field($model, 'email'); ?>
<button type="submit">Login</button>

<?php echo  $form::end(); ?>
<?php echo  $form::end(); ?>


