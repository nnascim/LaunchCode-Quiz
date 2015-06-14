<?php

    // configuration
    require("../includes/config.php");
    
     // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // get history data
        $tabledata = query("SELECT * FROM history WHERE users_id = ?", $_SESSION["id"]);

        // reverse array to print most recent results first
        $tabledata = array_reverse($tabledata);

        // else render form
        render("history.php", ["title" => "History", "tabledata" => $tabledata]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	apologize("ERROR");
    }

?>
