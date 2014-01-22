<html>   
    <head>   
        <title><?= $page_title ?></title>   
    </head>   
    <body>   

        <table>
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

    </body>   
</html>