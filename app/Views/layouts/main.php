<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title><?= $title ?? 'Mini MVC' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --mint-50: #f4fff8;
            --mint-200: #c8f2d3;
            --mint-300: #a8e6bf;
            --matcha-500: #7aa05a;
            --matcha-700: #4f6f3a;
            --matcha-900: #2f4722;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--mint-50) 0%, #eef8ef 100%);
            color: var(--matcha-900);
        }

        .page-shell {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .content-shell {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(122, 160, 90, 0.2);
            border-radius: 1.25rem;
            box-shadow: 0 14px 34px rgba(79, 111, 58, 0.12);
            padding: 2rem;
            backdrop-filter: blur(6px);
        }

        .content-shell a {
            color: var(--matcha-700);
            font-weight: 600;
        }

        .content-shell a:hover {
            color: var(--matcha-900);
        }

        @media (max-width: 576px) {
            .content-shell {
                padding: 1.25rem;
            }
        }
    </style>
</head>
<body>

    <?php require BASE_PATH . '/app/Views/partials/navbar.php'; ?>

    <main class="container page-shell">
        <div class="content-shell">
            <?= $content ?>
        </div>
    </main>

    <?php require BASE_PATH . '/app/Views/partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>