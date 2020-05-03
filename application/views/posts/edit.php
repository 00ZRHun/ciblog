<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?= $post['id'] ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?= $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" cols="30" rows="10" placeholder="Add Body"><?= $post['body']; ?></textarea>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
