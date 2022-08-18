  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM kategori")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Kategori</p>
              </div>
              <div class="icon">
                <i class="fa fa-database" aria-hidden="true"></i>
              </div>
              <a href="<?php echo site_url('C_admin/kategori')?>" class="small-box-footer">Lihat Data<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM surat")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Inventori Surat</p>
              </div>
              <div class="icon">
                <i class="fa fa-bolt" aria-hidden="true"></i>
              </div>
              <a href="<?php echo site_url('C_admin/surat')?>" class="small-box-footer">Lihat Data<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>