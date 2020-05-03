<?php include_once 'application/views/templates/header.php' ?>

<h2><?= $post['title']; ?></h2>
<small class="post-date"><?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?= $post['body']; ?>
</div>

<hr>

<a style="float: left" class="btn btn-default pull-left" href="<?= base_url(); ?>posts/edit/<?= $post['slug']; ?>">Edit</a>
<!-- <a class="btn btn-default pull-left" href="posts/edit/<?= $post['id']; ?>">Edit</a> -->

<?= form_open('posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>



<!-- <?php include_once 'application/views/templates/footer.php' ?>	 -->
