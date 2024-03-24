<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/sofa.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style1.css">
    <title>Furniture Shop</title>

  </head> 
  <body>
    <!-- Menu -->
    
    <div class="menu">
        <div class="container flex">
          <!-- Mobile Button -->
          <div class="mobile-btn">
            <ion-icon name="grid"></ion-icon>
          </div>
          
          <img src="images/sofa.png" alt="Our Logo" class="logo-png" />
          
  
          <ul class="nav">
            <li class="nav-item"><a href="#">Home</a></li>
            <li class="nav-item"><a href="#why-us">Features</a></li>
            <li class="nav-item"><a href="#testimonial">Testimonial</a></li>
            <li class="nav-item"><a href="#products">Products</a></li>
            <li class="nav-item"><a href="slider.html">Support</a></li>
          </ul>
  
           <!--- <a href="register_form.php" class="btn">Login</a>-->

           <!---<a href="index3.php" class="btn">Login-Validim</a> -->

         
  
           <div class="user-box">
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
        </div>
      </div>
      <!-- End Menu -->
  
      <!-- Header -->
      <header class="header">
        <div class="container flex">
          <div class="text">
            <h1 class="mb">
              We design and build <br />
              better <span>furniture</span>, for a better life
            </h1>
  
            <p class="mb">
              In a small shop in the heart of Pristina, we spend our days
              relentlessly perfecting the chair. The result is a perfect blend of
              beauty and comfort, that will have a lasting impact on your health.
            </p>
  
            <a href="index2.php" class="btn mt">Shop Now</a>
          </div>
  
          <div class="visual">
            <img src="images/pexels-julie-aagaard-1374125.jpg" alt="Furniture" />
          </div>
        </div>
      </header>
      
      
    <!-- Why Us -->
      <section>
        <div class="section" id="why-us">
          <h2 class="section-title">
            What makes our furniture <span>special</span>
          </h2>
          <div class="container flex grid-3-cols">
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="features-icon"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"
                />
              </svg>
  
              <p class="features-title"><strong>Science meets design</strong></p>
              <p class="features-text">
                The modern style is all about clearer looks with minimal ornaments. The more focus is on clean lines, geometric shapes, and angles.
              </p>
            </div>
  
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="features-icon"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"
                />
              </svg>
  
              <p class="features-title">
                <strong>Maximal comfort</strong>
              </p>
              <p class="features-text">
                In addition to aesthetic and functional features our furniture is also known, for its comfort and high stability.
              </p>
            </div>
  
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="features-icon"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                />
              </svg>
  
              <p class="features-title">
                <strong>Ethical and sustainable</strong>
              </p>
              <p class="features-text">
                For years, we’ve been familiar with the term “minimalist design” and the characteristic of a simple design with light colours.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us -->
  
      <!-- Testimonial -->
      <div class="section testimonial-section" id="testimonial">
        <div class="container flex">
          <div class="visual">
            <img
              src="images/pexels-antoni-shkraba-7579303.jpg"
              alt="people sitting and talking"
            />
          </div>
          <div class="testimonial-box">
            <h2>"We couldn't live without these chairs anymore"</h2>
            <blockquote class="testimonial-text">
              I can honestly say of all the companies we have dealt with in recent years, the your company are probably the best we have encountered for customer service, reliability and quality of product. One of the rare occasions where it really is worth paying more and we can see the difference
            </blockquote>
            <p class="testimonial-author">&mdash; Tom and Sarah Johnson</p>
          </div>
        </div>
      </div>
      <!-- End Testimonial -->
  
      <!-- Products -->
      
      <div class="section " id="products">
        <section>
          <h2 class="product-title">Our  <span>bestselling</span>  chairs</h2>
          <div class="grid-3-cols">
            <figure class="chair">
              <img src="images/chair-1.jpg" alt="Chair" />
              <div class="chair-box">
                <h3>The Laid Back</h3>
                <ul class="chair-details">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"
                      />
                    </svg>
  
                    <span>Leisure and relaxing</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
  
                    <span>Comfortable for 4h</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525"
                      />
                    </svg>
  
                    <span>Vegan leather</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"
                      />
                    </svg>
  
                    <span>Weighs 16 kg</span>
                  </li>
                </ul>
                <div class="chair-price">
                  <strong>250€</strong>
                  <a href="#" class="btn btn--small">Add to cart</a>
                </div>
              </div>
            </figure>
  
            <figure class="chair">
              <img src="images/chair-2.jpg" alt="Chair" />
              <div class="chair-box">
                <h3>The Worker Bee</h3>
                <ul class="chair-details">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"
                      />
                    </svg>
                    <span>Work</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                    <span>Comfortable for 8h</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525"
                      />
                    </svg>
                    <span>Vegan leather</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"
                      />
                    </svg>
                    <span>Weighs 22 kg</span>
                  </li>
                </ul>
                <div class="chair-price">
                  <strong>525€</strong>
                  <a href="#" class="btn btn--small">Add to cart</a>
                </div>
              </div>
            </figure>
  
            <figure class="chair">
              <img src="images/chair-3.jpg" alt="Chair" />
              <div class="chair-box">
                <h3>The Chair 4/2</h3>
                <ul class="chair-details">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"
                      />
                    </svg>
                    <span>Leisure and relaxing</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                    <span>Comfortable all day!</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525"
                      />
                    </svg>
                    <span>Organic cotton</span>
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="chair-icon"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"
                      />
                    </svg>
                    <span>Weighs 80 kg</span>
                  </li>
                </ul>
                <div class="chair-price">
                  <strong>250€</strong>
                  <a href="#" class="btn btn--small">Add to cart</a>
                </div>
              </div>
            </figure>
          </div>
          <section/>
      </div>
      <!-- End Testimonial -->
      <!-- Support -->
    <div class="section" id="support">
      <div class=" support-box grid-3-cols">
       <!-- <div class="discount-text"> -->
          <div class="about-us">
          <h2 class="primary mb"> About <span>Us</span> </h2>
          <p><a href="#" class="features-title-s">More About Us</a></p>
          <p><a href="#" class="features-title-s">Furniture Professional</a></p>
          <p><a href="#" class="features-title-s">Careers</a></p>
          <p><a href="#" class="features-title-s">Locations</a></p>
         
         
          </div>

          <div class="costumer-service">
            <h2 class="primary mb">Costumer  <span>Service</span> </h2>
           <p> <a href="#" class="features-title-s">My Account</a></p>
            <p><a href="#" class="features-title-s">My Orders</a></p>
           <p> <a href="#" class="features-title-s">Track My Order</a></p>
            <p><a href="#" class="features-title-s">Return Policy</a></p>
            <p><a href="#" class="features-title-s">Help Center</a></p>
          

             
            </div>

            <div class="contact-us">
              <h2 class="primary mb"> Contact <span>Us</span> </h2>
              <button class="btn btn--small btn-3">Quick Service</button><br>
              <button class="btn btn--small btn-3">Call Us</button>
              <div class="c-service">
              <p ><strong>Costumer Service</strong></p>
              <p class="features-text">Closed. Opens 8:00AM EST</p>
            </div>

            <div class="sh-assis">
                <p><strong>Shopping Assistance</strong></p>
                <p class="features-text">
                  Closed. Opens 8:00AM EST
                </p>
              </div>
            </div>
              </div>

      </div>
    </div>
    <!-- End Support -->

    <!-- Footer -->
    <footer class="footer">
      <div class="container flex">
        <p class="tertiary">
          &copy; 2024. All Rights Reserved.
        </p>
      </div>
    </footer>

    <!-- End Footer -->

  </body>

</html>

