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
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 1rem;
}

.job-listings {
  
  display: inline-block;
  align-items: flex-start;
  padding: 2rem;
}

.job-card {
  
  border: 1px solid #ccc;
  padding: 1rem;
  margin: 0 1rem;
  text-align: center;
}

.apply-button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 0.5rem 1rem;
  cursor: pointer;
}

.application-form-overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

.application-form {
  background-color: #fff;
  padding: 2rem;
  border-radius: 5px;
}

.application-form label {
  display: block;
  margin-bottom: 0.5rem;
}

.application-form input,
.application-form textarea {
  width: 100%;
  padding: 0.5rem;
  margin-bottom: 1rem;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.application-form button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 0.5rem 1rem;
  cursor: pointer;
}





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



 <script>
document.addEventListener("DOMContentLoaded", function () {
  const applyButtons = document.querySelectorAll(".apply-button");
  const overlays = document.querySelectorAll(".application-form-overlay");

  applyButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
      overlays[index].style.display = "flex";
    });
  });

  const forms = document.querySelectorAll(".job-application-form");

  forms.forEach((form, index) => {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      // Handle form submission, e.g., send data to server
      // You'd need to implement backend logic to process the form data
      // and store it in a database.
      alert("Application submitted!");
      form.reset();
      overlays[index].style.display = "none";
    });
  });
});
</script>


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

  







  <section class="job-listings">
  <div class="job-card">
    <h2>Software Developer</h2>
    <p>Join us in creating amazing software applications.</p>
    <button class="apply-button">Apply Now</button>
  </div>
  <!-- Add more job cards here -->
</section>
<div class="application-form-overlay">
  <div class="application-form">
    <h2>Apply for Software Developer Position</h2>
    <form class="job-application-form">
      <!-- ... Your form fields ... -->
      <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="resume">Resume/CV:</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        
        <label for="cover-letter">Cover Letter:</label>
        <textarea id="cover-letter" name="coverLetter" rows="4" required></textarea>
      <button type="submit">Submit Application</button>
    </form>
  </div>
</div>

  <section class="job-listings">
  <div class="job-card">
    <h2>Internships</h2>
    <p>Join us in creating amazing software applications.</p>
    <button class="apply-button">Apply Now</button>
  </div>
  <!-- Add more job cards here -->
</section>
<div class="application-form-overlay">
  <div class="application-form">
    <h2>Apply for Intern Position</h2>
    <form class="job-application-form">
      <!-- ... Your form fields ... -->
      <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="resume">Resume/CV:</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        
        <label for="cover-letter">Cover Letter:</label>
        <textarea id="cover-letter" name="coverLetter" rows="4" required></textarea>
      <button type="submit">Submit Application</button>
    </form>
  </div>
</div>
  <section class="job-listings">
  <div class="job-card">
    <h2>Marketing Manager</h2>
    <p>Join us in Marketing.</p>
    <button class="apply-button">Apply Now</button>
  </div>
  <!-- Add more job cards here -->
</section>
<div class="application-form-overlay">
  <div class="application-form">
    <h2>Apply for Marketing Position</h2>
    <form class="job-application-form">
      <!-- ... Your form fields ... -->
      <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="resume">Resume/CV:</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        
        <label for="cover-letter">Cover Letter:</label>
        <textarea id="cover-letter" name="coverLetter" rows="4" required></textarea>
      <button type="submit">Submit Application</button>
    </form>
  </div>
</div>

<section class="job-listings">
  <div class="job-card">
    <h2>Graphics Designer</h2>
    <p>Join us in Design amazing software applications.</p>
    <button class="apply-button">Apply Now</button>
  </div>
  <!-- Add more job cards here -->
</section>
<div class="application-form-overlay">
  <div class="application-form">
    <h2>Apply for Graphics Design Position</h2>
    <form class="job-application-form">
      <!-- ... Your form fields ... -->
      <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="resume">Resume/CV:</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        
        <label for="cover-letter">Cover Letter:</label>
        <textarea id="cover-letter" name="coverLetter" rows="4" required></textarea>
      <button type="submit">Submit Application</button>
    </form>
  </div>
</div>



  <?php include('footer.php') ?>
</body>
</html>
