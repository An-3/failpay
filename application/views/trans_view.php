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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($content as $trans): ?> 
                    <tr>
                        <td><?= $trans->user_id ?></td>
                        <td><?= $trans->amount_money ?></td>
                    </tr>
                <?php endforeach; ?>   
            </tbody>
        </table> 

    </body>   
</html>