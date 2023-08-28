<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career Opportunities</title>
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="./assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Templat./e Main CSS File -->
<link href="./assets/css/style.css" rel="stylesheet">

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
  }

  .header {
    background-color: #333;
    padding: 10px;
    height: 160px;
    display: flex;
    align-items: end;
    justify-content: center;
  }


  .job-listing {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .job-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .job-description {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
  }

  .apply-button {
    display: inline-block;
    padding: 8px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s;
  }

  .apply-button:hover {
    background-color: #555;
  }
  
</style>
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><span>S</span>hrote</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link active" href="careers.php">Careers</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <div class="header">
    <h1  class="text-white">Career Opportunities</h1>
  </div>
  <div class="container pt-5">
    <div class="job-listing">
      <h2 class="job-title">Web Developer</h2>
      <p class="job-description">
        We are looking for a skilled web developer to join our team. If you have a passion for building
        interactive and user-friendly websites, we want to hear from you!
      </p>
      <a class="apply-button" href="#">Apply Now</a>
    </div>
    
    <div class="job-listing">
      <h2 class="job-title">Graphic Designer</h2>
      <p class="job-description">
        Are you a creative mind with a passion for design? Join our team as a graphic designer and help
        bring our visual ideas to life.
      </p>
      <a class="apply-button" href="#">Apply Now</a>
    </div>
    <!-- Add more job listings here -->
  </div>

  <?php include('footer.php') ?>
</body>
</html>
