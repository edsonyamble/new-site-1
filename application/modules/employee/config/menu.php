
   <?php

// module name
$HmvcMenu["employee"] = array(
    //set icon
    "icon"           => "<i class='fa fa-users'></i>", 
    
   

    //group level name
    "Direct_Empl" => array(
        //menu name
 //menu name
  
            "controller" => "Employees",
            "method"     => "viewEmhistory",
            "permission" => "create"
       
       
    ), 
    
    "position" => array(
        //menu name

          
            "controller" => "Employees",
            "method"     => "create_position",
            "permission" => "create"
      
    ), 

     "emp_performance" => array(
        //menu name
       
          
            "controller" => "Employees",
            "method"     => "create_emp_performance",
            "permission" => "create"
        
    ),     

      "emp_sal_payment" => array(
  
            
            "controller" => "Employees",
            "method"     => "emp_payment_view",
            "permission" => "view"
     
    ),     

);

 