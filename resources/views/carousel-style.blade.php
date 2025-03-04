<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="carousel-container position-relative overflow-hidden py-4">
            <div class="carousel-track d-flex position-relative start-0" id="carouselTrack">

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Global, Instant, and On-Demand Due Diligence</h5>
                        <p class="card-text" font>
                            Access real-time company background checks across multiple jurisdictions worldwide.
                        </p>
                        <p class="card-text">
                            Perform instant due diligence searches without long wait times or manual intervention.                        
                        </p>
                    </div>
                </div>

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Fully Digital & Automated Platform</h5>
                        <p class="card-text">
                            No paperwork, no delays—get reports via a self-service e-commerce-style platform.                        
                        </p>
                        <p class="card-text">
                            Seamless integration with APIs for businesses needing bulk verifications.                 
                        </p>
                    </div>
                </div>

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Comprehensive Risk Assessments & Reports</h5>
                        <p class="card-text">
                            Covers Financial Health, Regulatory Compliance, Legal Risks, Ownership Structures, and Adverse Media Screening.
                        </p>
                        <p class="card-text">
                            Provides insights into Sanctions, Politically Exposed Persons (PEPs), and AML/CTF compliance.                      
                        </p>
                        <p class="card-text">
                            Provides a Cyber risk rating of your online environment                   
                        </p>
                    </div>
                </div>

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Transparent & Pay-As-You-Go Pricing</h5>
                        <p class="card-text">
                            No long-term contracts or hidden fees—pay only for the reports you need.
                        </p>
                        <p class="card-text">
                            Flexible pricing tiers for startups, SMEs, and enterprises.                       
                        </p>
                    </div>
                </div>

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Customizable Reports & Deep Dives</h5>
                        <p class="card-text">
                            Choose basic screenings or in-depth risk assessments based on business needs.
                        </p>
                        <p class="card-text">
                            Option to add enhanced due diligence (EDD) for high-risk transactions or jurisdictions.                       
                        </p>
                    </div>
                </div>

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Regulatory Compliance & Global Standards</h5>
                        <p class="card-text">
                            Adheres to GDPR, FATF guidelines, and other global compliance frameworks.
                        </p>
                        <p class="card-text">
                            Helps businesses meet KYC, KYB, and AML compliance requirements effortlessly.                      
                        </p>
                    </div>
                </div>

                <div class="carousel-card card d-flex flex-shrink-0 me-4 rounded-3" style="width: 350px" >
                    <img src="{{ asset('img/card3.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Seamless User Experience & API Integration</h5>
                        <p class="card-text">
                            Easy-to-use online dashboard to monitor and track reports.                        
                        </p>
                        <p class="card-text">
                            API-enabled for bulk screening and enterprise-level automation.                        
                        </p>
                        <p class="card-text">
                            Allows for multiple Users access.                   
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


      <script>
          document.addEventListener('DOMContentLoaded', function() {
              const track = document.getElementById('carouselTrack'); // Get the carousel track container
              const cards = [...track.querySelectorAll('.carousel-card')]; // Get all cards as an array
              
              // Calculate the total width of one card including margin
              const cardWidth = cards[0].offsetWidth + parseInt(window.getComputedStyle(cards[0]).marginRight);
              
              // Duplicate each card and append it to the track (for infinite effect)
              cards.forEach(card => {
                  const clone = card.cloneNode(true); // Clone the card
                  track.appendChild(clone); // Append clone to the track
              });
  
              let position = 0;  // Position of the track (initially at 0)
              let speed = 1;  // Movement speed (pixels per frame)
              let animationId = null; // Store the animation reference
              let isPaused = false; // Track whether animation is paused
              
              // Function to move the carousel
              function animateCarousel() {
                  if (!isPaused) {
                      position -= speed; // Move the track to the left
  
                      // If the first card moves completely out of view, shift it to the end
                      if (position <= -cardWidth) {
                          const firstCard = track.querySelector('.carousel-card'); // Get the first card
                          track.appendChild(firstCard); // Move it to the end
                          position += cardWidth; // Reset position slightly forward to maintain smooth transition
                      }
                      
                      // Apply the transform to move the track
                      track.style.transform = `translateX(${position}px)`;
                  }
                  
                  // Request the next frame for smooth animation
                  animationId = requestAnimationFrame(animateCarousel);
              }
              
              // Start the animation loop
              animationId = requestAnimationFrame(animateCarousel);
              
              // Pause animation when the mouse enters the carousel
              track.addEventListener('mouseenter', () => {
                  isPaused = true;
              });
              
              // Resume animation when the mouse leaves the carousel
              track.addEventListener('mouseleave', () => {
                  isPaused = false;
              });
              
          });
      </script>
</body>
</html>