<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/create'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" id="" cols="30" rows="10" placeholder="Add Body"></textarea>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
