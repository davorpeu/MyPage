<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontakt</title>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <script src="js/main.js"></script>
</head>

<body>

  <header></header>
  <!-- Contact Form -->
  <div class="contact-container">
    <?php
    if (isset($_GET["success"]) && $_GET["success"] == 1) {
      echo '<div style="background-color: red; color:white;"><h1>Prošlo je</h1></div>';
    }
    ?>
    <h1 class="title">Kontaktirajte me</h1>
    <form class="contact" method="POST" action="submit.php">
      <input type="text" placeholder="Ime" id="name" name="name" /><br />
      <input type="email" id="email" name="email" placeholder="Email" required /><br />
      <textarea id="message" class="message" placeholder="Poruka" name="message"></textarea><br />
      <div id="captchaContainer" class="captchaContainer">
        <div id="captchaText">5 + 3 =</div>
        <input type="text" id="captchaInput" class="captchaInput" required />
      </div>
      <input class="formButton" type="submit" value="Pošalji" />
    </form>
  </div>

  <footer>
    <p>
      MOJA STRANICA. All Rights Reserved &copy;
      <span id="current-date"></span>
    </p>
  </footer>
</body>

</html>
<script>
  const form = document.querySelector(".formButton");
  const captchaInput = document.querySelector(".captchaInput");

  form.addEventListener("click", function (event) {
    const correctAnswer = 5 + 3;

    if (captchaInput.value != correctAnswer) {
      event.preventDefault();
      alert("Incorrect captcha answer. Please try again.");
    }
  });
</script>