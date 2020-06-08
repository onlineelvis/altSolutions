<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/"> Back </a>

<form action="/partner" method="get">

    <label for="partner"> Partner </label>
    <input id="partner" name="partner" type="text">
    <br>
    <button type="submit"> Submit </button>

</form>


<?php foreach ($usersAsks as $userAsk) : ?>
    <?php if ($userAsk['partner'] === strtoupper($_REQUEST['partner']) && $userAsk['deal_status'] === \App\Models\Partner::ASK_TRIGGER): ?>

     <h4>  <?= $userAsk['email'] ?>  </h4>
     <ul>
        <li>
           $ <?= $userAsk['sum'] ?>
        </li>
    </ul>

        <form action="<?= '/partner/'. $userAsk['id'] ?>" method="post">

            <button type="submit">
                Send offer
            </button>

        </form>


    <?php endif; ?>
<?php endforeach; ?>







</body>
</html>