<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="contact-container">
        <section class="contact-section">
            <div class="contact-left">
                <h1>Contact Us</h1>
                <p>We Value Your Feedback And Inquiries. Please Reach Out To Us Using The Following Contact</p>
                <p class="contact-info">8888888888</p>
                <p class="contact-info">Service@Gmail.Com</p>

                <div class="contact-support">
                    <div>
                        <h3>Customer Support</h3>
                        <p>Our Customer Support Team Is Here To Assist You With Any Inquiries Or Issues. Reach Out To Us For Prompt And Professional Help.</p>
                    </div>
                    <div>
                        <h3>Feedback And Suggestions</h3>
                        <p>We Welcome Your Feedback And Suggestions To Improve Our Services. Your Insights Help Us Serve You Better.</p>
                    </div>
                    <div>
                        <h3>Donation Enquiries</h3>
                        <p>For Any Donation Inquiries, Please Contact Us For Detailed Information And Assistance. Your Contributions Make A Significant Impact.</p>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <form>
                    <h2>Get In Touch With Us</h2>
                    <div class="input-group">
                        <input type="text" placeholder="Name" required>
                        <input type="text" placeholder="Surname" required>
                    </div>
                    <div class="input-field">
                    <input type="email" placeholder="Email" required>
                    <input type="tel" placeholder="+91" required>
                    <textarea placeholder="Tell About Us Something..." required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
        <br><br>
    </div>
    <?php
}
?>