<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "sections/head.php"; ?>
  <link rel="stylesheet" href="css/style.css" />
  <link
    rel="stylesheet"
    href="css/about.css" />
  <title>About us - webProjects</title>
</head>


<body>
  <?php include "sections/header.php"; ?>

  <div class="gradient-layer"></div>
  <video autoplay loop muted plays-inline class="backgroundclip">
    <source src="assets/videos/aboutusbgvideo.mp4" type="video/mp4" class="fade-in">
  </video>

  <div class="fade-in">


    <section id="AboutUsSection">
      <div class="container my-5 py-5 px-1">
        <div class="aboutusbox">
          <h1 class="text-center text-dark">Our Purpose</h1>
          <p class="text-center" style="color:#202429">
            We are <strong> Art Around </strong>, a passionate and dedicated initiative founded by Joseph Bou Obeid and Jad Bou Obeid, committed to showcasing the beauty and diversity of art from across the globe.
            Our goal is to spread awareness of inspiring artistic expression, foster cultural exchange, and keep people updated on the latest art events and trends.
            We believe in the power of art to connect individuals, inspire change, and promote understanding across cultures and backgrounds.
          </p>
        </div>
      </div>

    </section>

    <section id="OurStoryPage">
      <div class="container my-1 py-2 px-1">
        <div class="aboutusbox">
          <h1 class="text-center" style="color:#202429; ">Our Story</h1>
          <p class="text-center" style="color:#202429">
            The idea for <strong>Art Around the World</strong> was born during a late-night conversation between Joseph and Jad, two cousins and lifelong art enthusiasts.
            While reflecting on their shared passion for discovering and appreciating art, they realized how many incredible artists and events go unnoticed around the world.
            Motivated by their desire to bridge this gap, they co-founded <strong>Art Around the World</strong>, a platform dedicated to showcasing art, inspiring connection, and bringing people closer through creativity.
            Together, they turned a shared dream into a thriving initiative, proving that art has the power to transcend boundaries and unite people across cultures.
          </p>
        </div>
      </div>
    </section>

    <section class="team-members py-2 content">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-6 mb-6 mt-5">

            <div class="aboutusbox">

              <h2 class="text-center text-dark py-2">Meet Our Team</h2>
              <p class="text-dark" style="text-align: center;">Two founders. One big idea.</p>

              <div class="row justify-content-center">
                <div class="col-md-6  mb-6 mt-5">
                  <div class="team-member">
                    <a href="https://www.instagram.com/joseph" target="_blank">
                      <img src="assets/images/icons/pfp.jpg" alt="Team Member 1" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; margin-left: 10px;"></a>
                    <h5 class="mt-2" style="color: white;">Joseph</h5>
                  </div>
                </div>
                <div class="col-md-6 mb-6 mt-5">
                  <div class="team-member">
                    <a href="https://www.instagram.com/joseph" target="_blank">
                      <img src="assets/images/icons/pfp.jpg" alt="Team Member 2" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; margin-left: 10px;"></a>
                    <h5 class="mt-2" style="color: white;">Jad</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>



    <section id="Questions" class="Questions">
      <section class="QandA content my-5">
        <h2 class="text-center text-light py-2">Frequently Asked Questions</h2>

        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <strong> Q1:</strong> How can I get involved with Art Around the World? </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">
                There are many ways to get involved with Art Around the World! You can stay connected by following us on social media, attending featured art events, and sharing your own art. We also welcome collaborations with artists, curators, and organizations who share our passion for global art. Feel free to reach out to us if you're interested in partnering or contributing on this <a href="#">form</a>! </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <strong>Q2:</strong> What types of art does Art Around the World feature?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                We feature a wide variety of art forms, including visual art, performance art, sculpture, digital art, and more. Our goal is to showcase the diverse ways in which art is expressed across different cultures and communities worldwide, embracing both traditional and contemporary forms. </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <strong>Q3:</strong> How does Art Around the World benefit the art community?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
              <div class="accordion-body">
                We bring attention to emerging and established artists, provide updates on art trends and events, and create opportunities for cultural exchange. By highlighting the value of artistic expression, Art Around the World fosters inspiration, collaboration, and appreciation within the global art community.</div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
<?php include "sections/footer.php"; ?>

</html>