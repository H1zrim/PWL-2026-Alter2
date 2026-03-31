<?php
$headline = $message ?? 'Welcome to Mini MVC';
$subtext = $description ?? 'Bangun aplikasi web PHP yang rapi, ringan, dan nyaman dilihat dengan sentuhan warna mint dan matcha.';
$contactEmail = $email ?? 'admin@minimvc.local';
?>

<section class="py-2">
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color: #c8f2d3; color: #2f4722;">
                🌿 Welcome Page
            </span>

            <h1 class="display-5 fw-bold mb-3" style="color: #2f4722;">
                <?= htmlspecialchars($headline) ?>
            </h1>

            <p class="lead mb-4 text-secondary">
                <?= htmlspecialchars($subtext) ?>
            </p>

            <div class="d-flex flex-wrap gap-2">
                <a href="/home/about" class="btn btn-success px-4" style="background-color: #4f6f3a; border-color: #4f6f3a;">
                    Explore More
                </a>
                <a href="/home/contact" class="btn btn-outline-success px-4" style="color: #4f6f3a; border-color: #7aa05a;">
                    Contact Us
                </a>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="p-4 rounded-4 h-100" style="background: linear-gradient(135deg, #f4fff8 0%, #c8f2d3 100%); border: 1px solid rgba(79,111,58,0.15);">
                <h5 class="fw-bold mb-3" style="color: #4f6f3a;">Kenapa memilih Mini MVC?</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3">✅ Struktur sederhana dan mudah dipahami</li>
                    <li class="mb-3">✅ Sudah terintegrasi dengan Bootstrap CDN</li>
                    <li class="mb-0">✅ Cocok untuk latihan PWL dan pengembangan dasar MVC</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="row g-4 mt-2">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4">
            <div class="card-body">
                <h5 class="card-title" style="color: #4f6f3a;">Fresh Design</h5>
                <p class="card-text text-secondary">Tampilan lembut dengan kombinasi warna mint dan matcha yang modern dan nyaman.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4">
            <div class="card-body">
                <h5 class="card-title" style="color: #4f6f3a;">Responsive Layout</h5>
                <p class="card-text text-secondary">Komponen Bootstrap membantu halaman tetap rapi di desktop maupun mobile.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4">
            <div class="card-body">
                <h5 class="card-title" style="color: #4f6f3a;">Easy to Extend</h5>
                <p class="card-text text-secondary">Siap dikembangkan untuk fitur lanjutan seperti CRUD, autentikasi, dan dashboard.</p>
            </div>
        </div>
    </div>
</section>

<section class="mt-4 p-4 rounded-4" style="background-color: #eef8ef; border: 1px dashed #a8e6bf;">
    <div class="row align-items-center g-3">
        <div class="col-md-8">
            <h4 class="mb-1" style="color: #2f4722;">Mulai bangun project-mu sekarang</h4>
            <p class="mb-0 text-secondary">Butuh bantuan atau ingin diskusi? Hubungi kami di <strong><?= htmlspecialchars($contactEmail) ?></strong>.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <a href="mailto:<?= htmlspecialchars($contactEmail) ?>" class="btn btn-success px-4" style="background-color: #7aa05a; border-color: #7aa05a;">
                Get Started
            </a>
        </div>
    </div>
</section>