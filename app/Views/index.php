<?= $this->extend("parts/page") ?>
<?= $this->section("content") ?>

<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <h1><?= $name ?></h1>
        <h2>Informatics Student</h2>
        <a href="about" class="btn-about">About Me</a>
    </div>
</section>

<?= $this->endSection() ?>
