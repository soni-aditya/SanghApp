<div class="well col-lg-2 col-md-2 col-md-2">
    <h3 class='text-center'><u><?= __('Actions') ?></u></h3>
    <ul class="list-group">
        <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
  </div>
<div class="col-lg-9 col-md-9 col-sm-9">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><h1 class='text-info '><?= __('Add User') ?></h1></legend>
        <?php
            echo $this->Form->input('email',array(
                                            'type'=>'email',
                                            'required'=>'required',
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('password',array(
                                            'type'=>'password',
                                            'required'=>'required',
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('first_name',array(
                                            'required'=>'required',
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('last_name',array(
                                            'required'=>'required',
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('phone',array(
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('address',array(
                                            'required'=>'required',
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('school',array(
                                            'required'=>'required',
                                            'class'=>'form-control'
                                                ));
            echo $this->Form->input('post',array(
                                            'required'=>'required',
                                            'type'=>'select',
                                            'class'=>'form-control',
                                            'empty'=>'Select some Post',
                                            'options'=>[
                                                    'Principal',
                                                    'Vice-Principal',
                                                    'Lecturer',
                                                    'Other'
                                                ]
                                                ));
            echo $this->Form->input('payment_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
