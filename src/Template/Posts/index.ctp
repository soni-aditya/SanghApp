<div class="col-lg-2 col-md-2 col-sm-2">
      <ul class="list-group">
        <li class="list-group-item">
          <?= $this->Html->link('Members List',['controller'=>'Users','action'=>'display']); ?>
        </li>
        <li class="list-group-item">
          About
        </li>
        <li class="list-group-item">
          Administrative Panel
        </li>
        <li class="list-group-item">
          Admin Login
        </li>
      </ul>
</div>
<div class="col-lg-9 col-md-9 col-sm-9">
		<h1><strong>Notice Board</strong></h1>
		<?php foreach($posts as $post):?>
		            <div class='well'>
		                <h3><?= h($post['title']) ?></h3>
		                <small><strong><?= h($post['created']->format(DATE_RFC850)); ?></strong></small>
		                
		                <p><?= $this->Text->truncate($post['body'],200,['ellipsis'=>'.......','exact'=>false]); ?> ..............</p>
		                <hr>
		                <?= $this->Html->link('Read More',['controller'=>'Posts','action'=>'display',$post['id']]) ?>
              </div>
		 <?php endforeach; ?>
</div>