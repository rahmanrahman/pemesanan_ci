<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>


    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Dashboard</h4>

          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                      <div class="numbers">
                        <p class="card-category">Akun Pengguna</p>
                        <h4 class="card-title"><?php echo $total_akun ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="far fa-newspaper"></i>
                      </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Order</p>
                        <h4 class="card-title"><?php echo $total_order ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="far fa-chart-bar"></i>
                      </div>
                    </div>
                    <div class="col col-stats ml-3 ml-md-0">
                      <div class="numbers">
                        <p class="card-category">Total Pembelian</p>
                        <h4 class="card-title">Rp. 
                          <?php foreach($total_pembelian as $tp) : ?>
                          <?php echo $tp->total ?>
                            <?php endforeach; ?>
                          </h4>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Total Pembelian per Akun</div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Total Pembelian per Tanggal</div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              
                    <canvas id="pieChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
              
                    <canvas id="doughnutChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
             
                    <canvas id="radarChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
              
                    <canvas id="bubbleChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
              
                    <canvas id="multipleLineChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
             
                    <canvas id="multipleBarChart" style=hidden></canvas>
                  
            </div>
            <div class="col-md-12">
              
                  
                    <canvas id="htmlLegendsChart" style=hidden></canvas>

               
          </div>
        </div>
      </div>
      
    </div>
