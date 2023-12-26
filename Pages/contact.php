<!DOCTYPE html>
<html>

<head>
  <title>Contact Form</title>

</head>

<body>
  <div class="contactBody">

  <?php include 'layout/header.php';
    ?>

    <h2>تواصل معنا</h2>

    <form class="form1" action="send.php" method="post">
      <!-- Form fields -->
      <label for="name">الإسم:</label><br>
      <input class="inputcontact" type="text" id="name" name="name" required><br><br>
      <label for="email">البريد الإلكتروني:</label><br>

      <input class="inputcontact" type="email" id="email" name="email" required><br><br>
      <label for="message">الرسالة:</label><br>

      <textarea class="inpucontact" id="message" name="message" rows="4" cols="50" required></textarea><br><br>
      <button class="inputcontact" type="submit" name="send">إرسال</button>
    </form>
    <?php include 'layout/footer.php';
    ?>
</body>
</div>

</html>