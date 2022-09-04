<?php
?>
<div class="container">
    <h3>Register</h3>
    <form method="post" action="/register">
        <div class="form-group">
            <label>name</label>
            <input name="name" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" class="form-control">
        </div>

        <div class="form-group">
            <label>passwrod</label>
            <input name="password" type="password" class="form-control">
        </div>


        <div class="form-group">
            <label>confirm password</label>
            <input name="confirmpassword" type="password" class="form-control">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

