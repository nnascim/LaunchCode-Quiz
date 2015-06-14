<?php

    // configuration
    require("../includes/config.php");

    $questions = query("SELECT * FROM questions ORDER BY RAND()");
    $wrong_answers = query("SELECT * FROM wrong_answers");

    // 2D array of questions and answers
    $arr = array();

    // for each question
    foreach ($questions as $question) {

        // for each wrong answer
        foreach ($wrong_answers as $wrong){

            // if question id matches wrong answer id
            if($wrong["id"] == $question["id"]){
                
                // create array with questions, correct answer, and wrong answers
                $q = array($question["id"], $question["text"], $question["answer"], 
                    $wrong["w1"], $wrong["w2"], $wrong["w3"]);
                
                // shuffle answer selection order
                array_shuffle_section($q, 2, 5);

                // add to global array
                array_push($arr, $q);
            }
        }
    }

    // shuffle array from index start to end
    function array_shuffle_section(&$arr, $start, $end) { 
        $head = array_slice($arr, 0, $start); 
        $body = array_slice($arr, $start, $end-$start+1); 
        $tail = array_slice($arr, $end+1); 

        shuffle($body); 
        $arr = array_merge($head,$body,$tail); 
    } 
    
    render("quiz.php", ["questions" => $arr]);
?>
