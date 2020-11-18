<?php $this->extend('layout/template') ?>
<?php $this->section('content') ?>

  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Daftar Akun</h2>
    <h6 id="msg">Pendaftaran hanya untuk anggota yang bersangkutan !!!</h6>
  </div>
</div>

<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <div class="row mt-5 justify-content-center">

      <div class="mt-5 mt-lg-0 col-8">

        <form id="formSignUp" class="php-email-form">

            <div class="form-group">
              <input type="text" name="nama1" class="form-control" id="nama1" placeholder="Nama Panggilan" autocomplete="off" required/>
            </div>
            <div class="form-group">
              <input type="text" name="nama2" class="form-control" id="nama2" placeholder="Nama Lengkap" autocomplete="off" required/>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" required/>
            </div>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="password" name="password1" class="form-control" id="password1" placeholder="Password" required/>
              </div>
              <div class="col-md-6 form-group">
                <input type="password" name="password2" class="form-control" id="password2" placeholder="Konfirmasi Password"/>
              </div>
            </div>
            <div class="form-group">
              <select class="custom-select" name="jabatan" id="jabatan">
                <option selected>Pilih Jabatan</option>
                <?php foreach ($jabatan as $j) : ?>
                <?php if ($j['id'] > 1) : ?>
                <option value="<?= $j["id"]; ?>"><?= $j["nama"]; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <select class="custom-select" name="lembaga" id="lembaga">
                <option selected>Pilih Lembaga</option>
                <option value="IPNU">IPNU</option>
                <option value="IPPNU">IPPNU</option>
              </select>
            </div>
            <div class="form-group">
              <select class="custom-select" name="periode" id="periode">
                <option selected>Pilih Periode</option>
                <?php foreach ($periode as $p) : ?>
                <option value="<?= $p['id']; ?>"><?= $p["tahun"]; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" id="signUp">Mendaftar</button>
            </div>
          </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?php $this->endSection() ?>