<html>
<head>
  <title>Форма загрузки cvs файла</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Форма</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">Список</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <?php if (isset($_GET['redirection']) && $_GET['redirection'] === 'success'): ?>
            <h3>Файл успешно загружен</h3>
        <?php endif; ?>
        <form class="" action="/upload" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input class="form-control form-control-lg" type="file" name="csv_file" accept=".csv">
            </div>
            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Загрузить">
            </div>
        </form>
    </main>
</body>
</html>
