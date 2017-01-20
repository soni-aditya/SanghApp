<div class="well col-lg-2 col-md-2 col-md-2">
    <h3 class='text-center'><u><?= __('Actions') ?></u></h3>
    <ul class="list-group">
        <li class="list-group-item"><?= $this->Html->link(__('Admin Dashboard'), ['action' => 'home']) ?></li>
    </ul>
</div>
<div class="col-lg-6 col-md-6 col-md-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Edit Admin\'s Info') ?></legend>
        <?php
            echo $this->Form->input('password',array(
                                                'type'=>'password',
                                                'class'=>'form-control',
                                                'required'=>'required'
                                                ));
            echo $this->Form->input('firstname',array(
                                                'class'=>'form-control',
                                                'required'=>'required'
                                                ));
            echo $this->Form->input('lastname',array(
                                                'class'=>'form-control',
                                                'required'=>'required'
                                                ));
            echo $this->Form->input('phone',array(
                                                'class'=>'form-control',
                                                'required'=>'required'
                                                ));
            echo $this->Form->input('email',array(
                                                'class'=>'form-control',
                                                'required'=>'required'
                                                ));
        ?>
    </fieldset>
    <hr>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary col-lg-12 col-md-12 col-sm-12']) ?>
    <?= $this->Form->end() ?>
</div>
