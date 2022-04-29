<?php include 'mail.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name = "description" content = "Formulaire mail pour hackers-poulette">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="./assets/css/index.css" rel="stylesheet" />
    <title>Hacked-Poulette</title>
  </head>
  <body>

      <!--alert messages start-->
      <?php echo $alert; ?>
    <!--alert messages end-->

      <section id="contact">
      <div class="contact-box">
        <div class="contact-links">
          <h2>CONTACT</h2>
          <div class="logo">
            <img
              src="./assets/img/hackers-poulette-logo.png"
              alt="Logo hackers poulette"
            />
          </div>
        </div>

        <div class="contact-form-wrapper">

        <form action="" method="post">

            <div class="form-item">
              <input id="name" type="text" name="name" required/>
              <label for="name">Lastname:</label>
            </div>

            <div class="form-item">
              <input id="firstname" type="text" name="firstname" required/>
              <label for="firstname">Firstname:</label>
            </div>

            <div class="from-item">
              <p>Gender:</p>
              <label for="gender" class="fieldLabel"> </label>
              <select id="gender" name="gender" class="form-control">
                <option>Male </option>
                <option>Female </option>
              </select>
            </div>

            <div class="form-item">
              <input type="text" name="email" id = "email" required/>
              <label for="email">Email:</label>
            </div>

            <div class="form-item">
              <input id="country" type="text" name="country" required/>
              <label for="country">Country:</label>
            </div>

            <div class="from-item">
              <p>Subject:</p>
              <label for="subject" class="fieldLabel"> </label>
              <select id="subject" name="subject" class="form-control">
                <option>Job application</option>
                <option>Inventory request</option>
                <option>Order not recevied</option>
              </select>
            </div>

            <div class="form-item">
              <textarea id="message" name="message" required></textarea>
              <label for="message">Message:</label>
            </div>

            <input type="submit" name = "submit" value="Send" class="submit-btn">

        </div>
      </div>
</form>
</section>

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>
</html>