<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "sections/head.php"; ?>
  
    <link
        rel="stylesheet"
        href="css/style.css" />
        <link
        rel="stylesheet"
        href="css/gallery.css" />
    <title>Gallery - webProjects</title>
</head>


<body>
    <?php include "sections/header.php"; ?>
    <div class="gradient-layer"></div>
  <video autoplay loop muted plays-inline class="backgroundclip">
    <source src="assets/videos/1214.mp4" type="video/mp4" class="fade-in">
  </video>
    <section id="GalleryPage" class="fade-in">
        <div>
            <h1  style="text-align: center; margin-top:70px;">
            <span class="title-word title-word-1">Your</span>
                 <span class="title-word title-word-2">Global Gallery</span>
                 <span class="title-word title-word-4">Unveiling</span>
                 <span class="title-word title-word-5">Wonders</span>
            </h1><br>
            <p class="col-6 col-lg-6 col-md-8 col-sm-8 col-xs-12" style="text-align: center;">Our gallery is updated monthly to bring you the most popular art displays from around the world. 
                Each piece reflects the trending creativity and cultural highlights of the month. 
                To dive deeper into the story behind each artwork, simply click on the image. 
                Happy exploring!</p>
            <div class="gallery">

                <div class="gallery-item">
                    <div class="overlay">
                        <img src="assets/images/gallery/gallery1.jpg" alt="Image 1" >
                        <div class="overlay-text" data-bs-toggle="modal" data-bs-target="#galleryModal1">
                            <p>Yayoi Kusama: Infinity Mirrors</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="overlay">
                        <img src="assets/images/gallery/gallery2.jpg" alt="Image 2" >
                        <div class="overlay-text" data-bs-toggle="modal" data-bs-target="#galleryModal2">
                            <p>Damien Hirst: Treasures from the Wreck of the Unbelievable<p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="overlay">
                        <img src="assets/images/gallery/gallery3.jpg" alt="Image 3" >
                        <div class="overlay-text" data-bs-toggle="modal" data-bs-target="#galleryModal3">
                            <p>Danh Vo: Indivisible</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="overlay">
                        <img src="assets/images/gallery/gallery4.jpg" alt="Image 4" >
                        <div class="overlay-text" data-bs-toggle="modal" data-bs-target="#galleryModal4">
                            <p>Lynette Yiadom-Boakye: Fly in League with the Night</p>
                        </div>
                    </div>
                </div><br><br><br><br>
                <div class="gallery-item">
                    <div class="overlay">
                        <img src="assets/images/gallery/gallery5.jpg" alt="Image 5">
                        <div class="overlay-text"  data-bs-toggle="modal" data-bs-target="#galleryModal5">
                            <p>Njideka Akunyili Crosby: I Do Not Know Where My Next Meal Is Coming From </p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="overlay">
                        <img src="assets/images/gallery/gallery6.jpg" alt="Image 6" >
                        <div class="overlay-text" data-bs-toggle="modal" data-bs-target="#galleryModal6">
                            <p>Tschabalala Self: The Everlasting Flame</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <div class="modal fade" id="galleryModal1" tabindex="-1" aria-labelledby="galleryModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel1">Yayoi Kusama: Infinity Mirrors</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                The renowned Japanese artist's immersive installations continue to mesmerize viewers. These mirrored rooms filled with lights and patterns create a mind-bending experience.                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal2" tabindex="-1" aria-labelledby="galleryModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel2">Damien Hirst: Treasures from the Wreck of the Unbelievable</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                This is one of the controversial exhibition showcases in Hirst's latest series of sculptures and paintings, inspired by ancient artifacts and mythologies. 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal3" tabindex="-1" aria-labelledby="galleryModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel3">Victor Vasarely: The Garden of Earthly Delights</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Vo's installation art often incorporates found objects and personal artifacts, creating poignant and thought-provoking works that explore themes of memory, identity, and history.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal4" tabindex="-1" aria-labelledby="galleryModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel4">Lynette Yiadom-Boakye: Fly in League with the Night</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                Yiadom-Boakye's enigmatic portraits of invented figures challenge traditional notions of representation and identity.

</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal5" tabindex="-1" aria-labelledby="galleryModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel5">Njideka Akunyili Crosby: I Do Not Know Where My Next Meal Is Coming From</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Leigh's monumental sculptures and installations explore the experiences of Black women, drawing inspiration from African art and architecture.                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal6" tabindex="-1" aria-labelledby="galleryModalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel6">Tschabalala Self: The Everlasting Flame</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Murillo's abstract paintings and installations explore themes of migration, displacement, and the complexities of global capitalism.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper and jQuery) -->



    <?php include "sections/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>


</body>

</html>