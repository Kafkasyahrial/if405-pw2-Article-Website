<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Knowledge Base - Divisi NOC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light py-4">

<div class="container mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow-sm px-4 py-3">
        <a class="navbar-brand font-weight-bold" href="<?= base_url() ?>">
            <i class="fa-solid fa-network-wired text-info me-2"></i> <strong>NOC Knowledge Base</strong>
        </a>
        <div class="ms-auto">
            <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-outline-light btn-sm">
                <i class="fa-solid fa-lock me-1"></i> Login Admin
            </a>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row">
        <!-- KOLOM KIRI: Daftar Artikel -->
        <div class="col-lg-7 mb-4">
            <h4 class="mb-3"><i class="fa-solid fa-book-open text-primary me-2"></i> Artikel Panduan & SOP Terbaru</h4>
            
            <?php if (empty($articles)): ?>
                <div class="alert alert-info shadow-sm">
                    <i class="fa-solid fa-info-circle me-1"></i> Belum ada artikel Knowledge Base yang dipublikasikan oleh Admin NOC.
                </div>
            <?php else: ?>
                <div class="row">
                    <?php foreach ($articles as $row): ?>
                    <div class="col-12 mb-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-info text-dark"><?= $row->category ?></span>
                                    <small class="text-muted"><i class="fa-regular fa-clock me-1"></i><?= date('d M Y', strtotime((string) $row->created_at)) ?></small>
                                </div>
                                <h5 class="card-title text-dark"><?= $row->title ?></h5>
                                <p class="card-text text-muted">
                                    <!-- Mencegah error tipe data teks pada PHP 8.2 -->
                                    <?= substr(strip_tags((string) $row->content), 0, 120) ?>...
                                </p>
                                <a href="<?= base_url('welcome/read/' . $row->slug) ?>" class="btn btn-sm btn-outline-primary">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- KOLOM KANAN: Form Feedback -->
        <div class="col-lg-5">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white py-3">
                    <h5 class="mb-0"><i class="fa-solid fa-comment-dots text-info me-2"></i> Kirim Feedback & Masukan</h5>
                </div>
                <div class="card-body p-4">
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger text-sm">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('welcome/send_feedback') ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="<?= set_value('name') ?>" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>" placeholder="nama@domain.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan / Masukan <span class="text-danger">*</span></label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Tuliskan kendala jaringan atau masukan untuk NOC..."><?= set_value('message') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-paper-plane me-1"></i> Kirim Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('success')): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Terkirim!',
        text: '<?= $this->session->flashdata('success') ?>',
        timer: 3000,
        showConfirmButton: false
    });
</script>
<?php endif; ?>
</body>
</html>