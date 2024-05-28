<?= $this->extend("parts/page") ?>
<?= $this->section("content") ?>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Graphic Designer</h3>
            <p class="fst-italic">
                Experienced Graphic Designer who finds inspiration in the intersection of art and technology, constantly seeking new ways to push the boundaries of visual communication.
            </p>
            <div class="row py-2">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Name:</strong> <?= $name ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Position:</strong> <?= $position ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> <?= $phone ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> <?= $city ?></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> <?= $age ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Interest:</strong> <?= $interest ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Mail:</strong> <?= $mail ?></li>
                </ul>
              </div>
            </div>
            <p><?= $about ?></p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Infosmi</h4>
              <h5>2021</h5>
              <p><em>Talent & Content Creator</em></p>
              <p>Had participated in the practice of on-the-job training at CV. INFOSMI in 2021 for 3 months.</p>
              <p>
              <ul>
                <li>Sukabumi, Indonesia</li>
              </ul>
              </p>
            </div>
            <div class="resume-item pb-0">
              <h4>PT Rahayu Damai Sejahtera</h4>
              <h5>2023 - <i>Now</i></h5>
              <p><em>Graphic Designer</em></p>
              <p>I worked as a Graphic Designer for PT Rahayu Damai Sejahtera, where I was responsible for branding in advertisements and creating utility designs as needed.</p>
              <p>
              <ul>
                <li>Garut, Indonesia</li>
              </ul>
              </p>
            </div>
            <h3 class="resume-title">Education</h3>

            <div class="resume-item">
              <h4>SMAN 5 SUKABUMI</h4>
              <h5>2018 - 2021</h5>
              <p><em>Science</em></p>
            </div>
            <div class="resume-item">
              <h4>Muhammadiyah University</h4>
              <h5>2021 - <i>Now</i></h5>
              <p><em>Informatics Engineering</em></p>
              <p>Studying at Muhammadiyah University, Majoring in Informatics Engineering S1.</p>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

<!-- Content End -->

<?= $this->endSection() ?>

