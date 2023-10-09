<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        font-family: "Helvetica Neue",
            Arial,
            "Hiragino Kaku Gothic ProN",
            "Hiragino Sans",
            Meiryo,
            sans-serif;
    }
    </style>
    <title>お問い合わせフォーム</title>
  </head>
  <body>
    <div class="container">
    <div class="header">
            <div class="title">
                <h1>資料請求</h1>
                <div class="subtitle">
                    <a href="/contact">ホーム</a>
                    <p> > 資料請求</p>
                </div>
            </div>  
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>