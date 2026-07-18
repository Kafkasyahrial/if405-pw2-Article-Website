<h3 class="mb-4">Dashboard Overview</h3>
<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card text-white bg-primary shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Total Artikel NOC</h6>
                    <h2 class="mb-0"><?= $total_articles ?></h2>
                </div>
                <i class="fa-solid fa-book fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card text-white bg-success shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="card-title">Feedback Masuk</h6>
                    <h2 class="mb-0"><?= $total_feedbacks ?></h2>
                </div>
                <i class="fa-solid fa-comments fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
</div>