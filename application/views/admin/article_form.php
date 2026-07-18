<?php $is_edit = isset($article); ?>
<div class="card shadow-sm max-w-lg">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0"><?= $is_edit ? 'Edit Artikel NOC' : 'Tambah Artikel Baru' ?></h5>
    </div>
    <div class="card-body">
        <!-- Menampilkan pesan error validasi form -->
        <?php if(validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= $is_edit ? base_url('admin/edit_article/'.$article->id) : base_url('admin/add_article') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Judul Artikel <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" value="<?= set_value('title', $is_edit ? $article->title : '') ?>" placeholder="Contoh: SOP Troubleshooting Link BGP Flapping">
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori <span class="text-danger">*</span></label>
                <input type="text" name="category" class="form-control" value="<?= set_value('category', $is_edit ? $article->category : '') ?>" placeholder="Contoh: Routing / Switching / Hardware">
            </div>

            <div class="mb-3">
                <label class="form-label">Status Draft / Publish <span class="text-danger">*</span></label>
                <select name="status" class="form-select">
                    <option value="draft" <?= set_select('status', 'draft', ($is_edit && $article->status == 'draft')) ?>>Draft (Simpan sementara)</option>
                    <option value="published" <?= set_select('status', 'published', ($is_edit && $article->status == 'published')) ?>>Published (Tayangkan)</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Konten Artikel <span class="text-danger">*</span></label>
                <textarea name="content" class="form-control" rows="8"><?= set_value('content', $is_edit ? $article->content : '') ?></textarea>
            </div>

            <a href="<?= base_url('admin/articles') ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save me-1"></i> Simpan Data</button>
        </form>
    </div>
</div>