<?php
?>
<div class="container">
    <h3>Register</h3>
    <?php  $form = \app\core\form\Form::begin('',"post") ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model,'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model,'lastname') ?>
        </div>
    </div>


    <?php echo $form->field($model,'email') ?>
    <?php echo $form->field($model,'password')->passwordField() ?>
    <?php echo $form->field($model,'passwordConfirm')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php \app\core\form\Form::end() ?>
<!--    <form method="post" action="/register">-->
<!--        <div class="form-group">-->
<!--            <label>name</label>-->
<!--            <input name="firstname" type="text" class="form-control">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label>lastname</label>-->
<!--            <input name="lastname" type="text" class="form-control">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label>Email address</label>-->
<!--            <input name="email" type="email" class="form-control">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label>passwrod</label>-->
<!--            <input name="password" type="password" class="form-control">-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="form-group">-->
<!--            <label>confirm password</label>-->
<!--            <input name="passwordConfirm" type="password" class="form-control">-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--        <button type="submit" class="btn btn-primary">Submit</button>-->
<!--    </form>-->
</div>

