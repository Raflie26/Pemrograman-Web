<?php 

include './db.php';

$sql = "SELECT * FROM kontak";
$data = [];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="./images/favicon.png" />

  <!-- Put your site title here -->
  <title>
    Raflie Firmansyah
  </title>

  <meta name="description" content="Add small description of yourslef.">
  <!-- Add some coding keywords below, Ex: (React, CSS etc) -->
  <meta name="keywords" content="Put your name, skills and some coding keywords" />
  <link rel="stylesheet" href="index.css" />
</head>

<body>

  <main role="main">

  <div class="row">
      <nav class="nav" role="navigation">
        <ul class="nav__items">
          <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
          <li class="nav__item"><a href="./about.php" class="nav__link">Tentang Saya</a></li>
          <li class="nav__item">
            <a href="./skills.php" class="nav__link">Skills</a>
          </li>
          <li class="nav__item">
            <a href="./contact.php" class="nav__link">Kontak</a>
          </li>
          <li class="nav__item">
            <a href="./achievements.php" class="nav__link">Pencapaian</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- ***** Clients ***** -->

    <section class="contact" id="contact">
      <div class="row">
        <h2><?php echo $data[0]["konten"]; ?></h2>
        <div class="contact__info">
          <p>
          <?php echo $data[0]["deskripsi"]; ?>
          </p>
          <!-- Replace the email with yours -->
          <a href="mailto:<?php echo $data[0]["email"]; ?>" class="btn"><?php echo $data[0]["email"]; ?></a>
        </div>
      </div>
    </section>
  </main>

<!-- ***** Footer ***** -->

<footer role="contentinfo" class="footer">
    <div class="row">
      <ul class="footer__social-links">
        <li class="footer__social-link-item">
          <a href="https://twitter.com/raflie26/" title="Link to Twitter Profile">
            <img src="./images/twitter.svg" class="footer__social-image" alt="Twitter">
          </a>
        </li>
        <li class="footer__social-link-item">
          <a href="https://github.com/Raflie26" title="Link to Github Profile">
            <img src="./images/github.svg" class="footer__social-image" alt="Github">
          </a>
        </li>
        <li class="footer__social-link-item">
          <a href="https://instagram.com/raflie26">
            <img src="./images/instagram.png" title="Link to Instagram Profile" class="footer__social-image" alt="Instagram">
          </a>
        </li>
      </ul>

      <p>
        &copy; 2021 <a href="https://google.com class="link">Raflie Firmansyah</a>.
      </p>
    </div>
  </footer>

  <a href="#top" class="back-to-top" title="Back to Top">
    <img src="./images/arrow-up.svg" alt="Back to Top" class="back-to-top__image"/>
  </a>
  <script src="./index.js"></script>
</body>

</html>