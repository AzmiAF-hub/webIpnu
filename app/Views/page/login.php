<?php $this->extend('layout/template') ?>
<?php $this->section('content') ?>

  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Masuk Akun</h2>
    <p>Silahkan masukkan Username dan Password dengan benar !!!</p>
  </div>
</div>

<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <div class="row mt-5 justify-content-center">

      <div class="mt-5 mt-lg-0 col-8">

        <form id="formSignIn" class="php-email-form">
          
          <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
          </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password"/>
            </div>
          <div class="text-center">
            <button type="submit" id="signIn">Masuk</button>
          </div>
          
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?php $this->endSection() ?>