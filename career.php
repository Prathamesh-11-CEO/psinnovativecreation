<?php include "layout/header.php" ?>

<div class="constructit-subheader">
    <span class="constructit-subheader-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="constructit-subheader-text">
                    <h1>Careers</h1>
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
                        <li class="active">Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="constructit-main-content constructit-content-padding">
    <div class="constructit-main-section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 10px;">Join PS INNOVATIVE Creation</h2>
                    <p style="color: #666; font-size: 15px; max-width: 750px; margin-bottom: 40px; line-height: 1.8;">
                        We are a growing architectural and construction firm based in Pune, delivering end-to-end solutions across residential, commercial, and industrial projects. If you are passionate about design, engineering, or real estate — we'd love to hear from you.
                    </p>
                </div>
            </div>

            <div class="row">

                <!-- Application Form -->
                <div class="col-md-6 col-sm-12">
                    <div class="constructit-quote-form">
                        <h3 style="margin-bottom: 24px; font-size: 20px;">Apply Now</h3>

                        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                            <div style="background:#e8f5e9; border:1px solid #a5d6a7; color:#2e7d32; padding:14px 18px; border-radius:6px; margin-bottom:20px;">
                                Thank you for applying! We will review your application and get back to you shortly.
                            </div>
                        <?php endif; ?>

                        <form action="code/process_career.php" method="post">
                            <ul>
                                <li>
                                    <input type="text" name="name" placeholder="Full Name" required />
                                </li>
                                <li>
                                    <input type="email" name="email" placeholder="Email Address" required />
                                </li>
                                <li>
                                    <input type="tel" name="phone" placeholder="Phone Number" required />
                                </li>
                                <li>
                                    <select name="position" required style="width:100%; padding:12px 15px; border:1px solid #ddd; border-radius:4px; font-size:14px; color:#555; background:#fff; appearance:auto;">
                                        <option value="" disabled selected>-- Select Position --</option>
                                        <optgroup label="Architecture &amp; Design">
                                            <option value="Architect">Architect</option>
                                            <option value="Interior Designer">Interior Designer</option>
                                            <option value="AutoCAD Draftsman">AutoCAD Draftsman / Drafter</option>
                                        </optgroup>
                                        <optgroup label="Engineering &amp; Construction">
                                            <option value="Civil Engineer">Civil Engineer</option>
                                            <option value="Structural Engineer">Structural Engineer</option>
                                            <option value="Site Supervisor">Site Supervisor / Site Engineer</option>
                                            <option value="Quantity Surveyor">Quantity Surveyor / Estimator</option>
                                        </optgroup>
                                        <optgroup label="Project Management">
                                            <option value="Project Manager">Project Manager (PMC)</option>
                                        </optgroup>
                                        <optgroup label="Liaisoning &amp; Legal">
                                            <option value="Liaisoning Executive">Liaisoning Executive</option>
                                        </optgroup>
                                        <optgroup label="Sales &amp; Business">
                                            <option value="Sales and Marketing Executive">Sales &amp; Marketing Executive</option>
                                            <option value="Business Development Executive">Business Development Executive</option>
                                        </optgroup>
                                        <optgroup label="Other">
                                            <option value="Other">Other / Internship</option>
                                        </optgroup>
                                    </select>
                                </li>
                                <li>
                                    <select name="experience" required style="width:100%; padding:12px 15px; border:1px solid #ddd; border-radius:4px; font-size:14px; color:#555; background:#fff; appearance:auto;">
                                        <option value="" disabled selected>-- Years of Experience --</option>
                                        <option value="Fresher (0 years)">Fresher (0 years)</option>
                                        <option value="Less than 1 year">Less than 1 year</option>
                                        <option value="1 - 2 years">1 – 2 years</option>
                                        <option value="3 - 5 years">3 – 5 years</option>
                                        <option value="6 - 10 years">6 – 10 years</option>
                                        <option value="More than 10 years">More than 10 years</option>
                                    </select>
                                </li>
                                <li>
                                    <input type="text" name="city" placeholder="Current City" required />
                                </li>
                                <li>
                                    <textarea name="message" placeholder="Tell us about yourself or why you want to join PS INNOVATIVE Creation" rows="4"></textarea>
                                </li>
                                <li>
                                    <label>
                                        <button type="submit">Submit Application</button>
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <!-- Why Join Us -->
                <div class="col-md-6 col-sm-12">
                    <div style="padding: 10px 20px;">
                        <h3 style="margin-bottom: 20px; font-size: 20px;">Why Work With Us?</h3>
                        <div class="about_list">
                            <ul>
                                <li><strong>Diverse Projects: </strong>Work on residential, commercial, industrial, warehouse, and processing plant projects across Maharashtra.</li>
                                <li><strong>End-to-End Exposure: </strong>From architectural design and liaisoning to on-site construction — gain experience across the full project lifecycle.</li>
                                <li><strong>Growing Team: </strong>Be part of a young, driven team with 100+ satisfied clients and a strong project portfolio.</li>
                                <li><strong>Learning Environment: </strong>Work alongside experienced engineers and architects using the latest design and construction technology.</li>
                                <li><strong>Impactful Work: </strong>Contribute to projects that shape communities — from homes to industrial hubs across Pune and beyond.</li>
                            </ul>
                        </div>

                        <div style="margin-top: 36px; background: #f9f9f9; border-left: 4px solid #c8a951; padding: 20px 24px; border-radius: 4px;">
                            <h4 style="margin-bottom: 12px; font-size: 16px; color: #333;">Have questions?</h4>
                            <p style="color: #666; font-size: 14px; line-height: 1.8; margin: 0;">
                                Reach us at
                                <a href="mailto:info@psinnovativecreation.com" style="color:#c8a951;">info@psinnovativecreation.com</a><br>
                                or call <a href="tel:+918087674246" style="color:#c8a951;">+91 8087674246</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "layout/footer.php" ?>
