<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article->title ?> - NOC Knowledge Base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container mb-4" style="max-width: 800px;">
    <nav class="navbar navbar-dark bg-dark rounded shadow-sm px-4 py-3 mb-4">
        <a class="navbar-brand font-weight-bold" href="<?= base_url() ?>">
            <i class="fa-solid fa-network-wired text-info me-2"></i> <strong>NOC Knowledge Base</strong>
        </a>
        <a href="<?= base_url() ?>" class="btn btn-outline-light btn-sm">&larr; Kembali ke Daftar</a>
    </nav>

    <div class="card shadow-sm border-0 p-4">
        <div class="card-body">
            <div class="mb-3">
                <span class="badge bg-info text-dark me-2"><?= $article->category ?></span>
                <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> <?= date('d F Y - H:i', strtotime($article->created_at)) ?> WIB</span>
            </div>
            
            <h2 class="card-title fw-bold mb-4 text-dark"><?= $article->title ?></h2>
            <hr>
            
            <!-- Isi artikel lengkap -->
            <div class="article-content mt-4" style="line-height: 1.8; font-size: 1.05rem; white-space: pre-line;">
                <?= $article->content ?>
            </div>
            
            <hr class="my-5">
            <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Beranda</a>
                <span class="text-muted small">Divisi Network Operation Center (NOC)</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>