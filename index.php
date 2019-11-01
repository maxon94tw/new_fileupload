<div class="body">
    <div class="container">

        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Upload">
        </form>

        <?php
            $files = scandir("uploads");
            for ($a = 2; $a < count($files); $a++)
            
            {
        ?>

        <p>
        
            <?php echo $files[$a]; ?>
        
            <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
                Download
            </a>
            
            <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
                Delete
            </a>
                  
        </p>
    
        <?php
            }  
        ?>

    </div>
</div>

<style type="text/css">
    .body {
        width: 100%;
        height: 100%;
        background: yellow;
    }

    .container {
        padding: 30px;
        max-width: 600px;
        margin: 0 auto;
    }

    a {
        margin-left: 25px;
        text-decoration: none;
    }
</style>