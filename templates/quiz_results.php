<?php $i = 0; foreach ($results as $result): ?>

	<div class="12u$">
		<p><?= $i . " - " . $result[0] ?></p>

		<?= "You answered: " . $result[1] ?> <br>

		<?php
			if($result[1] == $result[2]){
				print "Correct!";
			}
			else{
				print "Incorrect!" . "<br><br>";
				print "Correct answer: " . $result[2] . "<br>";
			}
		?>
		
	</div>
	<hr>

<?php $i++; endforeach ?>