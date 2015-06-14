<?php
	// configuration
    require("../includes/config.php");

	if (isset($_POST['submit'])) {
		$answers = query("SELECT id, answer FROM questions");
	  	$i = 0;

	  	// grade answers in order
	  	foreach ($_POST['order'] as $answer_order){

	  		// grade all answers
		  	foreach ($answers as $answer){

		  		// if current question id == answer id
		  		if($answer_order == $answer["id"]){

		  			// if user provided answer
			  		if (!empty($_POST['question' . $answer["id"]])) {

			  			// if answer is correct
				        if ($_POST['question' . $answer["id"]] == $answer["answer"]){
				        	echo "You got the right answer!\n";
				    	}
				    	// wrong answer
				        else {
				        	echo "Sorry, wrong answer.\n";
				        }
			    	}
			    	
			    	// user did not provide answer
				    else {
				    	echo "You did not choose an answer.\n";
				    }
				}

		  	}

	
	  	//$test = query("SELECT * FROM questions WHERE id = 3");
	  	//echo $test[0]["text"];
}
	  }
?>