<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>UploadtoBlog</title>
    <!-- my Style sheet -->

    <link rel="stylesheet" type="text/css" href="../VorbereitungPruefung/Mystyle/Styling.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script for Drop Down und Co -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</head>
<main>

<body>
  <section id="mainBackground">
    <header>
      <div>
        <?php include "Navbars1.php"; ?>
      </div>
    </header>






<!-- HTML form to add a new post -->
<main>


<div class="container mt-5" style="display: flex; align-items: center;">
        <div class="card mx-auto" style="width: 50%;">
        <div class="card-header">
                                <h3>Upload Blog Post</h3>
                            </div>
            <div class="card-body">
                <form action="BlogUpload.php" method="post" enctype="multipart/form-data" id="blog-form">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" rows="3" name="content" maxlength="500"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file"  accept="image/png, image/gif, image/jpeg" class="form-control-file" id="image" name="image">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
        </div>
    </div>
</div>
</div>
</div>
<?php

if (isset($_POST["submit"])) {
  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if ($check !== false) {
      // Determine image format
      $image_type = exif_imagetype($_FILES["image"]["tmp_name"]);
      // Create image resource based on format
      switch ($image_type) {
          case IMAGETYPE_JPEG:
              $image = imagecreatefromjpeg($_FILES["image"]["tmp_name"]);
              break;
          case IMAGETYPE_PNG:
              $image = imagecreatefrompng($_FILES["image"]["tmp_name"]);
              break;
          case IMAGETYPE_GIF:
              $image = imagecreatefromgif($_FILES["image"]["tmp_name"]);
              break;
          default:
              echo "Unsupported image format.";
              exit;
      }
      // Resize image
      $image_resized = imagescale($image, 300); // width of thumbnail
      // Save original image
      move_uploaded_file($_FILES["image"]["tmp_name"], "upload/news/" . $_FILES["image"]["name"]);
      // Save thumbnail
      switch ($image_type) {
          case IMAGETYPE_JPEG:
              imagejpeg($image_resized, "upload/news/thumb/" . $_FILES["image"]["name"]);
              break;
          case IMAGETYPE_PNG:
              imagepng($image_resized, "upload/news/thumb/" . $_FILES["image"]["name"]);
              break;
          case IMAGETYPE_GIF:
              imagegif($image_resized, "upload/news/thumb/" . $_FILES["image"]["name"]);
              break;
      }
      imagedestroy($image_resized);
  } else {
    echo '<div class="text-center text-white" style="font-size: 2rem;">File is not an Image try again.</div> ';
      exit;
  }

  // Connect to the MySQL server using XAMPP and phpMyAdmin
  $conn = mysqli_connect("localhost", "root", "", "test");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Get the form data
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $image = $_FILES['image']['name'];
// move the uploaded image to the uploads/news folder
  $upload_path = "upload/news/";
  $upload_path = $upload_path . basename($_FILES['image']['name']);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
    echo '<div class="text-center text-white" style="font-size: 2rem;">Sorry, there was an error uploading your file.</div> ';
  } else {
   
    echo '<div class="text-center text-white" style="font-size: 2rem;">The file '. basename( $_FILES['image']['name']). ' has been uploaded</div> ';
  }

  // Insert the data into the blog_posts table
  $sql = "INSERT INTO blog_posts (title, date, image, content) VALUES ('$title', NOW(), '$image', '$content')";
  if (mysqli_query($conn, $sql)) {
      echo '<div class="text-center text-white" style="font-size: 2rem;">Your post has been added successfully</div>';
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
} 


?>  
</main>
    </section>
    <footer>
        <?php include "navbarbot.php"; ?>
    </footer>
    </section>
</body>

</html>
