<body class="bg-gradient-primary">
    <div class="container ">

      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Registrasi Pengaduan</h1>
                          </div>
                          <!-- Flass data -->
                          <?= $this->session->flashdata('success'); ?>
                            
                          <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                              <div class="form-group">
                                  <input type="text" name="nama_instansi" id="nama_instansi" class="form-control <?= form_error('nama_instansi') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('nama_instansi'); ?>" value="<?= set_value('nama_instansi'); ?>" placeholder="Masukkan NIK">
                                  <?= form_error('nama_instansi', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('username'); ?>" id="username" name="username" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <textarea name="alamat" id="alamat" cols="30" rows="1" class="form-control <?= form_error('alamat') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('alamat'); ?>" placeholder="Masukkan Alamat"><?= set_value('alamat') ?></textarea>
                                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control <?= form_error('pass1') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('pass1'); ?>" id="pass1" name="pass1" placeholder="Password">
                                      <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="password" class="form-control <?= form_error('pass2') ? 'is-invalid' : 'border-left-primary' ?>" value="<?= set_value('pass2'); ?>" id="pass2" name="pass2" placeholder="Konfirmasi Password">
                                      <?= form_error('pass2', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-user btn-block ">
                                  Registrasi
                              </button>
                          </form>
                          <hr>
                          <div class="text-center">
                              Sudah Punya Akun?<a class="medium" href="<?= base_url('auth'); ?>"> Login!</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
  