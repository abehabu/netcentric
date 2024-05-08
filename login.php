<?php

//login processing
if (
    $_SERVER['REQUEST_METHOD'] =='POST'){
        //check if the page value is set
        if (isset($_POST["page"]) && !empty ($_POST["page"])){
            //get selected page from the form
            $selectedPage = $_POST["page"];

            //redirect the user to the selected page
            header("Location: $selectedPage.php");
            exit();
        }
    }
    ?>