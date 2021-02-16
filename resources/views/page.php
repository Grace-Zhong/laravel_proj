<!DOCTYPE html>   
<html>
    <head>
        <title> Pagination </title>     
        <meta charset="utf-8" />

    </head>

    <body>
        <table style="border: 1px solid #CCC">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th>Ranking</th>
                    <th>Player</th>
                    <th>Country</th>
                    <th>Age</th>
                    <th>Points</th>
                    <th>Tournaments</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $val): ?>
                    <tr>
                        <td><?php echo $val -> Date; ?></td>
                        <td><?php echo $val -> Gender; ?></td>
                        <td><?php echo $val -> Type; ?></td>
                        <td><?php echo $val -> Ranking; ?></td>
                        <td><?php echo $val -> Player; ?></td>
                        <td><?php echo $val -> Country; ?></td>
                        <td><?php echo $val -> Age; ?></td>
                        <td><?php echo $val -> Points; ?></td>
                        <td><?php echo $val -> Tournaments; ?></td>
                    </tr>
                <?php endforeach;?>
                
            </tbody>
        </table>
        <?php echo $data -> links(); ?>
    </body>
    
</html>