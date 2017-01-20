<?php
$cakeDescription = 'My Sangh App';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>

    
</head>
<body>
<nav class="navbar navbar-default col-lg-12 col-md-12 col-sm-12">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-lg-8 col-sm-8 col-md-8">
      
      
      <span class="navbar-brand">
          <strong>
              मध्य प्रदेश माध्यमिक शिक्षक संघ, जबलपुर
          </strong>
      </span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=' col-lg-4 col-sm-4 col-md-4'>
      <ul class="nav navbar-nav pull-right">
        <li class="active">
            <?= $this->Html->link("Logout",['controller'=>'Admins','action'=>'logout']);  ?>
        </li>
        <li>
            <?= $this->Html->link("Settings",['controller'=>'Admins','action'=>'home']);  ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    <footer>
    </footer>
</body>
</html>
