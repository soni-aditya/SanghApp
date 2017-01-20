<div class='col-lg-2 col-md-2 col-sm-2'>
	<h4 class='text-center'>
		<?= __('Actions') ?>
	</h3>
    <ul class="list-group">
        <li class="list-group-item"><?= $this->Html->link(__('New Post'), ['action' => 'create']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Admin Dashboard'), ['controller'=>'Admins','action' => 'index']) ?></li>
    </ul>
</div>
<div class='col-lg-10 col-md-10 col-sm-10' >
		<h1 class='text-center text-warning'>
			Notice Board
		</h1>
		<?php foreach($posts as $post):?>
		            <div class='well'>
		                <h3><?= h($post['title']) ?></h3>
		                <small><strong><?= h($post['created']->format(DATE_RFC850)); ?></strong></small>
		                
		                <p><?= $this->Text->truncate($post['body'],250,['ellipsis'=>'.......','exact'=>false]); ?> ..............</p>
		                <br>
		                <?= $this->Html->link('Read More','/posts/'.$post['id']) ?>
		                <hr>
						<?= $this->Form->postLink('delete',
													['action'=>'delete',$post['id']],
													['confirm'=>'Are you sure?',
														'class'=>'btn btn-danger pull-right']); ?>
						 <?= $this->Html->link('Edit Post',['action'=>'edit',$post['id']],['class'=>'btn btn-default']); ?>
		            </div>
		 <?php endforeach; ?>
</div>