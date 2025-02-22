<?php session_start(); ?>
<?php if (isset($_SESSION['auth'])) {
  header("Location: ./login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
  <title>PHP PROJECT</title>
</head>

<body>

  <form action="../handelers/handelRegister.php" method="POST">
  <?php if (isset($_SESSION['errors'])): ?>
    <?php foreach ($_SESSION['errors'] as $error): ?>
      <div class="alert error-message" style="color: white; background-color: #e74c3c; border: 1px solid #c0392b; font-family: 'Source Code Pro', monospace;">
        <ul>
          <li>
          <?php echo htmlspecialchars($error); ?>
          </li>
        </ul>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
  <?php unset($_SESSION['errors']); ?>
    <div class="form-item">
      <label>Username</label>
      <div class="input-wrapper">
        <input type="text" name="name" id="username" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" data-lpignore="true" />
      </div>
    </div>
    <div class="form-item">
      <label>Email</label>
      <div class="input-wrapper">
        <input type="email" name="email" id="username" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" data-lpignore="true" />
      </div>
    </div>
    <div class="form-item">
      <label>Password</label>
      <div class="input-wrapper">
        <input type="password" name="password" id="password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" data-lpignore="true" />
        <button type="button" id="eyeball">
          <div class="eye"></div>
        </button>
        <div id="beam"></div>
      </div>
    </div>
    <button id="submit">Sign in</button>
  </form>
  <script src="main.js"></script>
</body>

</html>