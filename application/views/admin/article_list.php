<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Manajemen Artikel Knowledge Base</h3>
    <a href="<?= base_url('admin/add_article') ?>" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Tambah Artikel
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($articles)): ?>
                <tr><td colspan="5" class="text-center">Belum ada artikel.</td></tr>
                <?php endif; ?>
                <?php $no=1; foreach($articles as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->title ?></td>
                    <td><span class="badge bg-secondary"><?= $row->category ?></span></td>
                    <td>
                        <?php if($row->status == 'published'): ?>
                            <span class="badge bg-success">Published</span>
                        <?php else: ?>
                            <span class="badge bg-warning text-dark">Draft</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/edit_article/'.$row->id) ?>" class="btn btn-sm btn-info text-white"><i class="fa-solid fa-edit"></i> Edit</a>
                        <!-- Class btn-delete memicu SweetAlert di footer -->
                        <a href="<?= base_url('admin/delete_article/'.$row->id) ?>" class="btn btn-sm btn-danger btn-delete"><i class="fa-solid fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>