<?php
// pass the arguments to this method   mdp('month','initial_amount','ineterest','capital','bonus');

$month=10;
$initial_amount=100;
$interest=10; 
$capital=$initial_amount;
$bonus=20; 

$invest_date = "2021-11-01";


// echo $final_date;



function mdp_col($month,$initial_amount,$interest,$capital=NULL,$bonus=NULL,$invest_date){
    $final_date = date('Y-m-d', strtotime($invest_date. ' + '.$month.' months'));

    // step 1  interest * initial amount
    $semi_result=$initial_amount*$interest/100;     
    
    //step 3   
    $result=$semi_result*$month;     
    
    // make if candition after return this
    
    
    // if(intial date after 45 datas it to be work){
    
        if(!$bonus =="" && $capital !==""){
            $bon_col=$initial_amount*$bonus/100;
            
            $result=$capital+$bon_col;
            $final_result=array('data'=>$result,'maturity_date'=>$final_date);
            return $final_result;
                        
        }
        // }    
    }
    print_r(mdp_col($month,$initial_amount,$interest,$capital,$bonus,$invest_date));

    //mdp('month','initial_amount','ineterest','capital','bonus');
    // echo mdp_col($month,$initial_amount,$interest,$capital,$bonus,$invest_date);
    
    ?>
