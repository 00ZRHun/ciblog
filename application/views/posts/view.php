<?php include_once 'application/views/templates/header.php' ?>

<h2><?= $post['title']; ?></h2>
<small class="post-date"><?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?= $post['body']; ?>
</div>

<!-- <?php include_once 'application/views/templates/footer.php' ?>	 -->


