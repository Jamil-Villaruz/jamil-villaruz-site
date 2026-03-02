<div class="cl8">
    <div class="wedo-section" id="about">
        <div class="about-wrap">
            <div class="top-content">
                <div class="wrap-title st-about">
                    <div>
                        <?php include 'includes/back-btn.php'; ?>
                        <h1 class="title">
                            <span>About</span> Me.
                        </h1>
                    </div>
                    <div class="box-title wedo-link-item" href="#home">

                        <div class=" circle-box">
                            <img src="images/home/circle.svg" class="circle" alt="image">
                            <img class="logo" src="images/logo-2.png" alt="image">
                        </div>
                    </div>


                </div>
                <p class="mb15">
                    <?php echo $about[0]['summary_1']; ?>
                </p>
                <?php if (!empty($about[0]['summary_2'])): ?>
                    <p>
                        <?php echo $about[0]['summary_2']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="content">

                <div class="inner-top">
                    <div class="content-left br-left">
                        <h4>Name</h4>
                        <p><?php echo $about[0]['full_name']; ?></p>
                    </div>
                    <div class="content-right">
                        <h4>Phone</h4>
                        <p><?php echo $about[0]['phone_number_1']; ?></p>
                        <?php if (!empty($about[0]['phone_number_2'])): ?>
                            <p><?php echo $about[0]['phone_number_2']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="inner-bottom">
                    <div class="content-left br-left br-bottom">
                        <h4>Office</h4>
                        <p><?php echo $about[0]['location']; ?></p>
                    </div>
                    <div class="content-right br-bottom">
                        <h4>Experience</h4>
                        <p><?php echo $about[0]['yrs_exp']; ?></p>
                    </div>
                </div>
            </div>


        </div>

        <!-- Work Experience -->
        <div class="resume-wrap">
            <div class="wrap-title">
                <div class="box-title">
                    <h1 class="title">
                        Work <span>Experience.</span>
                    </h1>

                </div>

                <p>
                    <?php echo $about[0]['work_summary']; ?>
                </p>

            </div>

            <div class="row">
                <?php foreach ($work as $job): ?>
                    <div class="col-lg-12">
                        <div class="tf-box-resume animate-down">
                            <ul class="inner-left">
                                <li><?php echo $job['work_place']; ?></li>
                                <li>
                                    <span>
                                        <?php echo date("M Y", strtotime($job['work_date_start'])); ?> - <?php echo date("M Y", strtotime($job['work_date_end'])); ?>
                                    </span>
                                </li>
                            </ul>
                            <h4 class="inner-right"><a href="#">Website Manager / Front-End Developer</a></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
        <!-- end -->

        <!-- Education & Certification -->
        <div class="resume-wrap">
            <div class="wrap-title">
                <div class="box-title">
                    <h1 class="title">
                        <span>Education</span> and <span>Certifications</span>!
                    </h1>

                </div>

                <p>
                    <?php echo $about[0]['education_summary']; ?>
                </p>

            </div>



            <div class="row">

                <?php foreach ($educ as $education): ?>

                    <div class="col-lg-12">
                        <div class="tf-box-resume animate-down">
                            <ul class="inner-left">
                                <li><?php echo $education['educ_name'] ?></li>
                                <li>
                                    <?php if ($education['is_current'] == 1): ?>
                                        <span>(Running) </span>
                                    <?php endif;
                                    echo date("Y", strtotime($education['educ_date'])); ?>
                                </li>
                            </ul>
                            <h4 class="inner-right"><a href="#"><?php echo $education['educ_course'] ?></a></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

        <div class="banner-light">
            <div class="item wrap-counter">
                <img src="images/service/img-9.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="95"></a><span>% Figma</span></h4>
            </div>
            <div class="item wrap-counter">
                <img src="images/service/img-8.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="65"></a><span>% Bootstrap</span></h4>
            </div>
            <div class="item wrap-counter">
                <img src="images/service/img-2.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="85"></a><span>% Sketch</span></h4>
            </div>
            <div class="item wrap-counter">
                <img src="images/service/img-7.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="90"></a><span>% XD</span></h4>
            </div>
        </div>
        <div class="banner banner-dark">
            <div class="item wrap-counter">
                <img src="images/service/img-9.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="95"></a><span>% Figma</span></h4>
            </div>
            <div class="item wrap-counter">
                <img src="images/service/img-8.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="60"></a><span>% Bootstrap</span></h4>
            </div>
            <div class="item wrap-counter">
                <img src="images/service/img-2.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="85"></a><span>% Sketch</span></h4>
            </div>
            <div class="item wrap-counter">
                <img src="images/service/img-7.png" alt="image">
                <h4><a href="#" class="counter-number" data-speed="5000" data-to="90"></a><span>% XD</span></h4>
            </div>
        </div>
    </div>
</div>