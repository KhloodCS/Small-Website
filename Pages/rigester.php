<!DOCTYPE html>
<html>

<head>
    <title>سجل معنا</title>
</head>

<body>
<?php include 'layout/header.php';
?>
  <div class="contactBody">

    <h2>SEEFLYER سجَل معنا لتصبح أحد موظفي</h2>
    <form class="form1" action="handlereg.php" method="POST">
        <label for="username">الإسم:</label>
        <input class="inputcontact" type="text" id="username" name="username" required><br><br>

        <label for="password">كلمة المرور:</label>
        <input class="inputcontact" type="password" id="password" name="password" required><br><br>
        <label for="email">البريد الإلكتروني:</label><br>

        <input class="inputcontact" type="email" id="email" name="email" required><br><br>

        <input class="submit1" type="submit" value="تسجيل">
    </form>
    <?php include 'layout/footer.php';
?>
  </div>
</body>

</html>