<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <!--Exibição da lista de usuários-->
    <div class="container">
        <h1>Usuários</h1>

        <a href="/site-teste/public/?acao=criar">Novo usuário</a>

        <ul>
            <?php foreach ($usuarios as $u): ?>
                <li><?= $u['nome'] ?> - <?= $u['email'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
