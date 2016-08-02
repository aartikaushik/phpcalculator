<?php

$choice=$_POST['choice'];
$first_number=$_POST['first'];
$second_number=$_POST['second'];

switch($choice){
        
    case 1: $result=$first_number+$second_number;
            echo $result;
            break;
        
    case 2: if($first_number>=$second_number){
        
                 $result=$first_number-$second_number;
                 echo $result;
        
             }
            else{
                
                $result=$second_number-$first_number;
                echo "-".$result;
                
                }
                break;
        
    case 3: $result=$first_number*$second_number;
            echo $result;
            break;
        
    case 4: if($second_number===0)
            echo "undefined";
            else{
                
              $result=$first_number/$second_number;
              echo $result;
                
            }
            break;
        
    default: echo "Input the correct option";
          
}

?>
