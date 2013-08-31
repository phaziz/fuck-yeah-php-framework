<?php require_once 'header.php'; ?>
<body>
<div class="container margin-top-50">        
<div class="center">
<p><a href="<?php echo _BASE_URL; ?>" title="phaziz.com Homepage"><img src="<?php echo _BASE_URL; ?>Templates/assets/pix/phaziz.png" width="100" height="100" alt="<?php echo $_TITLE; ?>" /></a></p>
</div>
<div class="main_content_news margin-top-50">                
<?php if($CONTENT){echo $CONTENT;} else {echo 'Ups! No content... sorry!';} ?>
</div>
</div><!-- EOF CONTAINER -->
<?php require_once 'news-footer.php'; ?>
</body>
</html>