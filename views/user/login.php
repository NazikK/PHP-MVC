<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <h2>Вход на сайт</h2>
                    <form action="#" method="post">
                       <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>

</form>
                    </form>
                </div><!--/sign up form-->


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>