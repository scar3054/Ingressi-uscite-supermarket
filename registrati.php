<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Prova di autenticazione</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
<header class="sticky">
  <a href="index.php" role="button">Home</a>
  <a href="accedi.php" role="button">Login</a>
</header>
<br />
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <!-- Adding some flex properties to center the form and some height to the page, these can be omitted -->
    <div class="col-sm-12 col-md-8 col-lg-6" style="height: calc(100vh - 10.25rem); display: flex; align-items: center; flex: 0 1 auto;">
      <form action="recuperoregistrazione.php" method="post">
        <fieldset>
          <legend>Login form</legend>
            <div class="input-group fluid">
              <label for="username" style="width: 80px;">Username</label>
              <input type="text" value="" name="username" placeholder="username">
            </div>
            <div class="input-group fluid">
              <label for="pwd" style="width: 80px;">Password</label>
              <input type="password" value="" name="password" placeholder="password">
            </div>
            <div class="input-group fluid">
              <button class="primary">Login</button>
            </div>
        </fieldset>
      </form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
<footer>
    <p>Esempio di autenticazione</p>
</footer>
</body>
</html>