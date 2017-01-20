<div class='col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2'>
		<h2 class='text-center'>Edit Post</h2>

		<?= $this->Form->create($post); ?>
			<?= $this->Form->input('title',array(
											'label'=>'Post Title',
											'class'=>'form-control'
									)); ?>
			<?= $this->Form->input('body',array(
											'label'=>'Post Body',
											'type'=>'textarea',
											'escape'=>false,		//To be able to enter html
											'class'=>'form-control'
									)); ?>
			<hr>
			<?= $this->Form->submit('Submit',array(
												'class'=>'btn btn-primary'
									)); ?>
		<?= $this->Form->end(); ?>
</div>