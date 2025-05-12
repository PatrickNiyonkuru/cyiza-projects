<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sportify Store</title>
   <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav>
      <div class="logo">SPORT<span>LAB</span></div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="home" class="home">
    <div class="overlay">
      <h1>Level Up Your Game</h1>
      <p>Shop Jerseys, Gym Gear & More</p>
      <a href="#products" class="btn">Shop Now</a>
    </div>
  </section>

  <section id="products" class="products">
    <h2>Our Products</h2>
    <div class="product-grid">
      <div class="product-card">
     <img src="MARATHON BOLIVIA JERSEY - Spacio Creativo.jpeg" alt="">
        <h3>Team Jersey</h3>
        <p>$25</p>
      </div>
      <div class="product-card">
        <img src="adidas Essential Weightlifting Gloves, Adjustable Fingerless Workout Gloves.jpeg" alt="Gym Gloves" />
        <h3>Gym Gloves</h3>
        <p>$15</p>
      </div>
      <div class="product-card">
        <img src="Big Size 45 46 Blade Bounce Men Sneakers Autumn Outdoors Breathable Sports Running Shoes for Man Sport Used on Treadmill A65White-10.jpeg" alt="Sports Shoes" />
        <h3>Sports Shoes</h3>
        <p>$40</p>
      </div>
      <div class="product-card">
        <img src="The 16 Best Yoga Mats.jpeg" alt="Yoga Mat" />
        <h3>Yoga Mat</h3>
        <p>$20</p>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <h2>About Us</h2>
    <p>Sportify is your one-stop shop for premium sportswear and gym accessories. We believe in helping every athlete perform their best with quality gear.</p>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Us</h2>
    <form onsubmit="handleSubmit(event)">
      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Sportify Store. All rights reserved.</p>
  </footer>

  <script>
    function handleSubmit(event) {
      event.preventDefault();
      alert("Thank you for contacting Sportify! We'll get back to you soon.");
    }
  </script>
</body>
</html>
