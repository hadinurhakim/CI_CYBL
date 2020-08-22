 <!-- Footer -->
      <footer class="page-footer bg-light font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

              <!-- Content -->
              <h5 class="text-uppercase">CYB LEARNING</h5>
              <p>Team kami berpusat di <a class="text-decoration-none" href="https://smkm7jaksel.sch.id/">SMK MUHAMMADIYAH 7 TEBET</a> terdiri dari beberapa alumni dan siswa/siswi SMKM 7.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="text-uppercase">AROUND WEBSITE</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="https://smkm7jaksel.sch.id/">SMK MUHAMMADIYAH 7 TEBET</a>
                </li>
                <li>
                  <a href="https://cyber.smkm7jaksel.sch.id/">CYBX TEAM</a>
                </li>
                <li>
                  <a href="https://cyber.smkm7jaksel.sch.id/ebusines/">CYB BUSINES</a>
                </li>
                <li>
                  <a href="<?= base_url('Home');?>">CYB LEARNING</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="text-uppercase">MATERI</h5>

              <ul class="list-unstyled">
                <?php foreach ($data->result_array() as $menu ) :?>
                <li>
                  <a href="#!"><?= $menu['sub_menu'];?></a>
                </li>
              <?php endforeach;?>
              </ul>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center bg-secondary text-light py-3">© <?php echo date('Y') ?> Copyright:
          <a class="text-light" href="https://cyber.smkm7jaksel.sch.id/">CYBX TEAM</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->    <!-- /#page-content-wrapper -->

  </div>


  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
   
  </body>
</html>