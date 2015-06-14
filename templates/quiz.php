<section id="main" class="wrapper style1">
	<header class="major">
		<h2>Quiz 0</h2>
		<p>Practice quiz</p>
	</header>
	
	<div class="container">
		<section>
			<form action="quiz.php" method="post">

				<?php $i = 0; foreach ($questions as $question): ?>
					
					<div class="12u$">
						<h2>Question <?= $i ?> </h2>
						<p><?= $question[1] ?></p>

						<input type="radio" name="question<?=$question["0"]?>" value="<?= $question[2] ?>"><?= $question[2] ?><br>
						<input type="radio" name="question<?=$question["0"]?>" value="<?= $question[3] ?>"><?= $question[3] ?><br>
						<input type="radio" name="question<?=$question["0"]?>" value="<?= $question[4] ?>"><?= $question[4] ?><br>
						<input type="radio" name="question<?=$question["0"]?>" value="<?= $question[5] ?>"><?= $question[5] ?><br>
						<input type="hidden" name="order[]" value="<?= $question["0"] ?>">
						
					</div>
					<hr>
				<?php $i++; endforeach ?>

				<input type="submit" name="submit" value="Submit"><br>
			</form>

		</section>
	</div>

</section>