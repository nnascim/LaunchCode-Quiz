<table class="table table-striped">
    <thead>
        <tr>
            <td><strong>Symbol</strong></td>
            <td><strong>Name</strong></td>
            <td><strong>Shares</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>TOTAL</strong></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tabledata as $data): ?>
		    <tr>
		    	<td>
		    		<?= $data["symbol"] ?>
		    	</td>
		    	<td>
		    		<?= $data["name"] ?>
		    	</td>
		    	<td>
		    		<?= $data["shares"] ?>
		    	</td>
		    	<td>
		    		$<?= $data["price"] ?>
		    	</td>
		    	<td>
		    		$<?= number_format(($data["shares"] * $data["price"]), 2) ?>
		    	</td>
		    </tr>
		<?php endforeach ?>

    <tr>
        <td>
        	<strong>TOTAL CASH</strong>
        </td>
        <td colspan="6">
        	<strong>$<?= number_format($cash["cash"], 2) ?></strong>
        </td>
    </tr>
    </tbody>
</table>