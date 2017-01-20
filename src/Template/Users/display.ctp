<div class="col-lg-12 col-md-12 col-sm-12">
    <h1 class='text-danger text-center'><?= __('Users') ?></h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= $this->Number->format($user->phone) ?></td>
                <td><?= h($user->school) ?></td>
                <td><?= h($user->post) ?></td>
                <td>
                    <?php 
                        if($user->payment_status==1){
                    ?>
                            <h4 class='text-success'><strong>PAID</strong></h4>
                    <?php
                        }
                        else{
                    ?>
                            <h4 class='text-danger'><strong>UN-PAID</strong></h4>
                    <?php
                        }
                    ?>
                </td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
