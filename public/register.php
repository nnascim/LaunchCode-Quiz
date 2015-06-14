<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
         // validate email
        if (empty($_POST["email"]))
        {
            apologize("You must provide your email.");
        }
        //validate password
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        // confirm password
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Passwords do not match.");
        }

        // attempt to store user in database
        if (query("INSERT INTO users (email, password) VALUES (?, ?)", $_POST["email"], crypt($_POST["password"])) === false)
        {
            apologize("User already exists.");
        }
        else
        {
            // save id of last user added
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            
            // store id in session
            $_SESSION["id"] = $id;
            
            // redirect to index.php
            redirect("index.php");
        }
          
    }
    
?>
