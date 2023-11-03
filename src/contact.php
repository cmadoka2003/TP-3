<?php include 'bdd.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container-fluid">
  <header class="row">
    <nav class="navbar navbar-expand-md">
      <div class="col-md-1 offset-md-1">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">☰</span>
        </button>
      </div>
      <div class="col-md-2">
        <a class="navbar-brand text-primary" href="#"><img class="avion" src="image/avion.png" />TRAVEL AGENCY</a>
      </div>

      <div class="col-md-2"></div>

      <div class="col-md-3">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav custom-margin">
            <li class="nav-item text">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="destination.html">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="Deals.html">Deals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="row">
    <div class="col-md-8 offset-md-2 mb-5">
      <a><img src="image/Fond-contact.jpg" /></a>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4 offset-md-2">
      <form method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="FirstName"> LastName : </label>
              <input type="text" class="form-control border border-warning rounded mb-4" id="LastName" placeholder="LastName" name="LastName" required />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="LastName"> FirstName : </label>
              <input type="text" class="form-control border border-warning mb-4" id="FirstName" placeholder="FirstName" name="FirstName" required />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="email"> Email :</label>
              <input type="email" class="form-control border border-warning mb-4" id="email" placeholder="test@gmail.com" name="email" required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="agency"> Nearest Agency</label>
              <div class="input-group rounded border border-warning">
                  <select
                    class="form-control border-0"
                    id="agency"
                    name="agency"
                  >
                    <option value="1">Paris</option>
                    <option value="2">Lyon</option>
                    <option value="3">Marseille</option>
                    <option value="7">newyork</option>
                  </select>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="38"
                    fill="black"
                    class=" rounded-end bg-white bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </div>
            </div>
          </div>
          <div class="col-md-12 ">
            <div class="form-group">
              <label for="msg"> Message</label>
              <textarea id="msg" name="msg" rows="6" cols="10" maxlength="800" class="form-control border border-warning " required></textarea>
              <br>
            </div>
          </div>

          <div class="col-md-12 text-end mb-4 ">
            <input type="submit" name="formsend" class="btncustom w-50" value="Send"></input>
          </div>
          <?php
          if (isset($message)) echo $message1
          ?>
        </div>
      </form>
    </div>
    <div class="col-md-4 ">
      <div class="row">
        <div class="col-md-4">
          <h4 class="titre ps-2">Address</h4>

          <p > 15 rue de la Paix
            75010, Paris
            France
            +1 0805-540-801
            <a href="#">Other Address</a>
          </p>
        </div>
        <div class="col-md-12">
          <h4 class="titre ps-2">Information</h4>
          <p> Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.
            Phasellus ornare lectus non
            urna sollicitudin gravida.
            Vivamus pharetra </p>
        </div>
        <div class="">
        </div>
      </div>
    </div>










    <footer>
      <div class="row ">
        <div class="col-lg-8 offset-lg-2 bgfooter1" style="max-height: 20vh">
          <div class="row">
            <div class="col-md-6 col-lg-1 offset-lg-1 mb-3 d-flex justify-content-center align-items-center text-center">
              <div>
                <img src="image/calculator.png" class="img-fluid" alt="Image 1" />
                <p class="mt-2 mb-0 text">Compare price</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-1 offset-lg-2 mb-3 d-flex justify-content-center align-items-center text-center">
              <div>
                <img src="image/discount.png" class="img-fluid" alt="Image 2" />
                <p class="mt-2 mb-0 text">Get the best deals</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-1 offset-lg-2 mb-3 d-flex justify-content-center align-items-center text-center">
              <div>
                <img src="image/support.png" class="img-fluid" alt="Image 3" />
                <p class="mt-2 mb-0 text">7/7 support</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-1 offset-lg-2 mb-3 d-flex justify-content-center align-items-center text-center">
              <div>
                <img src="image/online-payment.png" class="img-fluid" alt="Image 4" />
                <p class="mt-2 mb-0 text">Secure online payment</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="row bgfooter2 pt-3">
            <div class="col-md-4">
              <h5 class="fw-bold">Links</h5>
              <p class="text-dark-blue m-0 footer-custom"><a href="index.html">Home</a></p>
              <p class="text-dark-blue m-0 footer-custom">Destination</p>
              <p class="text-dark-blue m-0 footer-custom">Deals</p>
              <p class="text-dark-blue m-0 footer-custom"><a href="contact.php">Contact</a></p>
              <p class="text-dark-blue m-0 footer-custom"><a href="condition.html">Terms & Conditions</a></p>
            </div>
            <div class="col-md-4">
              <h5 class="fw-bold">Adress</h5>
              <p class="text-dark-blue m-0">15 rue de la Paix</p>
              <p class="text-dark-blue m-0">75010, Paris</p>
              <p class="text-dark-blue m-0">France</p>
              <p>Other adresses</p>
            </div>
            <div class="col-md-4">
              <h5 class="fw-bold">Call us</h5>
              <p class="fw-bold">+1 0805-540-801</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 offset-md-2 color3">
          <p>

          </p>
        </div>

      </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>

</body>

</html>