<html>   
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>FailPlay</title>
        <link  href="/css/bootstrap.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/bootstrap-responsive.css" rel="stylesheet">
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <title><?= $page_title ?></title>   
    </head>   
    <body>   
        <div class="container">
            <div class="row">
                <div class="span8">
                <table class="table table-striped table-hover table-condensed">
                    <thead>
                        <tr>
                            <th><b>User_id</b></th>
                            <th><b>Amount money</b></th>
                            <th><b>Amount time</b></th>
                            <th><b>Late date</b></th>
                            <th><b>Type id</b></th>
                            <th><b>Tariff id</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($content as $trans): ?> 
                            <tr>
                                <td><?= $trans->user_id ?></td>
                                <td><?= $trans->amount_money ?></td>
                                <td><?= $trans->amount_time ?></td>
                                <td><?= $trans->late_date ?></td>
                                <td><?= $trans->type_id ?></td>
                                <td><?= $trans->tariff_id ?></td>
                            </tr>
                        <?php endforeach; ?>   
                    </tbody>
                </table> 
                    </div>
            </div>
        </div>
    </body>   
</html>