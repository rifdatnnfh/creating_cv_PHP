<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="main.css">
 <script src="script.js"></script>
 <title>Curriculum Vitae</title>
</head>

<body class="p-3">
 <nav class="navbar sticky-top bg-body-tertiary coklat">
    <div class="container-fluid">
      <h1>Curriculum Vitae</h1>
      <a class="navbar-brand" href="update.php">Update</a>
    </div>
 </nav>
 <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil" class="img-thumbnail">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <p class="card-text"><?php echo $data['telepon']; ?></p>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <p class="card-text"><?php echo $data['web']; ?></p>
        <h4>Education</h4>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <h4>Work Experience</h4>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h4>Skills</h4>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
 </div>

 <!-- Tampilkan komentar -->
 <nav class="navbar sticky-top bg-body-tertiary coklat">
    <div class="container-fluid">
      <h1>Comment</h1>
    </div>
 </nav>
 <div class="card">
    <div class="p-3">
      <div id="comments">
        <?php
        $cvId = 1; 
        $query = "SELECT * FROM comments WHERE cv_id = $cvId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($comment = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">' . $comment['comment_text'] . '</div>';
          }
        } else {
          echo 'No comments yet.';
        }

        mysqli_close($conn);
        ?>
      </div>
      <label for="commentInput" class="form-label" style="margin-bottom: 10px;">Add Comment</label>
      <textarea class="form-control" id="commentInput" name="comment" rows="3" style="margin-bottom: 10px;" placeholder="Add Comment..."></textarea>
      <button class="btn btn-primary" onclick="addComment()" style="margin-bottom: 10px;">Add Comment</button>
    </div>
 </div>

</body>

</html>