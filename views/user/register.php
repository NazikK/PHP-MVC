<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            
                
                <?php if ($result): ?>
     
          <p>Вітаю ви зреєструвалися!.Приємних покупок</p>
   

                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                  <div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Electronic</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal"  method="POST" action="#">
						
						<div class="form-group">
							<label   class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label   class="cols-sm-2 control-label" >Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						

					<div class="form-group">
							<label  class="cols-sm-2 control-label">Phone</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone"  value="<?php echo $phonee; ?>" placeholder="Enter your Phone"/>
								</div>
							</div>
						</div>
						
							<div class="form-group">
							<label  type="date" name="date"  class="cols-sm-2 control-label">Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="data" id="data" value="<?php echo $datee; ?>"  placeholder="Enter your date"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label  class="cols-sm-2 control-label" >Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password"  value="<?php echo $password; ?>"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

					

						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="form-group " class="login-register">
				        
				         </div>
					</form>
				</div>
			</div>
		</div>
	   
                <?php endif; ?>
                <br/>
                <br/>
      </div>
         </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>




