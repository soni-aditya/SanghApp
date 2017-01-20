<br>
<hr>
<h1 class='text-center text-warning'>Hello Admin !	Welcome to the Control Pannel</h1>
<hr>
<h4 class="text-center col-ld-8 col-md-8 col-sm-8 col-ld-offset-2 col-md-offset-2 col-sm-offset-2">Here you can edit,create and delete the users information and can also do the work to creating new posts for the Notice Board</h4>
<br><br><br><br><br><br><br>
<div class='col-lg-12 col-md-12 col-sm-12'>
    <div class='col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1'>
        <?=
            $this->Html->link(
                $this->Html->image("users.png", ["alt" => "Brownies",'class'=>'img-responsive']),
                ['controller'=>'Users','action'=>'index'],
                ['escape' => false,]
            );
        ?>
    </div>
    <div class='col-lg-4 col-md-4 col-sm-4 col-lg-offset-3 col-md-offset-3 col-sm-offset-3'>
        <?=
            $this->Html->link(
                $this->Html->image("notices.jpg", ["alt" => "Brownies",'class'=>'img-responsive']),
                ['controller'=>'Posts','action'=>'home'],
                ['escape' => false,]
            );
        ?>
    </div>
</div>