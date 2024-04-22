<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- .row -->
    <div class="row mt-4">
        <!-- .col -->
        <div class="col-12">

            <!-- page heading - judul -->
            <h1 class="h3 my-1 text-gray-800"><i class="fas fa-archway"></i> <?= $judul; ?></h1>
 
        </div>
    </div>

    <div class="row">
        <div class="col">

            <div class="card mt-4">
                <div class="card-header">
                    <div class="navbar-form navbar-right">
                        <input type="text" name="search_text" id="search_text" placeholder="Cari Desa" class="form-control" />
                    </div>
                    <br />
                    <div id="result"></div>
                </div>
                    <div style="clear:both"></div>

            </div>

        </div>

    </div>

    <!-- page heading - judul -->
    <h1 class="h3 mt-4 my-1 text-gray-800"><i class="fas fa-chart-bar"></i>  Statistik Penduduk</h1>

    <div class="row">
        <div class="col">

            <div class="card mt-4">
                <div class="card-body">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                <body>
                <!-- Line Chart -->
                <canvas id="lineChart" style="max-height: 400px;"></canvas>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#lineChart'), {
                      type: 'line',
                      data: {
                        labels: ['Bulutengger', 'Manyar', 'Siman', 'Ngarum', 'Kendal', 'Porodeso'],
                        datasets: [{
                          label: 'Jumlah Penduduk',
                          data: [200, 325, 295, 165, 125, 85],
                          fill: false,
                          borderColor: 'rgb(75, 192, 192)',
                          tension: 0.1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    });
                  });
                </script>
                <script src="assets/vendor/chart.js/chart.min.js"></script> 
                <!-- End Line CHart -->
                </body>

                <!-- <div class="container">
                    <canvas id="myChart"></canvas>
                </div>
     
                  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                  <script type="text/javascript">
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                              <?php
                                if (count($graph)>0) {
                                  foreach ($graph as $data) {
                                    echo "'" .$data->desa .",";
                                  }
                                }
                              ?>
                            ],
                            datasets: [{
                                label: 'Jumlah Penduduk',
                                backgroundColor: '#ADD8E6',
                                borderColor: '##93C3D2',
                                data: [
                                  <?php
                                    if (count($graph)>0) {
                                       foreach ($graph as $data) {
                                        echo $data->jumlah . ",";
                                      }
                                    }
                                  ?>
                                ]
                            }]
                        },
                    }); 
                  </script> -->

                </div>

            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->


<!-- End of Content Wrapper -->


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

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>

<script>
    $(document).ready(function(){

     load_data();

     function load_data(query)
     {
      $.ajax({
       url:"<?php echo base_url(); ?>admin/fetch",
       method:"POST",
       data:{query:query},
       success:function(data){
        $('#result').html(data);
       }
      })
     }

     $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
       load_data(search);
      }
      else
      {
       load_data();
      }
     });
    });
</script>