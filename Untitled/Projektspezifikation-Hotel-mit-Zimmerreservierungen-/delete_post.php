<?php
    if (isset($_POST['delete'])) {
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "test");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the post id from the form
        $id = $_POST['id'];

        // Delete the post from the database
        $sql = "DELETE FROM blog_posts WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = 'Post deleted successfully';
            header('Location: Blog.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);
    }
?>
