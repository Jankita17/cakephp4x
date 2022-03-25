<!DOCTYPE html>
<html lang="en">
<head>
	<title>NGDRS | Homepage</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <?= $this->Html->css(['../vendor/bootstrap/css/bootstrap.min','base', 'base-responsive', 'animate.min','slicknav.min','font-awesome.min','all-site-style','../vendor/fontawesome-free/css/all.min.css']) ?>
 
    <?= $this->fetch('css') ?>
</head>

<body>

    <?= $this->element('components/header'); ?> 
      
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
           
    <?= $this->element('components/footer'); ?>
    <?= $this->fetch('script') ?>
</body>
</html>