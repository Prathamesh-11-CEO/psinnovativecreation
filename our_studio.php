<?php include "layout/header.php" ?>

<div class="constructit-subheader">
    <span class="constructit-subheader-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="constructit-subheader-text">
                    <h1>Our Studio</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="constructit-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Our Studio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="constructit-main-content constructit-content-padding">
    <div class="constructit-main-section">
        <div class="container">
            <div class="our-projects">
                <h2>From Our Studio</h2>
                <div class="row">
                    <div class="gallery-grids tabcontent active" id="Appartment">
                        <div class="col-md-4 gal-grid">
                            <div class="gallery-item" onclick="openModal(0)">
                                <img src="assets/images/studio/studio-01_wadgaon.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Wadgaon, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid">
                            <div class="gallery-item" onclick="openModal(1)">
                                <img src="assets/images/studio/studio-02_mandavgan.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Mandavgan Farata, Ta-Shirur, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(2)">
                                <img src="assets/images/studio/studio-03_amravati.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Amravati, Maharashtra</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(3)">
                                <img src="assets/images/studio/studio-04_nigadi.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Tower Line, Nigadi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(4)">
                                <img src="assets/images/studio/studio-05_purandar.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Purandar</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(5)">
                                <img src="assets/images/studio/studio-06_marunji.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Marunji, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(6)">
                                <img src="assets/images/studio/studio-07_walhekarwadi.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Walhekarwadi, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(7)">
                                <img src="assets/images/studio/studio-08_amravati.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Amravati, Maharashtra</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(8)">
                                <img src="assets/images/studio/studio-09_karnataka.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Karnataka, India</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(9)">
                                <img src="assets/images/studio/studio-10_karnataka.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Karnataka, India</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(10)">
                                <img src="assets/images/studio/studio-11_kalewadi.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Kalewadi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(11)">
                                <img src="assets/images/studio/studio-12_panchgani.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Panchgani, Maharashtra</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(12)">
                                <img src="assets/images/studio/studio-13_panchgani.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Panchgani, Maharashtra</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(13)">
                                <img src="assets/images/studio/studio-14_panchgani.png" alt="studio_img" />
                                <div class="overlay">
                                    <h3>Panchgani, Maharashtra</h3>
                                </div>
                            </div>
                        </div>

                        <div id="imageModal" class="modal">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <div class="modal-content-wrapper">
                                <img class="modal-content" id="modalImage" />
                            </div>
                            <button class="prev" onclick="changeImage(-1)">&#10094;</button>
                            <button class="next" onclick="changeImage(1)">&#10095;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php include "layout/footer.php" ?>