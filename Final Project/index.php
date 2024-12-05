<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wellness Spa</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
 
  <!-- Hero Section -->
  <header class="hero">
    <div class="hero-content">
      <h1>Your Wellness Journey Starts Here</h1>
      <div class="hero-buttons">
        <button class="cta-btn">Book Now</button>
        <button class="cta-btn secondary">View Services</button>
      </div>
    </div>
  </header>

  <div class="container">
    <!-- Services Overview -->
    <section class="services">
      <h2>Our Popular Services</h2>
      <div class="services-grid" id="services-grid">
        <!-- JavaScript dynamically loads services here -->
      </div>
    </section>

    <aside class="sidebar">
      <h2>Filters</h2>
      <div class="filter">
        <h3>Service Type</h3>
        <select id="service-type">
          <option value="all">All</option>
          <option value="massage">Massage</option>
          <option value="facial">Facial</option>
          <option value="aromatherapy">Aromatherapy</option>
        </select>
      </div>
      <div class="filter">
        <h3>Price Range</h3>
        <input type="range" id="price-range" min="0" max="100" value="100">
        <span id="price-value">$100</span>
      </div>
      <div class="filter">
        <h3>Duration</h3>
        <select id="duration">
          <option value="all">All</option>
          <option value="30">30 minutes</option>
          <option value="60">60 minutes</option>
          <option value="90">90 minutes</option>
        </select>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="service-list">
      <h1>Available Services</h1>
      <div class="sorting">
        <label for="sort-by">Sort by:</label>
        <select id="sort-by">
          <option value="popularity">Popularity</option>
          <option value="price">Price</option>
          <option value="duration">Duration</option>
        </select>
      </div>
      <div class="services-grid" id="services-grid">
        <!-- JavaScript dynamically loads services here -->
      </div>
    </main>

    <!-- Testimonials -->
    <section class="testimonials">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-slider" id="testimonial-slider">
        <!-- JavaScript dynamically loads testimonials here -->
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
      <h2>Take the First Step to Wellness</h2>
      <button class="cta-btn1">Create an Account</button>
      <button class="cta-btn secondary">Schedule Your First Session</button>
    </section>
  </div>

  <script src="script.js"></script>
</body>
</html>