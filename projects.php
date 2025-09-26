<?php include "layout/header.php" ?>

<div class="constructit-subheader">
    <span class="constructit-subheader-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="constructit-subheader-text">
                    <h1>Projects</h1>
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
                        <li class="active">Projects</li>
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
                <h2>PS INNOVATIVE Creation Projects</h2>
                <div class="row">
                    <div class="gallery-grids tabcontent active" id="Appartment">

                        <!-- Existing projects -->
                        <div class="col-md-4 gal-grid">
                            <div class="gallery-item" onclick="openModal(0)">
                                <img src="assets/images/projects/ps_project-01.png" alt="Mountain Valley" />
                                <div class="overlay">
                                    <h3>Location - Sanaswadi, Ta-Shirur, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid">
                            <div class="gallery-item" onclick="openModal(1)">
                                <img src="assets/images/projects/ps_project-02.png" alt="Tropical Paradise" />
                                <div class="overlay">
                                    <h3>Location - Kalewadi, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(2)">
                                <img src="assets/images/projects/ps_project-03.png" alt="Enchanted Forest" />
                                <div class="overlay">
                                    <h3>Location - Latur</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(3)">
                                <img src="assets/images/projects/ps_project-04.png" alt="Sunlit Woods" />
                                <div class="overlay">
                                    <h3>Location - Talegaon Dabhade, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(4)">
                                <img src="assets/images/projects/ps_project-05.png" alt="Serene Lake" />
                                <div class="overlay">
                                    <h3>Location - Wadgaon, Pune</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(5)">
                                <img src="assets/images/projects/ps_project-06.png" alt="Mountain Trail" />
                                <div class="overlay">
                                    <h3>Location - Ratnagiri (Wearhouse)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(6)">
                                <img src="assets/images/projects/ps_project-07.png" alt="Mountain Trail" />
                                <div class="overlay">
                                    <h3>Location - Ratnagiri (Industrial shed)</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Beed projects (4 images) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('beed')">
                                <img src="assets/images/projects/beed-01.jpg.jpeg" alt="Beed Projects" />
                                <div class="overlay">
                                    <h3>Beed Projects</h3>
                                    <p>4 Images Available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Anjangaon projects (3 images) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('anjangaon')">
                                <img src="assets/images/projects/anjangaon-01.jpg.jpeg" alt="Anjangaon Projects" />
                                <div class="overlay">
                                    <h3>Anjangaon Projects</h3>
                                    <p>3 Images Available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Junnar projects (4 images) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('junnar')">
                                <img src="assets/images/projects/junner-01.jpg.jpeg" alt="Junnar Projects" />
                                <div class="overlay">
                                    <h3>Junnar Projects</h3>
                                    <p>4 Images Available</p>
                                </div>
                            </div>
                        </div>



                        <!-- Nanekarwadi projects (4 images) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('nanekarwadi')">
                                <img src="assets/images/projects/nanekarwadi-01.jpg.jpeg" alt="Nanekarwadi Projects" />
                                <div class="overlay">
                                    <h3>Nanekarwadi Projects</h3>
                                    <p>4 Images Available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Mamurdi projects (3 images) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('mamurdi')">
                                <img src="assets/images/projects/Mamurdi-01.jpeg" alt="Mamurdi Projects" />
                                <div class="overlay">
                                    <h3>Mamurdi Projects</h3>
                                    <p>3 Images Available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tathawade projects (1 image) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('tathawade')">
                                <img src="assets/images/projects/Tathawade.jpeg" alt="Tathawade Projects" />
                                <div class="overlay">
                                    <h3>Tathawade Projects</h3>
                                    <p>1 Image Available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Ravet 2BHK Flat Apartment (1 PDF) -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('ravet')">
                                <img src="assets/images/projects/site_img-01.jpeg" alt="2BHK Flat Apartment Ravet" />
                                <div class="overlay">
                                    <h3>2BHK Flat Apartment Ravet</h3>
                                    <p>1 Document Available</p>
                                </div>
                            </div>
                        </div>



                        <!-- Site images -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openLocationModal('site_images')">
                                <img src="assets/images/projects/site_img-01.jpeg" alt="Site Images" />
                                <div class="overlay">
                                    <h3>Site Images</h3>
                                    <p>3 Images Available</p>
                                </div>
                            </div>
                        </div>

                        <!-- Individual Site Images -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(20)">
                                <img src="assets/images/projects/site_img-02.jpeg" alt="Site Image 2" />
                                <div class="overlay">
                                    <h3>Project</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(21)">
                                <img src="assets/images/projects/site_img-03.jpeg" alt="Site Image 3" />
                                <div class="overlay">
                                    <h3>Project</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Individual Videos -->
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(22)">
                                <video autoplay muted loop class="gallery-video">
                                    <source src="assets/images/projects/video_02.mp4" type="video/mp4" />
                                </video>
                                <div class="overlay">
                                    <h3>Project Video</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gal-grid gal-top">
                            <div class="gallery-item" onclick="openModal(23)">
                                <video autoplay muted loop class="gallery-video">
                                    <source src="assets/images/projects/video_03.mp4" type="video/mp4" />
                                </video>
                                <div class="overlay">
                                    <h3>Project Video</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div id="imageModal" class="modal">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <h2 id="modalTitle" style="text-align: center; color: white; margin-top: 20px;"></h2>
                            <div class="modal-content-wrapper">
                                <img class="modal-content" id="modalImage" />
                                <video class="modal-content" id="modalVideo" controls></video>
                            </div>
                            <button class="prev" onclick="changeContent(-1)">&#10094;</button>
                            <button class="next" onclick="changeContent(1)">&#10095;</button>
                            <div id="imageCounter" style="text-align: center; color: white; margin-top: 10px; font-size: 14px;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Location-based project galleries
    const locationGalleries = {
        'ps_projects': [
            { type: "image", src: "assets/images/projects/ps_project-01.png" },
            { type: "image", src: "assets/images/projects/ps_project-02.png" },
            { type: "image", src: "assets/images/projects/ps_project-03.png" },
            { type: "image", src: "assets/images/projects/ps_project-04.png" },
            { type: "image", src: "assets/images/projects/ps_project-05.png" },
            { type: "image", src: "assets/images/projects/ps_project-06.png" },
            { type: "image", src: "assets/images/projects/ps_project-07.png" }
        ],
        'beed': [
            { type: "image", src: "assets/images/projects/beed-01.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/beed-02.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/beed-03.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/beed-04.jpg.jpeg" }
        ],
        'anjangaon': [
            { type: "image", src: "assets/images/projects/anjangaon-01.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/anjangaon-03.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/anjangaon-05.jpg.jpeg" }
        ],
        'junnar': [
            { type: "image", src: "assets/images/projects/junner-01.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/junner-02.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/Junnar-01.jpeg" },
            { type: "image", src: "assets/images/projects/Junnar-02.jpeg" }
        ],
        'mamurdi': [
            { type: "image", src: "assets/images/projects/Mamurdi-01.jpeg" },
            { type: "image", src: "assets/images/projects/Mamurdi-02.jpeg" },
            { type: "image", src: "assets/images/projects/Mamurdi-03.jpeg" }
        ],
        'tathawade': [
            { type: "image", src: "assets/images/projects/Tathawade.jpeg" }
        ],
        'ravet': [
            { type: "pdf", src: "assets/images/projects/2BHK Flat Appartment Ravet.pdf" }
        ],
        'nanekarwadi': [
            { type: "image", src: "assets/images/projects/nanekarwadi-01.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/nanekarwadi-02.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/nanekarwadi-03.jpg.jpeg" },
            { type: "image", src: "assets/images/projects/nanekarwadi-04.jpg.jpeg" }
        ],
        'site_images': [
            { type: "image", src: "assets/images/projects/site_img-01.jpeg" },
            { type: "image", src: "assets/images/projects/site_img-02.jpeg" },
            { type: "image", src: "assets/images/projects/site_img-03.jpeg" }
        ],
        'videos': [
            { type: "video", src: "assets/images/projects/video_01.mp4" },
            { type: "video", src: "assets/images/projects/video_02.mp4" },
            { type: "video", src: "assets/images/projects/video_03.mp4" }
        ]
    };

    let currentLocation = '';
    let currentLocationIndex = 0;

    // Location names for display
    const locationNames = {
        'beed': 'Beed Projects',
        'anjangaon': 'Anjangaon Projects',
        'junnar': 'Junnar Projects',
        'nanekarwadi': 'Nanekarwadi Projects',
        'mamurdi': 'Mamurdi Projects',
        'tathawade': 'Tathawade Projects',
        'ravet': '2BHK Flat Apartment Ravet',
        'ps_projects': 'PS INNOVATIVE Projects',
        'site_images': 'Site Images',
        'videos': 'Project Videos'
    };

    function openLocationModal(location) {
        currentLocation = location;
        currentLocationIndex = 0;
        
        const modal = document.getElementById("imageModal");
        const modalImage = document.getElementById("modalImage");
        const modalVideo = document.getElementById("modalVideo");
        const modalTitle = document.getElementById("modalTitle");
        
        if (!locationGalleries[location] || locationGalleries[location].length === 0) {
            console.error('No images found for location:', location);
            return;
        }

        // Update modal title
        if (modalTitle) {
            modalTitle.textContent = locationNames[location] || location;
        }

        showCurrentLocationImage();
        modal.style.display = "block";
    }

    function showCurrentLocationImage() {
        const modalImage = document.getElementById("modalImage");
        const modalVideo = document.getElementById("modalVideo");
        const imageCounter = document.getElementById("imageCounter");
        
        if (currentLocation && locationGalleries[currentLocation]) {
            const currentMedia = locationGalleries[currentLocation][currentLocationIndex];
            const totalImages = locationGalleries[currentLocation].length;
            
            modalImage.style.display = "none";
            modalVideo.style.display = "none";

            if (currentMedia.type === "image") {
                modalImage.src = currentMedia.src;
                modalImage.style.display = "block";
            } else if (currentMedia.type === "video") {
                modalVideo.src = currentMedia.src;
                modalVideo.style.display = "block";
                modalVideo.classList.add("shrink-height");
            } else if (currentMedia.type === "pdf") {
                // For PDFs, open in new window/tab
                window.open(currentMedia.src, '_blank');
                closeModal();
                return;
            }

            // Update counter
            if (imageCounter) {
                imageCounter.textContent = `${currentLocationIndex + 1} / ${totalImages}`;
            }
        }
    }

    function closeModal() {
        const modal = document.getElementById("imageModal");
        modal.style.display = "none";
        currentLocation = '';
        currentLocationIndex = 0;
    }



    // All projects array for individual items (non-location based)
    const allProjects = [
        ...locationGalleries['ps_projects'],
        { type: "image", src: "assets/images/projects/site_img-02.jpeg" },
        { type: "image", src: "assets/images/projects/site_img-03.jpeg" },
        { type: "video", src: "assets/images/projects/video_02.mp4" },
        { type: "video", src: "assets/images/projects/video_03.mp4" }
    ];

    // Legacy function for individual items
    function openModal(index) {
        if (index < allProjects.length) {
            currentLocation = 'individual';
            currentLocationIndex = index;
            
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            const modalVideo = document.getElementById("modalVideo");
            const modalTitle = document.getElementById("modalTitle");
            const currentMedia = allProjects[index];
            
            if (modalTitle) {
                modalTitle.textContent = "Project Gallery";
            }
            
            modalImage.style.display = "none";
            modalVideo.style.display = "none";

            if (currentMedia.type === "image") {
                modalImage.src = currentMedia.src;
                modalImage.style.display = "block";
            } else if (currentMedia.type === "video") {
                modalVideo.src = currentMedia.src;
                modalVideo.style.display = "block";
                modalVideo.classList.add("shrink-height");
            }
            
            modal.style.display = "block";
        }
    }

    // Update changeContent to handle both location-based and individual galleries
    function changeContent(direction) {
        if (currentLocation === 'individual') {
            currentLocationIndex += direction;
            if (currentLocationIndex < 0) {
                currentLocationIndex = allProjects.length - 1;
            } else if (currentLocationIndex >= allProjects.length) {
                currentLocationIndex = 0;
            }
            
            const modalImage = document.getElementById("modalImage");
            const modalVideo = document.getElementById("modalVideo");
            const currentMedia = allProjects[currentLocationIndex];
            
            modalImage.style.display = "none";
            modalVideo.style.display = "none";

            if (currentMedia.type === "image") {
                modalImage.src = currentMedia.src;
                modalImage.style.display = "block";
            } else if (currentMedia.type === "video") {
                modalVideo.src = currentMedia.src;
                modalVideo.style.display = "block";
                modalVideo.classList.add("shrink-height");
            }
        } else if (currentLocation && locationGalleries[currentLocation]) {
            currentLocationIndex += direction;
            const locationImages = locationGalleries[currentLocation];
            
            if (currentLocationIndex < 0) {
                currentLocationIndex = locationImages.length - 1;
            } else if (currentLocationIndex >= locationImages.length) {
                currentLocationIndex = 0;
            }
            
            showCurrentLocationImage();
        }
    }
</script>

<?php include "layout/footer.php" ?>