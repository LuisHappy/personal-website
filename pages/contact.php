
<!DOCTYPE html>
<html>
<head>
  <title>Contact Me - Luis Camacho</title>

  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <?php require '../config/NavBar.php'; ?>
</head>
<body>
  <div class="content">
    <center>
      <h3>Contact Me</h3>
      <div>
        <label>Email: </label>
        <input type="textbox" name=""><br>
      </div>
      <div class="clear"><br></div>
      <div>
        <label>Subject: </label>
        <input type="text" name="">
      </div>
      <div class="clear"><br></div>
      <div>
        <label>Message</label><br>
        <textarea cols="40" rows="5"></textarea>
      </div>
    </center>
  </div>
</body>
</html>
<script type="text/javascript" src="../scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#contact").addClass('active');
  })
</script>