
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
 
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'jabatan' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jabatan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/jabatan/add') ?>">Input Jabatan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/jabatan') ?>">Edit Jabatan</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'karyawan' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Karyawan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/karyawan/add') ?>">Input Karyawan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/karyawan') ?>">Edit Karyawan</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'aturan' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Aturan Gaji</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/aturan/add') ?>">Input Aturan Gaji</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/aturan') ?>">Edit Aturan Gaji</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'gaji' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Penggajian</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/gaji/add') ?>">Input Penggajian</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/gaji') ?>">Edit Penggajian</a>
        </div>
    </li>

</ul>