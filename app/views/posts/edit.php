<?php require APP_ROOT . '/views/inc/header.php'?>
<a href="<?php echo URL_ROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
    <h2>Edit Post</h2>
    <p>Create a post with this form</p>
    <form action="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">
        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input
                type="text"
                class="form-control form-control-lg <?php echo (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>"
                name="title"
                value="<?php echo $data['title'] ?>
            ">
            <span class="invalid-feedback"><?php echo $data['title_error'] ?></span>
        </div>
        <div class="form-group">
            <label for="body">Body: <sup>*</sup></label>
            <textarea class="form-control form-control-lg <?php echo (!empty($data['body_error'])) ? 'is-invalid' : ''; ?>"
                      name="body"><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_error'] ?></span>
        </div>
        <input type="submit" value="Submit" class="btn btn-success">
    </form>
</div>
<?php require APP_ROOT . '/views/inc/footer.php'?>


