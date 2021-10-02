        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: darksalmon;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-flower"></i> -->
                </div>
                <div class="sidebar-brand-text mx-4">Aglaonemaku</div>
            </a>
            <!-- Sidebar Toggler (Sidebar) -->


            <!-- Divider -->
            <!-- <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Management
            </div>
            <?php if ($title == 'Dashboard' || $title == 'Dashboard User') : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url('Dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <hr class="sidebar-divider"> -->
            <!-- <div class="sidebar-heading">
                WBS
            </div> -->
            <!-- <?php if ($title == 'Cek Diagnosa') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url('Diagnosa'); ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Cek Diagnosa</span></a>
                </li>

                <?php if ($title == 'Hasil Diagnosa') : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?= base_url('Diagnosa/hasil'); ?>">
                        <i class="fas fa-fw fa-key"></i>
                        <span>Hasil Diagnosa</span></a>
                    </li> -->

                    <?php
                    if ($this->session->role == 'admin') { ?>
                        <hr class="sidebar-divider">
                        <!-- <div class="sidebar-heading">
                            Master Data
                        </div> -->
                        <?php if ($title == 'Data Gejala') : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link pb-0" href="<?= base_url('Gejala'); ?>">
                                <i class="fas fa-fw fa-key"></i>
                                <span>Data Gejala</span></a>
                            </li>

                            <?php if ($title == 'Data Hama Penyakit') : ?>
                                <li class="nav-item active">
                                <?php else : ?>
                                <li class="nav-item">
                                <?php endif; ?>
                                <a class="nav-link pb-0" href="<?= base_url('Hama_penyakit'); ?>">
                                    <i class="fas fa-fw fa-key"></i>
                                    <span>Data Hama Penyakit</span></a>
                                </li>

                                <?php if ($title == 'Data Relasi') : ?>
                                    <li class="nav-item active">
                                    <?php else : ?>
                                    <li class="nav-item">
                                    <?php endif; ?>
                                    <a class="nav-link pb-0" href="<?= base_url('Relasi'); ?>">
                                        <i class="fas fa-fw fa-key"></i>
                                        <span>Data Relasi</span></a>
                                    </li>

                                    <?php if ($title == 'Data Rule') : ?>
                                        <li class="nav-item active">
                                        <?php else : ?>
                                        <li class="nav-item">
                                        <?php endif; ?>
                                        <a class="nav-link pb-0" href="<?= base_url('Rule'); ?>">
                                            <i class="fas fa-fw fa-key"></i>
                                            <span>Data Rule</span></a>
                                        </li>
                                        <?php if ($title == 'Data Pengguna') : ?>
                                            <li class="nav-item active">
                                            <?php else : ?>
                                            <li class="nav-item">
                                            <?php endif; ?>
                                            <a class="nav-link pb-0" href="<?= base_url('Pengguna'); ?>">
                                                <i class="fas fa-fw fa-key"></i>
                                                <span>Data Pengguna</span></a>
                                            </li>

                                            <?php if ($title == 'Data Favorit') : ?>
                                            <li class="nav-item active">
                                            <?php else : ?>
                                            <li class="nav-item">
                                            <?php endif; ?>
                                            <a class="nav-link pb-0" href="<?= base_url('Favorit'); ?>">
                                            <i class="fas fa-fw fa-key"></i>
                                            <span>Data Favorit</span></a>
                                            </li>
                                        <?php }
                                        ?>

                                        

                                        <hr class="sidebar-divider mt-3">
                                        <div class="text-center d-none d-md-inline">
                                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                        </div>

        </ul>
        <!-- End  of Sidebar -->