<?php include "layout/header.php" ?>

<div class="constructit-subheader">
    <span class="constructit-subheader-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="constructit-subheader-text">
                    <h1>Contact</h1>
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
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="constructit-main-content contact-padding">
    <div class="constructit-main-section">
        <div class="container">
            <div class="contsct-us">
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="constructit-about-us">
                            <div class="constructit-quote-form">
                                <form action="code/process_contact.php" method="post">
                                    <ul>
                                        <li>
                                            <input type="text" name="name" id="name" placeholder="Name" required />
                                        </li>
                                        <li>
                                            <input type="email" name="email" id="email" placeholder="Email" required />
                                        </li>
                                        <li>
                                            <input type="text" name="phone" id="phone" placeholder="Phone" required />
                                        </li>
                                        <li>
                                            <textarea name="message" id="message" placeholder="Your message" rows="4" required></textarea>
                                        </li>
                                        <li>
                                            <label>
                                                <button type="submit" value="send">send message</button>
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="contact-container">
                            <div class="contact-details">
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p style="font-weight: 600;">
                                        Pune Location Shop No. 101, Probo Prolix Pride, Commercial Complex, Shindevasti, Ravet, Pimpri - Chinchwad, Pune 411044
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>
                                        <a href="tel:+918087674246">+91 8087674246</a> /
                                        <a href="tel:+919932863111">+91 9932863111</a>
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <p>
                                        <a href="mailto:info@psinnovativecreation.com">info@psinnovativecreation.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="social-media">
                                <h2>Follow Us</h2>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/share/1UJPhMSQHZ/?mibextid=wwXIfr" target="_blank" class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <!-- <a href="https://www.twitter.com" target="_blank" class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </a> -->
                                    <a href="https://www.instagram.com/ps_innovative_creation?igsh=M3FxNjNlZDNxMTRj&utm_source=qr" target="_blank" class="social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/ps-innovative-creation-9a9634310?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="social-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section -->
</div>

<?php include "layout/footer.php" ?>