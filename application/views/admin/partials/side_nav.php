<h5 class="text-center mb-4 mt-2"><i class="fa-solid fa-network-wired text-info me-2"></i> NOC Admin</h5>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link text-white <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <i class="fa-solid fa-chart-pie me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="<?= base_url('admin/articles') ?>" class="nav-link text-white <?= ($this->uri->segment(2) == 'articles') ? 'active' : '' ?>">
                <i class="fa-solid fa-book me-2"></i> Artikel NOC
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="<?= base_url('admin/feedbacks') ?>" class="nav-link text-white <?= ($this->uri->segment(2) == 'feedbacks') ? 'active' : '' ?>">
                <i class="fa-solid fa-comments me-2"></i> Feedback
            </a>
        </li>
    </ul>
    <hr>
    <div class="text-muted text-center" style="font-size: 0.8rem;">NOC Base v1.0</div>
</div>
<div class="main-content">