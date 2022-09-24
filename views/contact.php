<?php

/** @var $this \app\core\View */

$this->title = "contact";

?>

    <form method="post" action="/contact">
        <div class="form-group">
            <label >subject</label>
            <input name="subject" type="text" class="form-control" >
        </div>

        <div class="form-group">
            <label >Email address</label>
            <input name="email" type="email" class="form-control" >
        </div>


        <div class="form-group">
            <label >body</label>
            <textarea name="body" class="form-control" ></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


