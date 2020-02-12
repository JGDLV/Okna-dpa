<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/libs.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body class="<?php if ($_SERVER['REQUEST_URI'] != '/') { echo 'inner'; } ?>">
<?php require_once 'header.php' ?>

<div class="main-content">

<?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
<?php require_once 'main-page.php'; ?>
<?php elseif ($_SERVER['REQUEST_URI'] == '/o-kompanii'): ?>
<?php require_once 'o-kompanii.php'; ?>
<?php else: ?>
  <div class="container">
    <jdoc:include type="component" />
  </div>
<?php endif; ?>
</div>
<?php require_once 'footer.php' ?>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
</body>
</html>
