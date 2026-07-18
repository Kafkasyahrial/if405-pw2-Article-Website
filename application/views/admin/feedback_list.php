<h3 class="mb-4">Daftar Feedback Pengguna</h3>
<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Pesan / Feedback</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($feedbacks)): ?>
                <tr><td colspan="5" class="text-center">Belum ada feedback masuk.</td></tr>
                <?php endif; ?>
                <?php $no=1; foreach($feedbacks as $fb): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><strong><?= $fb->name ?></strong></td>
                    <td><?= $fb->email ?></td>
                    <td><?= $fb->message ?></td>
                    <td><small class="text-muted"><?= date('d/m/Y H:i', strtotime($fb->created_at)) ?></small></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>