<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('assets/sbadmin2/'); ?>index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SDN 3 Cahya Negeri</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('assets/sbadmin2/'); ?>index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('assets/sbadmin2/'); ?>#" data-toggle="collapse" data-target="#collapseAkademik" aria-expanded="true" aria-controls="collapseAkademik">
            <i class="fas fa-fw fa-cog"></i>
            <span>Akademik</span>
        </a>
        <div id="collapseAkademik" class="collapse" aria-labelledby="headingAkademik" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Akademik :</h6>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>buttons.html">Kalender Akademik</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>cards.html">Data Kelas</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>cards.html">Mata Pelajaran</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>cards.html">Raport</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('assets/sbadmin2/'); ?>#" data-toggle="collapse" data-target="#collapseAbsensi" aria-expanded="true" aria-controls="collapseAbsensi">
            <i class="fas fa-fw fa-cog"></i>
            <span>Absensi</span>
        </a>
        <div id="collapseAbsensi" class="collapse" aria-labelledby="headingAbsensi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Absensi :</h6>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>buttons.html">Absensi Siswa</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>cards.html">Absensi Pegawai</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('assets/sbadmin2/'); ?>#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingData" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>utilities-color.html">Data Siswa</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>utilities-animation.html">Data Pegawai</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('assets/sbadmin2/'); ?>#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Keuangan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>utilities-color.html">Akun</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>utilities-color.html">Pembayaran SPP</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>utilities-animation.html">Pembayaran Uang Buku</a>
                <a class="collapse-item" href="<?= base_url('assets/sbadmin2/'); ?>utilities-animation.html">Slip Gaji</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Lainnya
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('assets/sbadmin2/'); ?>charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Alumni</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('assets/sbadmin2/'); ?>tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Pendaftaran Siswa Baru</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->