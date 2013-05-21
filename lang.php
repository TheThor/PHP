<?php
    //Once again use ISSET
    if(!isset($lang)){
        //You need this to keep this stuff in session, might be some other ways arround it
        session_start();

        //Now just use your SUPERGLOBAL VARIABLE $_SESSION['language'] value to make a decision
        if ($_SESSION['language']=='pt'){
    	   $lang=array(
                    //In here you inser your contents however you want them to be
                    //main.php
        			'title'=>'Title',
        			'menuconceito'=>'CONCEITO',
        			'menunews'=>'NOTÍCIAS',
        			'menuparceiros'=>'PARCEIROS',
        			'menucontactos'=>'CONTACTOS',                            
    		);
        }
        else{
            $lang=array(
                    //main.php
        			'title'=>'Title',
        			'menuconceito'=>'CONCEPT',
        			'menunews'=>'NEWS',
        			'menuparceiros'=>'PARTNERS',
        			'menucontactos'=>'CONTACTS',
    		);
        }

        //OTHER WAY
        // switch ($_SESSION['language']) {
        //     case 'pt':
        //         $lang[title]='Título';
        //         $lang[menuconceito]='CONCEITO';
        //         break;

        //     case 'en':
        //         $lang[title]='Title';
        //         $lang[menuconceito]='CONCEPT';
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