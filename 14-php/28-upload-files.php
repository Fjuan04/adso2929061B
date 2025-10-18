<?php 
    $title       = '28- Upload Files';
    $description = 'Moves the files from /tmp to the given TO directory.';

    include 'template/header.php';

?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <figure class="figure">
                <img src="images/logo-php.png" width="250" id="preview">
            </figure>
        </div>
        <div class="row">
            <button class="btn-upload" type="button"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Select Photo 
            </button>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" style="display: none;">
        </div>
        <div class="row">
            <button class="btn btn-success" type="submit"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>
                Upload Photo 
            </button>
        </div>
    </form>
    <?php if ($_FILES): ?>
        <?php if ($_FILES['photo']['error'] > 0): ?>
            <div class="error">
                <strong>Error:</strong> You must select a Photo.
            </div>
        <?php else: ?>
            <?php move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$_FILES['photo']['name']) ?>
            <div class="msg">
                <strong>
                    Photo has been uploaded successfully!
                </strong>
                <div>
                    <strong> Name:</strong> <?php echo $_FILES['photo']['name'] ?>
                </div>
                <div>
                    <strong> Type:</strong> <?php echo $_FILES['photo']['type'] ?>
                </div>
                <div>
                    <strong> Size:</strong> <?php echo round($_FILES['photo']['size'] / 1024) ?> KB
                </div>
            </div>	
        <?php endif ?>
    <?php endif ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-upload').click(function() {
                $('#photo').click();
            });
            $('#photo').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        });
    </script>
<?php include 'template/footer.php' ?>