
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registrasi</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="styles.css">
  </head>

  <body style="display:flex; align-items:center; justify-content:center;">
  <form method="post" action="proses_registrasi.php">
  <div class="login-page">
    <div class="form">
      <form class="register-form" method="POST">
        <h2><i class="fas fa-lock"></i> Registrasi</h2>
        <input type="text" placeholder="Username *" required/>
        <input type="password" placeholder="Password *" required/>
        <button type="submit">Registrasi</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

    </div>
  </div>
</form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="main.js"></script>
  </body>
  </html>