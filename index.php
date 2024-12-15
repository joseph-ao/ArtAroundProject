<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include "sections/head.php"; ?>
    <link
    rel="stylesheet"
    href="../webProject/css/style.css" />
        <title>Home - webProjects</title>
    </head>

<body>
    <?php include "sections/header.php"; ?>
    <section id="HomePage">
    <div class="container fade-in pt-5">
      <div class="row align-items-center" style="min-height: 100vh">
        <div class="col-md-6 mb-4 mt-4">
          <h1>Art Around The World</h1>
          <p class="firstpagetext">
            Discover the beauty of global art through our curated collections and stay inspired with updates on the latest art expos around the world!</p><br>
          <p>Check out this month's expos taking place into these four countries!</p>
          <br>
          <a href="#AboutUsSection" type="button" class="btn btn-light btn-lg">Dive In</a>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card-container d-flex flex-wrap justify-content-end">
            <div class="card card1 m-3">
              <h5>France</h5>
              <a href="locations.php" style="text-decoration:none;  backdrop-filter: blur(15);">
                <p>Elegant, Artistic</p>
              </a>
            </div>
            <div class="card card2 m-3">
              <h5>Greece</h5>
              <a href="locations.php" style="text-decoration:none; ">
                <p style="justify-content:center">Mythical, Historical</p>
              </a>
            </div>
            <div class="card card3 m-3">
              <h5>Italy</h5>
              <a href="locations.php" style="text-decoration:none;">
                <p>Vibrant, Cultural</p>
              </a>
            </div>
            <div class="card card4 m-3">
              <h5>Mexico</h5>
              <a href="locations.php" style="text-decoration:none;">
                <p>Timeless, Culinary</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="AboutUsSection">
    <div class="aboutusbox">
      <div class="aboutustext">
        <h3>Take a sneak peek into our journey and discover how this initiative came to life. A passion for art, culture, and connection at its core.
          Click to learn more about our story and the creators behind it!</h3>
        <a href="about.php" type="button" class="btn btn-light btn-lg">About</a>


      </div>
      <div class="aboutusimage">
        <img src="assets/images/home-images/Homepageabout.png" alt="David Michelangelo">
      </div>
    </div>
    </div>

    <section id="GallerySection">
      <div class="gallerybox">
        <div class="gallerytext">
          <h3>Explore this month's gallery of celebrated masterpieces from around the world, complete with insights on each piece.
            Click to discover and be inspired!</h3>
          <a href="gallery.php" type="button" class="btn btn-light btn-lg">Gallery</a>


        </div>
        <div class="galleryimage">
          <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/carousel/carousel1.jpg" class="container d-flex justify-content-end w-100 h-50" alt="street art">
              </div>
              <div class="carousel-item">
                <img src="assets/images/carousel/carousel2.png" class="container d-flex justify-content-end w-100 h-50" alt="el manja">
              </div>
              <div class="carousel-item">
                <img src="assets/images/carousel/carousel3.png" class="container d-flex justify-content-end w-100 h-50" alt="vast sea">
              </div>
            </div>

          </div>
        </div>
      </div>


      <section id="NewsletterSection">
        <div class="Contactbox">
          <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ZVlQOytFCRI?si=2NcrLnakA2L5k1gX&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>          </div>
          <div class="form">
            <h2 style="color: #222428;">Subscribe to Our Newsletter:</h2>
            <div class="mb-3">
              <form>
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    aria-describedby="emailHelp" />
                  <div id="emailHelp" class="form-text">
                    Don't worry! Your email isn't shared with anyone else.
                  </div>
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input"  />
                  <label class="form-check-label" >
                    I agree on receiving news letters and monthly updates on art events
                    taking place around the world.</label>
                </div>
                <button type="submit" class="btn btn-light">Submit</button>
              </form>
            </div>
          </div>
        </div>
        </div>
      </section>


    </section>
    <?php include "sections/footer.php"; ?>
</body>

</html>