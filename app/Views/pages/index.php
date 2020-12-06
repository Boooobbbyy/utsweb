  <?= $this->extend('layout/templete'); ?>
  <?= $this->section('content'); ?>

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                          <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Profile
                          </a>
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                              Settings
                          </a>
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                              Activity Log
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                          </a>
                      </div>
                  </li>

              </ul>

          </nav>
          <!-- End of Topbar -->

          <div class="container">
              <div class="row">
                  <div class="col-6">
                      <h3 class="mt-2">Daftar Buku</h3>
                      <form action="" method="post">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Cari......" name="keyword">
                              <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <?php if (session()->getFlashdata('pesan')) : ?>
                          <div class="alert alert-success" role="alert">
                              <?= session()->getFlashdata('pesan'); ?>
                          </div>
                      <?php endif; ?>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Sampul</th>
                                  <th scope="col">kode</th>
                                  <th scope="col">Judul</th>
                                  <th scope="col">Penulis</th>
                                  <th scope="col">Penerbit</th>
                                  <th scope="col">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                              <?php foreach ($buku as $b) : ?>
                                  <tr>
                                      <th scope="row"><?= $i++; ?></th>
                                      <td><img src="/img/<?= $b['sampul']; ?>" alt="" class="sampul"></td>
                                      <td><?= $b['kode']; ?></td>
                                      <td><?= $b['judul']; ?></td>
                                      <td><?= $b['penulis']; ?></td>
                                      <td><?= $b['penerbit']; ?></td>
                                      <td>
                                          <a href="/pages/<?= $b['slug']; ?>" class="btn btn-success">Detail</a>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                      <?= $pager->links('buku', 'buku_pagination'); ?>
                  </div>
              </div>
          </div>
          <?= $this->endSection(); ?>