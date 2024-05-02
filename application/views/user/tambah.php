<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- .row -->
    <div class="row mt-4">
        <!-- .col -->
        <div class="col-12">

            <?php if ($this->session->flashdata('msg')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Pengaduan anda berhasil di <strong><?= $this->session->flashdata('msg'); ?></strong> Silahkan menunggu proses selanjutnya oleh tim terkait, terima kasih.
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<div class="jumbotron jumbotron-fluid bg-dark my-2 mx-4">

    <div class="jumbotron-background">
        <img src="<?= base_url('aset/img/hero.png'); ?>" class="blur">
    </div>

    <div class="container text-white">

        <h1 class="display-4">Selamat datang, <?= $user['username']; ?>!</h1>
        <p class="lead">Selamat datang di Layanan Pengaduan Lingkungan Kelurahan Grogol Utara, silahkan adukan permasalahan terkait kebersihan lingkungan Anda kepada kami.</p>
        <hr class="my-4">
        <p>Klik tombol tambah pengaduan berikut untuk mengirimkan data pengaduan terkait permasalahan yang terjadi.</p>
        <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-primary btn-lg" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Pengaduan</button>

    </div>
    <!-- /.container -->

</div>
<!-- /.jumbotron -->

<!--
For IE support of object-fit add this to your document
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"&gt;&lt;/script&gt;
 -->


</div>
<!-- End of Main Content -->

<div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title"><?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?= form_open_multipart ('user/tambah_data_aksi', ['id' => 'formTambahData']); ?>
            <form method="post" action="<?= base_url('tambah-pengaduan') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul_pengaduan">Judul Pengaduan</label>
                        <input type="text" name="judul_pengaduan" class="form-control" id="judul_pengaduan">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp / Whatsapp</label>
                        <input name="no_telp" class="form-control" id="no_telp" cols="30" rows="4" placeholder="08XX - XXXX"></input>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="isi_pengaduan">Isi Pengaduan</label>
                        <textarea type="text" name="isi_pengaduan" class="form-control" id="isi_pengaduan" cols="30" rows="4" ></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="image">Bukti Foto TimeStamp</label>
                        <input type="file" name="image" class="form-control" id="image" cols="30" rows="4" >
                        Image harus dari TimeStamp, jika tidak kami tolak!!
                        <br>Max ukuran image 3MB</input>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yakin</button>
                    </div>
                </div>
            </form>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>

<!-- date Format -->
<script src="<?= base_url('assets/') ?>js/jquery-dateformat.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function() {
        $("#formTambahData").submit(function(e) {
            e.preventDefault()

            var form = $("#formTambahData")
            var data = $(this).serialize()

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                dataType: 'json',
                // data: data,
                success: function(res) {
                    // jika respon -> status = true
                    if (res.status) {
                        $('#tambah-data').modal('toggle')
                        location.reload()
                        // jika respon -> status = false
                    } else {
                        $.each(res.errors, function(key, value) {
                            $('[name="' + key + '"]').addClass('is-invalid');
                            $('[name="' + key + '"]').next().text(value);
                            if (value == "") {
                                $('[name="' + key + '"]').removeClass('is-invalid');
                                $('[name="' + key + '"]').addClass('is-valid');
                            }
                        })
                    }
                }
            })
        })
    })
</script>

</body>

</html>