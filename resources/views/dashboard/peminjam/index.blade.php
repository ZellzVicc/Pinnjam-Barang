<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sistem Peminjaman Barang Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
        }
        .sidebar .nav-link:hover {
            color: #fff;
        }
        .sidebar .nav-link.active {
            color: #fff;
            background-color: #007bff;
        }
        .admin-content {
            padding: 20px;
        }
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="pt-3 text-center">
                    <h3 class="text-light mb-4">Admin Panel</h3>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#dashboard" data-bs-toggle="tab">
                            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#barang" data-bs-toggle="tab">
                            <i class="fas fa-boxes me-2"></i>Manajemen Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#peminjaman" data-bs-toggle="tab">
                            <i class="fas fa-clipboard-list me-2"></i>Data Peminjaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pengguna" data-bs-toggle="tab">
                            <i class="fas fa-users me-2"></i>Manajemen Pengguna
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#laporan" data-bs-toggle="tab">
                            <i class="fas fa-chart-bar me-2"></i>Laporan
                        </a>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link text-danger" href="#" id="btnLogout">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 admin-content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Admin</h1>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-2"></i>Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i>Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#" id="btnLogoutDropdown"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Tab content -->
                <div class="tab-content">
                    <!-- Dashboard Tab -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="card-title">Total Barang</h6>
                                                <h2 class="card-text">156</h2>
                                            </div>
                                            <i class="fas fa-boxes fa-3x opacity-50"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="card-title">Peminjaman Aktif</h6>
                                                <h2 class="card-text">24</h2>
                                            </div>
                                            <i class="fas fa-clipboard-check fa-3x opacity-50"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card text-white bg-warning">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="card-title">Menunggu Persetujuan</h6>
                                                <h2 class="card-text">8</h2>
                                            </div>
                                            <i class="fas fa-clock fa-3x opacity-50"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card text-white bg-danger">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="card-title">Terlambat Kembali</h6>
                                                <h2 class="card-text">3</h2>
                                            </div>
                                            <i class="fas fa-exclamation-triangle fa-3x opacity-50"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0">Peminjaman Terbaru</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Peminjam</th>
                                                        <th scope="col">Barang</th>
                                                        <th scope="col">Tanggal Pinjam</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>P001</td>
                                                        <td>Budi Santoso</td>
                                                        <td>Proyektor</td>
                                                        <td>19-05-2025</td>
                                                        <td><span class="badge bg-warning">Menunggu</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success me-1"><i class="fas fa-check"></i></button>
                                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>P002</td>
                                                        <td>Siti Aminah</td>
                                                        <td>Laptop</td>
                                                        <td>18-05-2025</td>
                                                        <td><span class="badge bg-success">Disetujui</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary me-1"><i class="fas fa-info"></i></button>
                                                            <button class="btn btn-sm btn-danger"><i class="fas fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>P003</td>
                                                        <td>Ahmad Fauzi</td>
                                                        <td>Speaker</td>
                                                        <td>18-05-2025</td>
                                                        <td><span class="badge bg-danger">Ditolak</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary"><i class="fas fa-info"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>P004</td>
                                                        <td>Rina Wati</td>
                                                        <td>Mikrofon</td>
                                                        <td>17-05-2025</td>
                                                        <td><span class="badge bg-success">Disetujui</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary me-1"><i class="fas fa-info"></i></button>
                                                            <button class="btn btn-sm btn-danger"><i class="fas fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>P005</td>
                                                        <td>Joko Widodo</td>
                                                        <td>Kamera</td>
                                                        <td>16-05-2025</td>
                                                        <td><span class="badge bg-info">Dikembalikan</span></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary"><i class="fas fa-info"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-light text-end">
                                        <a href="#peminjaman" data-bs-toggle="tab" class="btn btn-sm btn-primary">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0">Stok Barang Menipis</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Proyektor
                                                <span class="badge bg-danger rounded-pill">1</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Laptop
                                                <span class="badge bg-warning rounded-pill">3</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Mikrofon Wireless
                                                <span class="badge bg-warning rounded-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Kamera DSLR
                                                <span class="badge bg-danger rounded-pill">1</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Tablet
                                                <span class="badge bg-warning rounded-pill">4</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer bg-light text-end">
                                        <a href="#barang" data-bs-toggle="tab" class="btn btn-sm btn-primary">Kelola Stok</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0">Notifikasi</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-warning">
                                            <small class="text-muted">3 jam yang lalu</small>
                                            <p class="mb-0">8 permintaan peminjaman baru memerlukan persetujuan</p>
                                        </div>
                                        <div class="alert alert-danger">
                                            <small class="text-muted">5 jam yang lalu</small>
                                            <p class="mb-0">3 peminjaman melewati batas waktu pengembalian</p>
                                        </div>
                                        <div class="alert alert-info">
                                            <small class="text-muted">1 hari yang lalu</small>
                                            <p class="mb-0">Stok proyektor hampir habis (1 tersisa)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Barang Tab -->
                    <div class="tab-pane fade" id="barang">
                        <div class="card">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Manajemen Barang</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">
                                    <i class="fas fa-plus me-2"></i>Tambah Barang
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari barang...">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>Semua Kategori</option>
                                            <option>Elektronik</option>
                                            <option>Peralatan Olahraga</option>
                                            <option>Peralatan Lab</option>
                                            <option>Peralatan Musik</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>Semua Status</option>
                                            <option>Tersedia</option>
                                            <option>Dipinjam</option>
                                            <option>Dalam Perbaikan</option>
                                            <option>Stok Menipis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Stok Total</th>
                                                <th scope="col">Tersedia</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>B001</td>
                                                <td>Proyektor</td>
                                                <td>Elektronik</td>
                                                <td>5</td>
                                                <td>1</td>
                                                <td><span class="badge bg-danger">Stok Menipis</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B002</td>
                                                <td>Laptop</td>
                                                <td>Elektronik</td>
                                                <td>15</td>
                                                <td>3</td>
                                                <td><span class="badge bg-warning">Stok Menipis</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B003</td>
                                                <td>Speaker Portabel</td>
                                                <td>Elektronik</td>
                                                <td>8</td>
                                                <td>5</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B004</td>
                                                <td>Mikroskop</td>
                                                <td>Peralatan Lab</td>
                                                <td>20</td>
                                                <td>18</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B005</td>
                                                <td>Bola Basket</td>
                                                <td>Peralatan Olahraga</td>
                                                <td>12</td>
                                                <td>8</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B006</td>
                                                <td>Kamera DSLR</td>
                                                <td>Elektronik</td>
                                                <td>3</td>
                                                <td>1</td>
                                                <td><span class="badge bg-danger">Stok Menipis</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>B007</td>
                                                <td>Keyboard Piano</td>
                                                <td>Peralatan Musik</td>
                                                <td>4</td>
                                                <td>4</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusBarang"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info"><i class="fas fa-history"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Peminjaman Tab -->
                    <div class="tab-pane fade" id="peminjaman">
                        <div class="card">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Data Peminjaman</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPeminjaman">
                                    <i class="fas fa-plus me-2"></i>Tambah Peminjaman
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari peminjaman...">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>Semua Status</option>
                                            <option>Menunggu Persetujuan</option>
                                            <option>Disetujui</option>
                                            <option>Ditolak</option>
                                            <option>Dikembalikan</option>
                                            <option>Terlambat</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-text">Tanggal</span>
                                            <input type="date" class="form-control">
                                            <span class="input-group-text">-</span>
                                            <input type="date" class="form-control">
                                            <button class="btn btn-outline-secondary" type="button">Filter</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Peminjam</th>
                                                <th scope="col">Barang</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Tanggal Pinjam</th>
                                                <th scope="col">Tanggal Kembali</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>P001</td>
                                                <td>Budi Santoso</td>
                                                <td>Proyektor</td>
                                                <td>1</td>
                                                <td>19-05-2025</td>
                                                <td>21-05-2025</td>
                                                <td>
                                                    <span class="badge bg-warning">Menunggu</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-success me-1" title="Setujui"><i class="fas fa-check"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" title="Tolak"><i class="fas fa-times"></i></button>
                                                    <button class="btn btn-sm btn-primary" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailPeminjaman"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>P002</td>
                                                <td>Siti Aminah</td>
                                                <td>Laptop</td>
                                                <td>1</td>
                                                <td>18-05-2025</td>
                                                <td>25-05-2025</td>
                                                <td>
                                                    <span class="badge bg-success">Disetujui</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-info me-1" title="Tandai Kembali"><i class="fas fa-undo"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" title="Batalkan"><i class="fas fa-ban"></i></button>
                                                    <button class="btn btn-sm btn-primary" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailPeminjaman"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>P003</td>
                                                <td>Ahmad Fauzi</td>
                                                <td>Speaker</td>
                                                <td>2</td>
                                                <td>18-05-2025</td>
                                                <td>19-05-2025</td>
                                                <td>
                                                    <span class="badge bg-danger">Ditolak</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailPeminjaman"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>P004</td>
                                                <td>Rina Wati</td>
                                                <td>Mikrofon</td>
                                                <td>3</td>
                                                <td>17-05-2025</td>
                                                <td>20-05-2025</td>
                                                <td>
                                                    <span class="badge bg-success">Disetujui</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-info me-1" title="Tandai Kembali"><i class="fas fa-undo"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" title="Batalkan"><i class="fas fa-ban"></i></button>
                                                    <button class="btn btn-sm btn-primary" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailPeminjaman"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>P005</td>
                                                <td>Joko Widodo</td>
                                                <td>Kamera</td>
                                                <td>1</td>
                                                <td>16-05-2025</td>
                                                <td>18-05-2025</td>
                                                <td>
                                                    <span class="badge bg-info">Dikembalikan</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailPeminjaman"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>P006</td>
                                                <td>Ani Susanti</td>
                                                <td>Bola Basket</td>
                                                <td>4</td>
                                                <td>15-05-2025</td>
                                                <td>17-05-2025</td>
                                                <td>
                                                    <span class="badge bg-danger">Terlambat</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" title="Kirim Pengingat"><i class="fas fa-bell"></i></button>
                                                    <button class="btn btn-sm btn-info me-1" title="Tandai Kembali"><i class="fas fa-undo"></i></button>
                                                    <button class="btn btn-sm btn-primary" title="Detail" data-bs-toggle="modal" data-bs-target="#modalDetailPeminjaman"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Pengguna Tab -->
                    <div class="tab-pane fade" id="pengguna">
                        <div class="card">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Manajemen Pengguna</h5>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPengguna">
                                    <i class="fas fa-plus me-2"></i>Tambah Pengguna
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari pengguna...">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>Semua Peran</option>
                                            <option>Admin</option>
                                            <option>Siswa</option>
                                            <option>Guru</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>Semua Status</option>
                                            <option>Aktif</option>
                                            <option>Tidak Aktif</option>
                                            <option>Diblokir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Peran</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>U001</td>
                                                <td>Admin Sistem</td>
                                                <td>admin</td>
                                                <td>admin@sekolah.sch.id</td>
                                                <td><span class="badge bg-dark">Admin</span></td>
                                                <td><span class="badge bg-success">Aktif</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditPengguna"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusPengguna"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailPengguna"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>U002</td>
                                                <td>Budi Santoso</td>
                                                <td>budi</td>
                                                <td>budi@sekolah.sch.id</td>
                                                <td><span class="badge bg-primary">Guru</span></td>
                                                <td><span class="badge bg-success">Aktif</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditPengguna"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusPengguna"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailPengguna"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>U003</td>
                                                <td>Siti Aminah</td>
                                                <td>siti</td>
                                                <td>siti@sekolah.sch.id</td>
                                                <td><span class="badge bg-info">Siswa</span></td>
                                                <td><span class="badge bg-success">Aktif</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditPengguna"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusPengguna"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailPengguna"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>U004</td>
                                                <td>Ahmad Fauzi</td>
                                                <td>ahmad</td>
                                                <td>ahmad@sekolah.sch.id</td>
                                                <td><span class="badge bg-info">Siswa</span></td>
                                                <td><span class="badge bg-danger">Diblokir</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditPengguna"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusPengguna"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailPengguna"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>U005</td>
                                                <td>Rina Wati</td>
                                                <td>rina</td>
                                                <td>rina@sekolah.sch.id</td>
                                                <td><span class="badge bg-primary">Guru</span></td>
                                                <td><span class="badge bg-success">Aktif</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditPengguna"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusPengguna"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailPengguna"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>U006</td>
                                                <td>Joko Widodo</td>
                                                <td>joko</td>
                                                <td>joko@sekolah.sch.id</td>
                                                <td><span class="badge bg-info">Siswa</span></td>
                                                <td><span class="badge bg-warning">Tidak Aktif</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditPengguna"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalHapusPengguna"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailPengguna"><i class="fas fa-info"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Laporan Tab -->
                    <div class="tab-pane fade" id="laporan">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0">Statistik Peminjaman Bulanan</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartPeminjamanBulanan" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0">Statistik Barang Terpopuler</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartBarangPopuler" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Laporan Peminjaman</h5>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary">Harian</button>
                                            <button class="btn btn-sm btn-primary">Mingguan</button>
                                            <button class="btn btn-sm btn-outline-primary">Bulanan</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-text">Periode</span>
                                                    <input type="date" class="form-control">
                                                    <span class="input-group-text">-</span>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-select">
                                                    <option selected>Semua Kategori</option>
                                                    <option>Elektronik</option>
                                                    <option>Peralatan Olahraga</option>
                                                    <option>Peralatan Lab</option>
                                                    <option>Peralatan Musik</option>
                                                    <option>Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-primary w-100">Filter</button>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button" id="dropdownExport" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Export
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownExport">
                                                        <li><a class="dropdown-item" href="#"><i class="far fa-file-pdf me-2"></i>PDF</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="far fa-file-excel me-2"></i>Excel</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="far fa-file-csv me-2"></i>CSV</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Total Dipinjam</th>
                                                        <th scope="col">Tersedia</th>
                                                        <th scope="col">Terlambat</th>
                                                        <th scope="col">Kerusakan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>B001</td>
                                                        <td>Proyektor</td>
                                                        <td>Elektronik</td>
                                                        <td>42</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B002</td>
                                                        <td>Laptop</td>
                                                        <td>Elektronik</td>
                                                        <td>35</td>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B003</td>
                                                        <td>Speaker Portabel</td>
                                                        <td>Elektronik</td>
                                                        <td>28</td>
                                                        <td>5</td>
                                                        <td>0</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B004</td>
                                                        <td>Mikroskop</td>
                                                        <td>Peralatan Lab</td>
                                                        <td>15</td>
                                                        <td>18</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B005</td>
                                                        <td>Bola Basket</td>
                                                        <td>Peralatan Olahraga</td>
                                                        <td>24</td>
                                                        <td>8</td>
                                                        <td>4</td>
                                                        <td>2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Barang -->
    <div class="modal fade" id="modalTambahBarang" tabindex="-1" aria-labelledby="modalTambahBarangLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahBarangLabel">Tambah Barang Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategoriBarang" class="form-label">Kategori</label>
                            <select class="form-select" id="kategoriBarang" required>
                                <option value="">Pilih Kategori</option>
                                <option>Elektronik</option>
                                <option>Peralatan Olahraga</option>
                                <option>Peralatan Lab</option>
                                <option>Peralatan Musik</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahBarang" class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" id="jumlahBarang" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="kondisiBarang" class="form-label">Kondisi</label>
                            <select class="form-select" id="kondisiBarang" required>
                                <option value="">Pilih Kondisi</option>
                                <option>Baru</option>
                                <option>Baik</option>
                                <option>Rusak Ringan</option>
                                <option>Rusak Berat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiBarang" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiBarang" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fotoBarang" class="form-label">Foto Barang</label>
                            <input class="form-control" type="file" id="fotoBarang">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Barang -->
    <div class="modal fade" id="modalEditBarang" tabindex="-1" aria-labelledby="modalEditBarangLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditBarangLabel">Edit Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" id="idBarangEdit" value="B001">
                        <div class="mb-3">
                            <label for="namaBarangEdit" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarangEdit" value="Proyektor" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategoriBarangEdit" class="form-label">Kategori</label>
                            <select class="form-select" id="kategoriBarangEdit" required>
                                <option>Elektronik</option>
                                <option>Peralatan Olahraga</option>
                                <option>Peralatan Lab</option>
                                <option>Peralatan Musik</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahBarangEdit" class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" id="jumlahBarangEdit" value="5" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="kondisiBarangEdit" class="form-label">Kondisi</label>
                            <select class="form-select" id="kondisiBarangEdit" required>
                                <option>Baru</option>
                                <option selected>Baik</option>
                                <option>Rusak Ringan</option>
                                <option>Rusak Berat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiBarangEdit" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiBarangEdit" rows="3">Proyektor merk EPSON EB-X05, resolusi XGA 1024 x 768, brightness 3300 lumens</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fotoBarangEdit" class="form-label">Foto Barang</label>
                            <input class="form-control" type="file" id="fotoBarangEdit">
                            <div class="mt-2">
                                <img src="/api/placeholder/150/100" alt="Foto Proyektor" class="img-thumbnail">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Barang -->
    <div class="modal fade" id="modalHapusBarang" tabindex="-1" aria-labelledby="modalHapusBarangLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusBarangLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus barang <strong>Proyektor</strong> dengan ID <strong>B001</strong>?</p>
                    <p class="text-danger">Tindakan ini tidak dapat dibatalkan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>