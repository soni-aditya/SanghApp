<div class='col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4'>
	<br><br><br>
	<h1 class='text-center text-danger'>Login</h1>
	<div class='well'>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email',array('type'=>'email','class'=>'form-control'));?>
			<?= $this->Form->input('password',array('class'=>'form-control','type'=>'password')); ?>
			<hr>
			<?= $this->Form->button('Login',array('class'=>'btn btn-success col-lg-12 col-md-12 col-sm-12')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>