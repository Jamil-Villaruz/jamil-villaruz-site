<div class="cl8">
    <div class="contact-wrap wedo-section" id="contact">
        <div class="top-content">
            <div class="wrap-title st-blog">
                <div>
                    <?php include 'includes/back-btn.php'; ?>
                    <h1 class="title">
                        Contact Us<span>.</span>
                    </h1>
                </div>
                <div class="box-title">

                    <div class="circle-box">
                        <img src="images/home/circle.svg" class="circle" alt="image">

                        <img class="logo" src="images/logo-2.png" alt="image">
                    </div>
                </div>


            </div>
            <p>Nullam dui dui, cursus at velit sit amet, condimentum aliquam nisi. Facilisis nibh vitae enim viverra
                mattis. Proin purus tortor, aliquet vel, ullamcorper consequat felis.</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.3210101890018!2d-97.73587714092555!3d30.28492176241068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b59b2584cfb7%3A0x8131ee4f174a21de!2sThe%20University%20of%20Texas%20at%20Austin!5e0!3m2!1sen!2s!4v1681981942966!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="box-cart-contact">
            <div class="tf-cart-contact">
                <div class="inner-left">
                    <span><i class="icon-phone"></i> Phone Number</span>
                </div>
                <h3><?php echo $users[0]['contact_number']; ?></h3>
            </div>
            <div class="tf-cart-contact">
                <div class="inner-left">
                    <span><i class="icon-mail"></i>Contact Email</span>
                </div>
                <h3><?php echo $users[0]['email']; ?></h3>
            </div>
            <div class="tf-cart-contact">
                <div class="inner-left">
                    <span><i class="icon-location"></i>Contact Location</span>
                </div>
                <h3><?php echo $users[0]['Location']; ?></h3>
            </div>
        </div>
        <div class="wd-post-comment">
            <div class="title-cmt">
                <h3>Send A Message</h3>
                <p>Nunc velit metus, volutpat elementum euismod eget, cursus nec nunc.</p>
            </div>
            <form method="post">
                <div class="group-input">
                    <div class="input">
                        <label>Your Name</label>
                        <input type="text" placeholder="Enter Your Name">
                    </div>
                    <div class="input">
                        <label>Your Mail</label>
                        <input type="text" placeholder="infoflex@info.com">
                    </div>
                </div>
                <div class="textarea">
                    <label>Your Message</label>
                    <textarea placeholder="Write Your Message"></textarea>
                </div>
                <p><span>*</span>&nbsp; Call us 24/7 or fill out the form below to receive a free and confidential initial consultation.</p>
                <button type="submit">
                    Submit Now <span class="icon-arrow"></span>
                </button>
            </form>
        </div>
    </div>
</div>