<?php include 'layout/header.php'; ?>
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">

          <?php include 'layout/menu.php'; ?>
          
          <div class="content" style="padding-top: 10px; margin: 15px 65px 15px 65px;">
            
            <div class="panel panel-default" style="margin-bottom: 70px;">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
                <div class="content-row">
                  <h2 class="content-row-title"><?php echo $judul; ?></h2>
                  <div class="row">
                    <div class="col-md-12">
                     <?php include $konten.'.php'; ?>
                    </div>
                  </div>
                </div>

              </div><!-- panel body -->
            </div>

        </div>
        <!-- content -->
      </div>
    </div>
    <!--footer-->
    <?php //include 'config/footer.php'; ?>
    <script src="assets/bootstrap-datepicker.js"></script>
  
    <script type="text/javascript">
      $('.tgl').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                //startView: 2,
                todayBtn: true,
                todayHighlight: true,
                //clearBtn: true,
                language: 'id'
            });
  </script>

    <?php include 'layout/footer.php'; ?>