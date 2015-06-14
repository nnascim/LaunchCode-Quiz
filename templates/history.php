<table class="table table-striped">
    <thead>
        <tr>
            <th>Transaction</th>
            <th>Date/Time</th>
            <th>Symbol</th>
            <th>Shares</th>
            <th>Price</th>
        </tr>
    </thead>
        
    <?php foreach($tabledata as $data): ?>
        <tbody>
            <tr>
                <td>
                    <?= $data["transaction"] ?>
                </td>
                <td>
                    <?= date("m/d/y g:i A", strtotime($data["time"])); ?>
                </td>
                <td>
                    <?= $data["symbol"] ?>
                </td>
                <td>
                    <?= $data["shares"] ?>
                 </td>
                <td>
                    $<?= $data["price"] ?>
                </td>
            </tr>
        </tbody>
    <?php endforeach ?>

</table>