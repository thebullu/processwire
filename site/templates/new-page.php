<?php

$out = '';


    
    if (isset($_POST['page']))
    {
        echo "Created";
                                


        $p = new Page(); 
        $p->template = "newhotel"; //uses same template
        $p->parent = "/hotel/" ; 
        $p->name = "hotel/MYHOTEL6"; //user input 
        $p->title = "MY HOTEL 6"; //user input
        $p->body="THIS IS MY 6 HOTEL BODY"; //user input 
        
        //test
        echo $p->title;
        echo $p->body;


        $p->save();
    }
    


?>
