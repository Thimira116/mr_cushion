<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mr. Cushion PVT (LTD) - Upholstery Experts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d45f034cea.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
    /* Navbar */
    .navbar {
      background-color: #f9a825; /* warm yellow */
    }
    .navbar-brand img {
      max-height: 60px;
      border-radius: 50%;
    }
    /* Hero */
    #hero {
      /*background: url('https://images.unsplash.com/photo-1572375475805-7c7948a986d2?auto=format&fit=crop&w=1400&q=80') no-repeat center center/cover;*/
      height: 500px;
      position: relative;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    #hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
    }
    #hero .content {
      position: relative;
      z-index: 2;
      max-width: 700px;
    }
    #hero h1 {
      font-weight: 700;
      font-size: 3rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 8px #000;
    }
    #hero p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
      text-shadow: 1px 1px 6px #000;
    }
    /* Services Section */
    .service-card img {
      height: 200px;
      object-fit: cover;
      border-radius: 0.5rem;
    }
    .service-card {
      transition: box-shadow 0.3s ease;
    }
    .service-card:hover {
      box-shadow: 0 8px 20px rgba(249, 168, 37, 0.7);
    }
    /* About */
    #about img {
      max-width: 100%;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.15);
    }
    /* Footer */
    footer {
      background: #f9a825;
      color: white;
      padding: 2rem 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #f9a825;">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">
      <img src="logo.jpg" alt="Mr Cushion Logo" style="max-height: 60px; border-radius: 50%;" />
      <span class="fw-bold">Mr. Cushion PVT (LTD)</span>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navMenu"
      aria-controls="navMenu"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto fw-semibold">
        <li class="nav-item"><a class="nav-link text-dark" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="#feedback">Feedback</a></li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-dark ms-md-2" href="admin.php">Admin Panel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section id="hero">
  <div class="content">
    <h1>Comfort & Style for Every Interior</h1>
    <p>High-quality upholstery for vehicles, sofas, and custom furniture. Your trusted interior partner.</p>
    <a href="#contact" class="btn btn-warning btn-lg fw-bold">Book Your Service</a>
  </div>
</section>

<section id="services" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="color:#f9a825;">Our Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card service-card">
          <img src="4.jpg" alt="Vehicle Seat Cushioning" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Vehicle Seat Cushioning</h5>
            <p class="card-text">Custom cushions designed for comfort and style in cars, vans, trucks, and motorcycles.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <img src="20.jpg" alt="Sofa Cushioning" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Sofa & Furniture Cushioning</h5>
            <p class="card-text">Renew your sofas and furniture with premium cushions for lasting comfort.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <img src="custom.jpg" alt="Custom Upholstery" />
          <div class="card-body">
            <h5 class="card-title fw-bold">Custom Upholstery</h5>
            <p class="card-text">Tailored upholstery services for offices, homes, and commercial spaces.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="py-5 bg-light">
  <div class="container d-flex flex-column flex-md-row align-items-center gap-4">
    <div class="flex-shrink-0" style="max-width: 400px;">
      <img src="shop.jpg" alt="About Mr Cushion" />
    </div>
    <div>
      <h2 class="fw-bold" style="color:#f9a825;">About Mr. Cushion PVT (LTD)</h2>
      <p>Mr.Cushion is one of the international level typing companies in automobile cushion & upholstery industry in Sri Lanka.
        Next generation in automobile upholstery industry.</p>
      <p>Visit us at <a href="https://maps.app.goo.gl/Fbc6r2Cw3PGMPCV29">173/1, Borella Road, Kottawa</a> or <a href="tel:+94778871872">contact us</a> for a consultation.</p>
    </div>
  </div>
</section>


<section id="contact" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="color:#f9a825;">Book Your Services</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="book.php" method="POST" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required />
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="mb-3">
            <label for="fb-email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" id="fb-email" name="email" required />
            <div class="invalid-feedback">Please enter a valid email.</div>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label fw-semibold">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required />
            <div class="invalid-feedback">Please enter your phone number.</div>
          </div>
          <div class="mb-3">
            <label for="service" class="form-label fw-semibold">Service Interested</label>
            <select class="form-select" id="service" name="service" required>
              <option selected disabled value="">Choose a service</option>
              <option>Vehicle Seat Cushioning</option>
              <option>Sofa & Furniture Cushioning</option>
              <option>Custom Upholstery</option>
            </select>
            <div class="invalid-feedback">Please select a service.</div>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label fw-semibold">Preferred Date</label>
            <input type="date" class="form-control" id="date" name="date" required />
            <div class="invalid-feedback">Please select a date.</div>
          </div>
          <div class="mb-3">
            <label for="note" class="form-label fw-semibold">Additional Notes</label>
            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-warning w-100 fw-bold">Book Now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section id="feedback" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="color:#f9a825;">Give Your Feedback</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="feedback.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
          <div class="mb-3">
            <label for="fb-name" class="form-label fw-semibold">Name</label>
            <input type="text" class="form-control" id="fb-name" name="name" required />
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="mb-3">
            <label for="fb-message" class="form-label fw-semibold">Feedback Message</label>
            <textarea class="form-control" id="fb-message" name="feedback" rows="4" required></textarea>
            <div class="invalid-feedback">Please enter your feedback.</div>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Rating</label>
            <select class="form-select border-warning" name="rating" required>
            <option selected disabled value="">Rate us...</option>
            <option>⭐ Very Poor</option>
            <option>⭐⭐ Poor</option>
            <option>⭐⭐⭐ Average</option>
            <option>⭐⭐⭐⭐ Good</option>
            <option>⭐⭐⭐⭐⭐ Excellent</option>
            </select>
          </div>

          <input type="file" name="image" accept="image/*">
          <br><br>
          <button type="submit" class="btn btn-warning w-100 fw-bold">Submit Feedback</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section id="follow" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4" style="color: #f9a825;">Follow Us On</h2>
    <div class="d-flex justify-content-center gap-4">
      <a href="https://www.facebook.com/mrcushion.kottawa?mibextid=ZbWKwL" target="_blank" aria-label="Facebook" class="text-dark">
        <i class="fa-brands fa-facebook" style="font-size: 2.5rem;"></i>
      </a>
      <a href="http://wa.me/94778871872" target="_blank" aria-label="WhatsApp" class="text-dark">
        <i class="fa-brands fa-whatsapp" style="font-size: 2.5rem;"></i>
      </a>
      <a href="https://www.tiktok.com/@mr_cushion_kottawa?_t=8pYE2awgwWF&_r=1" target="_blank" aria-label="TikTok" class="text-dark">
        <i class="fa-brands fa-tiktok" style="font-size: 2.5rem;"></i>
      </a>
    </div>
  </div>
</section>

  <div>
    <?php include 'display_feedback.php'; ?>
  </div>

<footer>
  <div class="container text-center">
    <p><strong>Mr. Cushion PVT (LTD)</strong></p>
    <p><a href="https://maps.app.goo.gl/Fbc6r2Cw3PGMPCV29">173/1, Borella Road, Kottawa</a></p>
    <p class="mt-3">© 2025 Mr. Cushion. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Bootstrap form validation for both forms
  (() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>

</body>
</html>