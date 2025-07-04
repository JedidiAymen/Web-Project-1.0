<?php
require_once '../login/config.php';

// Get user information if logged in
$logged_in = isset($_SESSION['user_id']);
$username = $logged_in ? $_SESSION['username'] : '';
$user_type = $logged_in ? $_SESSION['user_type'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>
<body>
    <head>
      <nav>
        <div class="logo">
          <i class="bi bi-capsule-pill"></i>
          <div class="description">
            <p>Pharmacy</p>
            <p class="decoration">Shop</p> </div>
        </div>
        <div class="links-wrapper">
          <div class="links">
            <ul>
              <li class="actual"><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li><?php
require_once 'config.php';

// Get user information if logged in
$logged_in = isset($_SESSION['user_id']);
$username = $logged_in ? $_SESSION['username'] : '';
$user_type = $logged_in ? $_SESSION['user_type'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>
<body>
    <head>
      <nav>
        <div class="logo">
          <i class="bi bi-capsule-pill"></i>
          <div class="description">
            <p>Pharmacy</p>
            <p class="decoration">Shop</p> </div>
        </div>
        <div class="links-wrapper">
          <div class="links">
            <ul>
              <li class="actual"><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="search">
          <div class="search-cotainner search-bar">
            <form>
              <input type="text" placeholder="search for anything...">
              <button type="submit" class="submit"><i class="bi bi-search"></i></button>
            </form>
            <?php if ($logged_in): ?>
              <div class="user-menu">
                <span>Welcome, <?php echo htmlspecialchars($username); ?></span>
                <a href="logout.php" class="login icon"><i class="bi bi-box-arrow-right"></i></a>
                <?php if ($user_type === 'admin'): ?>
                  <a href="admin.php" class="login icon"><i class="bi bi-speedometer2"></i></a>
                <?php endif; ?>
              </div>
            <?php else: ?>
              <button class="login icon"><a href="login.php"><i class="bi bi-box-arrow-in-right"></i></a></button>
            <?php endif; ?>
            <button class="login icon"><a href="#"><i class="bi bi-bag-dash"></i></a></button>
          </div>
        </div>
      </nav>
    </head>  
              <li><a href="../Products/index.html">Products</a></li>
              <li><a href="../Contact_us/form_recrutement.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="search">
          <div class="search-cotainner search-bar">
            <form>
              <input type="text" placeholder="search for anything...">
              <button type="submit" class="submit"><i class="bi bi-search"></i></button>
            </form>
            <?php if ($logged_in): ?>
              <div class="user-menu">
                <span>Welcome, <?php echo htmlspecialchars($username); ?></span>
                <a href="logout.php" class="login icon"><i class="bi bi-box-arrow-right"></i></a>
                <?php if ($user_type === 'admin'): ?>
                  <a href="../Admin/admin.php" class="login icon"><i class="bi bi-speedometer2"></i></a>
                <?php endif; ?>
              </div>
            <?php else: ?>
              <button class="login icon"><a href="../login/login.php"><i class="bi bi-box-arrow-in-right"></i></a></button>
            <?php endif; ?>
            <button class="login icon"><a href="#"><i class="bi bi-bag-dash"></i></a></button>
          </div>
        </div>
      </nav>
    </head>   
    <main>
      <section class="introduction">
        <div class="content">
          <h1>Pharmacy Store</h1>
          <h2>Your Trusted </h2>
          <h2>Pharmacy Store</h2> 
          <p class="margin">we prioritize your health and well-being by providing high-quality medications, expert advice, and personalized care. Our dedicated team is here to ensure you have access to the best pharmaceutical services, from prescriptions to wellness support. Your health is our commitment</p>
          <div class="customers-photo">
            <ul>
              <li class="a"><img  src="home-page-images/Customer_1.png" alt="Customer_1"></li>
              <li class="b"><img  src="home-page-images/customer_2.png" alt="customer_2"></li>
              <li class="c"><img  src="home-page-images/customer_3.png" alt="customer_3"></li>
              <li class="d"><img src="home-page-images/customer_4.png" alt="customer_4"></li>
            </ul>
              <div>
                <h3>100k+</h3>
                <p>Satisfiied Customers</p>
              </div>

          </div>
        </div>
        <img classs="beautiful" src="home-page-images/—Pngtree—portrait of a happy beautiful_15447192.png" alt="Pharmacy_Lady">

      </section>
      <section class="offers">
        <ul>
          <li>
              <img src="home-page-images/truck (3).svg" alt="truck">
            <div>
              <p class="bold">Free Shipping</p>
              <p class="grey">order over 600$</p>
            </div>
          </li>
          <li>
              <img src="home-page-images/credit-card (1).svg" alt="credit-card">
            <div>
           <p class="bold">Quick Payment</p>
              <p class="grey">100% scure</p>
            </div>
          </li>
          <li>
            <img src="home-page-images/gift (1).svg" alt="gift">
            <div>
              <p class="bold">Big Cashback</p>
              <p class="grey">Over 50% Cashback</p>
            </div>
          </li>
          <li>
            <img src="home-page-images/users (1).svg" alt="users">
            <div>
              <p class="bold">24/7 Support</p>
              <p class="grey">Ready for You</p>
            </div>
          </li>
        </ul>
      </section>
      <section class="offers-plus">
        <div class="Extra">
          <div>
            <h3>Big Sale</h3>
            <p class="bold">Get an Extra <br><span>50%</span>off</p>
            <p class="margin grey">Get an extra 50% off! Don't miss this amazing deal—whether you're shopping for yourself or looking for the perfect gift, now is the time to save big. Take advantage of this limited-time offer before it's gone!</p>
          </div>
          <img src="home-page-images/sale.png" alt="sale">
        </div>
        <div class="first">
          <div>
             <p>take the discount for the first <br>shopping on our website</p>
             <img src="home-page-images/Elipse.svg" alt="Elipse">
          </div>
          <div>
            <p class="big">30%</p>
           <button class="sss">Shop Now</button>
          </div>
        </div>
      </section>
      <section class="Featured">
        <div class="Essentials">
          <h5>Featured</h5>
          <div>
            <h2 class="bold"> Featured Pharmacy Essentials</h2>
            <p class="margin grey">Stock up on must-have pharmacy essentials to keep yourself and your loved ones healthy. From daily vitamins and personal care to first-aid supplies and protective gear, we’ve got everything you need in one place. Shop now and stay prepared for whatever comes your way</p>
          </div>
        <button>All Products ➔</button>
        </div>

        <div class="line-of-products"></div>
<h5 class="trying"><span>Our</span> Categories</h5>
<div class="grid-container">
    <div class="grid-item item1">
      <h2>All Product</h2>
      <div class="flex-category">  
          <img src="line_of_product/Pharmacy.jpg" alt="Parmacy">
          <p>At our pharmacy store, we offer a wide range of high-quality health and wellness products designed to meet your everyday needs. From trusted pain relievers and allergy solutions to essential first aid items, dental care, supplements, and cosmetics — each product is carefully selected to support your health, comfort, and confidence. Whether you're looking for fast relief, daily care, or beauty essentials, we’ve got you covered with safe and effective solutions.</p> 
      </div>
      <button class="Visit"><a href="#">Visit Now </a></button>
    </div>
    <div class="grid-item">
      <h2>Pain Relievers</h2>
      <p>Ease discomfort quickly with our effective pain relief options. Perfect for headaches, muscle pain, and more.</p> 
      <button class="Visit"><a href="#">Visit Now </a></button>
    </div>
    <div class="grid-item">
      <h2>Allergy Medication</h2>
      <p>Stay comfortable all year round with our allergy solutions. Fast relief from sneezing, itching, and congestion.</p>
      <button class="Visit"><a href="#">Visit Now </a></button>
    </div>
    <div class="grid-item">
      <h2>Dental Care</h2>
      <p>Keep your smile bright and healthy with our dental essentials. Shop toothpaste, brushes, and more.</p>

      <button class="Visit"><a href="#">Visit Now </a></button>
    </div>
    <div class="grid-item">
      <h2>First Aid Sup</h2>
      <p>Be ready for any minor injury with our first aid products. Clean, protect, and heal with confidence.</p>
      <button class="Visit"><a href="#">Visit Now </a></button>
    </div>
    <div class="grid-item item6">
      <h2>Cosmetic Product</h2>
      <p>Discover beauty and skincare products that care for you. Look good and feel great every day.</p>
      <button class="Visit"><a href="#">Visit Now </a></button>
    </div>
  </div>
        </section>
      <section class="why">
        <div class="why-us">
            <h5>Why us</h5>
          <ul>
             <li><h2 class="bold"> Our Commitment to Quality</h2></li>
             <li>
              <img src="home-page-images/supplement.svg" alt="herbal">
              <div>
                <h3>Wide Product Range</h3>
                <p class="grey margin">Explore our wide product range, from health essentials to wellness solutions, all tailored to meet your needs</p>
              </div>            
            </li>
             <li>
              <img src="home-page-images/shield.svg" alt="shield">
              <div>
                <h3>Quality Assurance</h3>
                <p class="grey margin">We ensure high standards with trusted products, guaranteeing safety, effectiveness, and customer satisfaction.</p>
              </div>            
                <li>
              <img src="home-page-images/herbal drug.svg" alt="herbal">
              <div>
                <h3>Eco-Friendly Practices</h3>
                <p class="grey margin">We prioritize eco-friendly practices by offering sustainable products and reducing waste for a healthier planet.</p>
              </div>            
            </li>
          </ul>
          <img src="home-page-images/Our comitment.jpeg" alt="our_comitment" class="our">
        </div>
      </section>
      <section class="services">
          <div class="Essentials edit">
            <h5>Services</h5>
          <div>
            <h2 class="bold"> Comprehensive Pharmacy Services</h2>
            <p class="margin grey">Our pharmacy offers comprehensive services, including prescriptions, health consultations, and wellness support for your needs.</p>
          </div>
        <button>All services ➔</button>
        </div>
        <div class="all-service">
          <div class="service">
            <img src="home-page-images/service1.jpeg" alt="service">
            <h4>01 <span>  /</span>Prespection Filling</h6>
            <p>Fast and accurate prescription filling to ensure you get the medications you need with care and convenience.</p>
            <button id="hello">➔</button>
          </div>
          <div class="service">
            <img src="home-page-images/service3.jpeg" alt="service">
            <h4>02 <span> /</span>Home  Delivery</h4>
            <p>Convenient home delivery ensures you receive your medications safely and on time, right at your doorstep</p>
            <button>➔</button>
          </div>
          <div class="service">
            <img src="home-page-images/service2.jpeg" alt="service">
            <h4>03 <span> /</span>Health Consultation</h4>
            <p>Get expert health consultations for personalized advice and guidance on medications and wellness.</p>
            <button>➔</button>
          </div>
        </div>
        
      </section>
      <section class="Featured Team">
        <div class="Essentials">
          <h5>Team</h5>
          <div>
            <h2 class="bold">The Heart of Our  <span>Pharmacy</span></h2>
            <p class='margin grey'>The heart of our pharmacy lies in our dedication to quality care, personalized service, and your overall well-being. We strive to provide trusted medications, expert guidance, and a supportive environment to help you live healthier every day</p>
          </div>
        <button>All Team ➔</button>
        </div>
        <ul class="Doctors">
          <li>
            <img src="home-page-images/Doc1.png" alt="Doc2">
            <p class="title">Chief Pharmacist</p>
            <p class="who">Dr.Ted Shmosby,PharmacyD</p>
            <p class="exp">Work experience- 15 years</p>
            <button>➔</button>
          </li>
          <li>
            <img src="home-page-images/Doc2.png" alt="Doc1">
            <p class="title">Director of Health services </p>
            <p class="who">Dr.Lisa Davis,PharmacyD</p>
            <p class="exp">Work experience- 8 years</p>
            <button>➔</button>
          </li>
          <li>
            <img src="home-page-images/Doc3.png" alt="Doc1">
            <p class="title">Medical Advisor</p>
            <p class="who">Dr.Amadou Roberts,PharmacyD</p>
            <p class="exp">Work experience- 12 years</p>
            <button>➔</button>
          </li>
        </ul>

      </section>
<section class="featured vaccination-section">
  <div class="section-header">
    <h5>Vaccination</h5>
    <div>
      <h2 class="bold">Importance of Immunisation <span>Vaccination</span></h2>
      <p class='margin grey'>Vaccination is crucial for preventing diseases, protecting communities, and saving lives.</p>
    </div>
    <button class="action-btn">Vaccinate now ➔</button>
  </div>
  
  <div class="table-video-container">
    <div class="table-wrapper">
      <h3>Vaccine Information</h3>
      <table class="vaccine-table">
        <tr>
          <th>Vaccine</th>
          <th>Effectiveness (%)</th>
          <th>Protection Duration</th>
          <th>Doses Required</th>
        </tr>
        <tr>
          <td>COVID-19 (mRNA)</td>
          <td>95%</td>
          <td>6-12 months</td>
          <td>2 + boosters</td>
        </tr>
        <tr>
          <td>Flu Vaccine</td>
          <td>40-60%</td>
          <td>1 year</td>
          <td>1 annually</td>
        </tr>
        <tr>
          <td>Hepatitis B</td>
          <td>90%</td>
          <td>Lifetime</td>
          <td>3</td>
        </tr>
        <tr>
          <td>Measles</td>
          <td>97%</td>
          <td>Lifetime</td>
          <td>2</td>
        </tr>
        <tr>
          <td>Polio</td>
          <td>99%</td>
          <td>Lifetime</td>
          <td>4</td>
        </tr>
        <tr>
          <td>HPV</td>
          <td>97%</td>
          <td>Lifetime</td>
          <td>2-3</td>
        </tr>
      </table>
    </div>
    
    <div class="video-wrapper">
      <h3>Why Vaccines Matter</h3>
      <div class="video-container">
        <iframe src="home-page-images/The Importance of Vaccinations.mp4" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>   
      <section class="Featured">
        <div class="Essentials">
        <h5>Review</h5>
        <div>
            <h2 class="bold"> Testimonials That Inspire Us</h2>
            <p class="margin grey">Libero diam auctor tristique hendrerit in eu vel id. Nec leo amet suscipit nulla. Nullam vitae sit tempus diam.</p>
        </div>
        <button>All Review</button>
        </div>
        <p>"Pharmacy Store is my go-to for over-the-counter medications and health products. They have a wide selection, and their website makes it easy to order online. The only improvement I'd suggest is expanding their beauty and skincare section."</p>
    </section>
   <section class="Featured tete">
    <div class="Essentials">
      <h5>Contact</h5>
      <div>
        <h2 class="bold">Have Questions? <br>Contact Us!</h2>
      </div>
    <img src="home-page-images/Elipse (2).svg" alt="Elipse">
    </div>
    </section>
   <section class="contact Featured">
        <div class="call">
           <div class="name caller">
                <img src="home-page-images/icons8-phone-48.png" alt="">
                <div class="name-text">
                    <p>Call Us</p>
                    <p class="element">+21620653923</p>
                </div>
                <p class="Icon">→</p>
            </div> 
           <div class="name email">
                <img src="home-page-images/icons8-mail-50.png" alt="">
                <div class="name-text">
                    <p>Email</p>
                    <p class="element">Mypharmacyweb@gmail.com</p>
                </div>        
                <p class="Icon">→</p>      
            </div>    
        </div>
        <img src="home-page-images/contact photo.jpg" alt="">
   </section>
   
   
</main>
<footer class="modern-footer">
  <div class="footer-top">
    <div class="footer-brand">
      <div class="brand-logo">
        <img src="home-page-images/logo.png" alt="Pharmacy_logo">
        <div class="brand-text">
          <p class="brand-name">Pharmacy</p>
          <p class="brand-tagline">store.</p>
        </div>
      </div>
      <p class="footer-motto">Your health is our priority</p>
      <div class="social-icons">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
    
    <div class="footer-links">
      <div class="link-column">
        <h4>Company</h4>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Blog & News</a></li>
        </ul>
      </div>
      
      <div class="link-column">
        <h4>Resources</h4>
        <ul>
          <li><a href="#">Educational</a></li>
          <li><a href="#">Mental Health Resources</a></li>
          <li><a href="#">Nutrition</a></li>
          <li><a href="#">Medication Guides</a></li>
        </ul>
      </div>
      
      <div class="link-column">
        <h4>Contact Us</h4>
        <ul>
          <li><i class="bi bi-telephone"></i> +21620653923</li>
          <li><i class="bi bi-envelope"></i> Mypharmacyweb@gmail.com</li>
          <li><i class="bi bi-geo-alt"></i> 123 Health Street, Medical City</li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>Copyright © 2025 Pharmacy Store | Design by 5dheeeee</p>
    <div class="legal-links">
      <a href="#">Terms of Use</a>
      <span>|</span>
      <a href="#">Privacy Policy</a>
    </div>
    <a href="#" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>
</footer> 
<script src="index.js"></script>
</body>
</html>
