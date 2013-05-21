<?php
    $language=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2); 
    session_destroy();
    //Use ISSET to check your valriable
    if (!isset($_SESSION['language'])){        
        //Start the session  
        session_start();
        if ($language=='pt'){
                //You only need to use this if you want to use index.php as a tunnel to the mainpage
                //But it's not necessary as you can put it in the top of the index.php and just do HTML as you wish
                header ("Location:main.php");
                $_SESSION['language']='pt';
        }
        else{
                header("Location:main.php");
                $_SESSION['language']='en';
        }
        //
        //OR WITH MORE THAN 2 LANGUAGES
        //#code means the same as in the if statements above
        //Uncomment below this line to check how it's done
        // switch ($language) {
        //     case 'pt':
        //         # code...
        //         break;

        //     case 'en':
        //         # code...
        //         break;

        //     case 'pt-BR':
        //         # code...
        //         break;
        //     //etc.
        //     //etc.
        //     //etc.
        //     default:
        //         # code... Maybe your default language :)
        //         break;
        // }
    }
?>