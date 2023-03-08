<?php
include '../config/database.php';

$query = mysqli_query($conn, "SELECT count(id_user) AS jml FROM users");
$query2 = mysqli_query($conn, "SELECT count(id) AS jml FROM divisions");
$query3 = mysqli_query($conn, "SELECT count(id) AS jml FROM jabatans");
$view = mysqli_fetch_array($query);
$view2 = mysqli_fetch_array($query2);
$view3 = mysqli_fetch_array($query3);

$aspvcro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='3'");
$aspvcit = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='4'");
$aspvrtg = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='5'");
$admcro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='7'");
$admcit = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='8'");
$admrtg = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='9'");
$plkcro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='13'");

?>

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3><?= $view['jml']; ?></h3>
            <p>Pegawai</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $view2['jml']; ?></h3>
            <p>Divisi</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $view3['jml']; ?></h3>
            <p>Jabatan</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card bg-light">
          <div class="card-header bg-info">
            <h5 class="card-title">
              <span style="font-weight:bold; opacity:50%;">Klik untuk melihat</span><br>
              Sasaran Kinerja Objektif CRO
            </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-cro-aspv"><i class="fas fa-eye"></i> Ass. SPV CRO</button>
            </div>
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-cro-admin"><i class="fas fa-eye"></i> Admin CRO</button>
            </div>
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-cro-plk"><i class="fas fa-eye"></i> Pelaksana CRO</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card bg-light">
          <div class="card-header bg-info">
            <h5 class="card-title">
              <span style="font-weight:bold; opacity:50%;">Klik untuk melihat</span><br>
              Sasaran Kinerja Objektif CIT
            </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-cit-aspv"><i class="fas fa-eye"></i> Ass. SPV CIT</button>
            </div>
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-cit-admin"><i class="fas fa-eye"></i> Admin CIT</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card bg-light">
          <div class="card-header bg-info">
            <h5 class="card-title">
              <span style="font-weight:bold; opacity:50%;">Klik untuk melihat</span><br>
              Sasaran Kinerja Objektif Rutang
            </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-rtg-aspv"><i class="fas fa-eye"></i> Ass. SPV Rutang</button>
            </div>
            <div class="row">
              <button type="button" class="btn btn-outline-info mt-2 btn-block" data-toggle="modal" data-target="#modal-sko-rtg-admin"><i class="fas fa-eye"></i> Admin Rutang</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal SKO CRO ASPV -->
    <div class="modal fade" id="modal-sko-cro-aspv">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($aspvcro as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--  END Modal SKO CRO ASPV -->

    <!-- Modal SKO CRO ADM -->
    <div class="modal fade" id="modal-sko-cro-admin">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($admcro as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Modal SKO CRO ADM -->

    <!-- Modal SKO CRO PLK -->
    <div class="modal fade" id="modal-sko-cro-plk">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($plkcro as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Modal SKO CRO PLK -->

    <!-- Modal SKO CIT ASPV -->
    <div class="modal fade" id="modal-sko-cit-aspv">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($aspvcit as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Modal SKO CIT ASPV -->

    <!-- Modal SKO CIT ADM -->
    <div class="modal fade" id="modal-sko-cit-admin">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($admcit as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Modal SKO CIT ADM -->

    <!-- Modal SKO RTG ASPV -->
    <div class="modal fade" id="modal-sko-rtg-aspv">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($aspvrtg as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Modal SKO RTG ASPV -->

    <!-- Modal SKO RTG ASPV -->
    <div class="modal fade" id="modal-sko-rtg-admin">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sasaran Kinerja Objektif</h4>
            <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
              <span Arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($admrtg as $k) : ?>
                  <tr>
                    <td><?= $k['aspek']; ?></td>
                    <td><?= $k['kriteria']; ?></td>
                    <td><?= $k['target']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Modal SKO RTG ASPV -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
      </section>
      <section class="col-lg-5 connectedSortable">
    </div>
</section>
</div>
</div>
</section>

<?php include '../template/footer.php' ?>