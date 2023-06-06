<!doctype html>
<html lang="en">

<head>
    <title>Blog</title>
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

    <body>

<section id="fixedBackground">
  
    
        <header>
        <?php include "Navbars1.php" ?>

        </header>

        <main>
<div class="container my-5">
    <div class="row">
        <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "test");
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Get the data from the blog_posts table
        $sql = "SELECT * FROM blog_posts ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-4 my-5">     
            <div class="card h-100">
        

                    <img src="Upload/news/thumb/<?php  echo $row['image']; ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><small class="text-muted"><?php echo $row['date']; ?></small></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $row['id']; ?>">Show Article </button>

                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
                    ?>
                    <form action="delete_post.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" name="delete" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?');">

                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-size: 3rem"; id="exampleModalLabel"><?php echo $row['title']; ?></h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <img src="Upload/news/<?php echo $row['image']; ?>" class="img-fluid" style=" width: 100%;">
                    <p><?php echo $row['content']; ?></p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "No posts found";
        }
        // Close the connection
        mysqli_close($conn);
        ?>
    </div>
</div>
</main>




<footer>
<?php include "navbarbot.php"; ?>
</footer>
</body>

