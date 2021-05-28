<?php

// module name
$HmvcMenu["account"] = array(
    //set icon
    "icon" => "<i class='fa fa-calculator' aria-hidden='true'></i>

", 
    
  'account_add'   => array( 
        //menu name
        // 'add'   => array( 
            "controller" => "Account_controller",
            "method"     => "create_account",
           
        // ),
        // //menu name
        // 'list'  => array( 
        //     "controller" => "Account_controller",
        //     "method"     => "accountView",
           
        // ), 
        ),
  'account_transaction'   => array( 
        //menu name
        //'add'   => array( 
            "controller" => "Account_controller",
            "method"     => "create_transaction",
           
        // ),
        // //menu name
        // 'list'  => array( 
        //     "controller" => "Account_controller",
        //     "method"     => "transView",
           
        // ), 
        ),
  
 );
 