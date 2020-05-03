<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
	<h1><?php echo $post['title']; ?></h1>
	<small class="post-date"><?php echo $post['created_at']; ?></small><br>
	<?php echo $post['body']; ?>
	<br><br>
	<p><a class="btn btn-default" href="<?= site_url('/posts/'.$post['slug']); ?>">Read More</a></p>

<?php endforeach; ?>
