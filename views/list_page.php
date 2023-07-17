<html>
<head>
  <title>Список товаров</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Форма</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/list">Список</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Код</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Уровень1</th>
                    <th scope="col">Уровень2</th>
                    <th scope="col">Уровень3</th>
                    <th scope="col">Цена</th>
                    <th scope="col">ЦенаСП</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Поля свойств</th>
                    <th scope="col">Совместные покупки</th>
                    <th scope="col">Единица измерения</th>
                    <th scope="col">Картинка</th>
                    <th scope="col">Выводить на главной</th>
                    <th scope="col">Описание</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['code'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['level_1'] ?></td>
                    <td><?= $product['level_2'] ?></td>
                    <td><?= $product['level_3'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['price_sp'] ?></td>
                    <td><?= $product['count'] ?></td>
                    <td><?= $product['property_fields'] ?></td>
                    <td><?= $product['joint_purchases'] ?></td>
                    <td><?= $product['unit'] ?></td>
                    <td><?= $product['image'] ?></td>
                    <td><?= $product['show_frontpage'] ?></td>
                    <td><?= $product['description'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php for ($i = 0; $i < $lastPage; $i++): ?>
                    <li class="page-item <?=($i == $page) ? 'active' : '';?>">
                        <a class="page-link" href="?page=<?=$i;?>"><?=$i + 1;?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>

    </main>
</body>
</html>
