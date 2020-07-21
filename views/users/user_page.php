<?php include 'header.php'; ?>
<div class="container" >
	<div class="row">
		<div class="col-xl-6 col-md-12" >
			<img src="<?= base_url('Assets/images/16th.svg') ?>" class="img-fluid">
		</div>
		<div class="col-xl-6 col-md-12 p-5 mt-5 ">
			
				<?php echo form_open('Users_controller/ulogin') ?>
				<div class="form-group">
			    <label for="Username">Username </label>
			    <?php echo form_input(['type'=>'text','class'=>'form-control w-75','id'=>'username','aria-describedby'=>'username','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')])
			    ?>
			  </div>
			  <div class="form-group">
			    <label for="Password">Password</label>
			    <?php echo form_password(['class'=>'form-control w-75','id'=>'password','aria-describedby'=>'Password','placeholder'=>'Enter Password','name'=>'password'])
			    ?>
			  </div>
			  <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
			
		</div>
	</div>
</div>