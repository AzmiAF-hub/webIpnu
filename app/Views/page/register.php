<?php $this->extend('layout/template') ?>
<?php $this->section('content') ?>

  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Daftar Akun</h2>
    <p>Pendaftaran hanya untuk anggota yang bersangkutan !!!</p>
  </div>
</div>

<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <div class="row mt-5 justify-content-center">

      <div class="mt-5 mt-lg-0 col-8">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">

            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name1" class="form-control" id="name1" placeholder="Nama Depan" data-rule="minlen:4" data-msg="Masukkan minimal 4 karakter." autocomplete="off" required/>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="name2" class="form-control" id="name2" placeholder="Nama Belakang" data-rule="minlen:4" data-msg="Masukkan minimal 4 karakter." autocomplete="off" />
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="username" id="subject" placeholder="Username" data-rule="minlen:4" data-msg="Masukkan minimal 4 karakter." autocomplete="off" required/>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" id="subject" placeholder="E-mail" data-rule="email" data-msg="Masukkan email dengan benar" autocomplete="off" />
            </div>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Masukkan minimal 8 karakter." required/>
              </div>
              <div class="col-md-6 form-group">
                <input type="password" name="password2" class="form-control" id="password2" placeholder="Konfirmasi Password" data-rule="minlen:8" data-msg="Masukkan minimal 8 karakter." required/>
              </div>
            </div>
            <div class="form-group">
              <select class="custom-select" name="jabatan" id="jabatan">
                <option selected>Pilih Jabatan</option>
                <?php $i = 0; ?>
                <?php foreach ($jabatan as $j) : ?>
                <option value="<?= $i++; ?>"><?= $j["name"]; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="text-center"><button type="submit">Mendaftar</button></div>
          </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?php $this->endSection() ?>