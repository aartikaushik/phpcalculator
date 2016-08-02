<?php
 
 function test($first_number,$second_number,$choice)
{
    //Check the addition of two negative numbers.
     if($first_number<0 && $second_number<0 && $choice===1)
	{
          $temp1=abs($first_number);
          $temp2=abs($second_number);
          $result=$temp1+$temp2;
          echo "-".$result;
        }

    //Check the addition of one positive and one negative number.
     if(($first_number<0 && $second_number>0 && $choice===1) || ($first_number>0 && $second_number<0 && $choice===1))
       {
          if($first_number>$second_number)
            {
              $temp2=abs($second_number);
               if($temp2<$first_number)
                {
                $result=$first_number-$temp2;
                echo $result;
                }
                else
                {
                 $result=$temp2-$first_number;
                 echo "-".$result;
                }
            }

           else
           {
            $temp1=abs($first_number);
            if($temp1>$second_number)
             {
              $result=$temp1-$second_number;
              echo "-".$result;
             }
             else
             {
              $result=$second_number-$temp1;
              echo $result;
             }
           }
       }

   // Check the subtraction of two negative numbers.

    if($first_number<0 && $second_number<0 && $choice===2)
     {
      $temp1=abs($first_number);
      $temp2=abs($second_number);
          if($temp2>$temp1)
           { 
           $result=$temp2-$temp1;
           echo $result;
           }
          else
          {
           $result=$temp1-$temp2;
           echo "-".$result;
          }
           
     }

   // Check the subtraction of one negative and one positive number.
  
    if(($first_number>0 && $second_number<0 && $choice===2) || ($first_number<0 && $second_number>0 && $choice===2) )
      {
       if($first_number>$second_number)
        {
         $temp2=abs($second_number);
         $result=$first_number+$temp2;
         echo $result;
        }
       else
       {
        $temp1=abs($first_number);
        $result=$temp1+$second_number;
        echo "-".$result;
       }
      }

    //Check the multiplication of two negative numbers.

   if($first_number<0 && $second_number<0 && $choice===3)
    {
    $temp1=abs($first_number);
    $temp2=abs($second_number);
    $result=$temp1*$temp2;
    echo $result;
    }
   
   // Check the multiplication of one negative and one positive number.
    
   if(($first_number<0 && $second_number>0 && $choice===3) || ($first_number>0 && $second_number<0 && $choice===3))
     {
     $temp1=abs($first_number);
     $temp2=abs($second_number);
     $result=$temp1*$temp2;
     echo "-".$result;
     }

    //Check the division of two negative numbers.
   if($first_number<0 && $second_number<0 && $choice===4)
   {
     $temp1=abs($first_number);
     $temp2=abs($second_number);
     $result=$first_number/$second_number;
     echo $result;
   }

    //Check the division of one positive number and one negative number
  if(($first_number<0 && $second_number>0 && $choice===4) || ($fisrt_number>0 && $second_number<0 && $choice===4))
   { 
     $temp1=abs($first_number);
     $temp2=abs($second_number);
     $result=$first_number/$second_number;
     echo "-".$result;
    
   }
} 
?>


