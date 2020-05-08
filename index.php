<!DOCTYPE html>
<html>
 <head>
    <title>Assignment Model</title>
    <link rel="stylesheet"  media="all" type="text/css"  href="style.css">
 </head>
 <body>
     <div class="center">
          <div class="in">
          <form action="index.php" method="POST">
             
             <?php for($i=0;$i<100;$i++){?>
               <input type="number" id="num" name="<?php echo $i?>"value=" " >
             <?php }?> 
            
             <input type="submit" class="submit" name="submit"value="Solve">
          </form>
         </div>
         <?php 
             
             if(isset($_POST['submit'])){
                for($i=0;$i<100;$i++){
                   $matrix[$i/10][$i%10]=$_POST[$i];}
                //number of rows 
                //function rows($matrix){}
                //number of columns
                //function columns($matrix){}
                //$nrows=$rows($matrix);   $ncolumns=$columns($matrix); 
                // If numbers of rows and columns are different func will dummy the row / columns by creating a new row / columns with values zero.
                //function dummy($matrix ,$nrows ,$ncolumns){}
                //$nrows=$rows($matrix);   $ncolumns=$columns($matrix); 
                //Finding  the smallest number in the row and subtract it with every number in the row for each row
                //function subtractRows ($matrix ,$nrows ,$ncolumns){}
                //the same with columns
                //function subtractColumns ($matrix ,$nrows ,$ncolumns){}
                //Covering every line that including (row /column) and check that if numbers of covered lines is equal to number indexes in row/column .
                //function coveringLines1($matrix ,$nrows ,$ncolumns){}
                //(in case is false) Creating new matrix which uncovred row /columns ,find the smallest number and subtract is with every number in this matrix
                //function coveringLines2($matrix ,$nrows ,$ncolumns){}
                //Summing  all values in this array and assigning it to result.
                //function totalCost($matrix ,$nrows ,$ncolumns ,$dummy ,$subtractRows ,$subtractColumns ,$coveringLines){}
                //$result= totalCost($matrix ,$nrows ,$ncolumns ,$dummy ,$subtractRows ,$subtractColumns ,$coveringLines);
             
                $result=20;
?>
         <div id="result"><p>The optimal value equals : <?php echo $result; ?></p></div>
            <?php }?>
     </div>
 </body>
</html>
