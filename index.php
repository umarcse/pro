<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
      <section class="main_content">
      <div class="left">
      

      </div>
      <div class="right">
        <form method="POST">
           <table>
            
            <tr>
                    <td>
                        <label> Enter Your Mark</label>
                    </td>

                    <td>
                        
                        <input type="text" name="mark" id="txt">
                    </td>
                    
            </tr>

            <tr> 
                    <td></td>
            
                    <td>
                        <input type="submit" name="submit" value="Check Now" id="btn">
                    </td>
            </tr>
           </table>

        </form>
          <div class="output_of_result">
        <?php
            if(isset($_POST['submit'])){

                $getMark= $_POST['mark'];
                $getMark= (int)$getMark;
                
                if($getMark >= 80 && $getMark <=100){
                    echo "<h2>"."Congratulations! You got A+"."</h2>"; 
                }

                
                elseif ( $getMark >= 70 && $getMark <=79 ){

                    echo "<h2>"."Congratulations, You got A". "</h2>"; 
                    
                }
                elseif ( $getMark >= 60 && $getMark <=69 ){

                    echo "<h2>"."Congratulations, You got A-". "</h2>"; 
                    
                }
                elseif ( $getMark >= 50 && $getMark <=59 ){

                    echo "<h2>"."Congratulations, You got B". "</h2>"; 
                    
                }
                elseif ( $getMark >= 40 && $getMark <= 49 ){

                    echo "<h2>"."Congratulations, You got C". "</h2>"; 
                    
                }
                elseif ( $getMark >= 33 && $getMark <= 39 ){

                    echo "<h2>"."Congratulations, You got D". "</h2>"; 
                    
                }
                elseif ( $getMark < 33  ){

                    echo "<h2>"."You are a Piece of shit". "</h2>"; 
                    
                }
                else{
                    echo "<h2>"."Hey Stupid,How Are you?". "</h2>"; 
                }
                


            }
        
        ?>
        </div>
      </div>
      </section>

      <section class="showcal">

            <div class="main_cal">
                <span class="line"></span>
                <h1>Priceless <br> Calculator</h1>
                
            </div>

            <form method="POST" class="frm2">
                <table> 
                    <tr>
                        <td>
                            <input type="text"  id="caltxt" name="num1" placeholder="Enter Your First Number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text"  id="caltxt2" name="num2" placeholder="Enter Your Second Number">
                        </td>
                    </tr>
                  
                    <tr> 
                        <td><label >What Do You Want to DO? </label></td>
                        <td>
                            <select name="operation" id="">
                                <option value="add">ADD</option>
                                <option value="sub">SUB</option>
                                <option value="mul">MUL</option>
                                <option value="div">DIV</option>
                            </select>
                        </td>
                    </tr>
                     
                </table>

                <div class="btn2">
                
                         <input type="submit"  name="submi" value="Calculate">
                     
                </div>
                     
            </form>

            <div class="showcalvalue">
                          <p>
                          <?php
                                if(isset($_POST['submi'])){
                                    $num1 = $_POST['num1'];
                                    $num2 = $_POST['num2'];
                                    $operation = $_POST['operation'];
                                   

                                    switch($operation){
                                        case "add": $sum= $num1 + $num2;
                                                    echo "The addition of two number is: ". $sum;
                                                    break;
                                        case "sub": $sub= $num1 - $num2;
                                                    echo "The substraction of two number is: ". $sub;
                                                    break;
                                        case "mul": $mul= $num1 * $num2;
                                                    echo "The multiplication of two number is: ". $mul;
                                                    break;
                                        case "div": $div= $num1 / $num2;
                                                    echo "The division of two number is: ". $div;
                                                    break;
                                        default : echo "You are Doing Something Wrong";
                                    }
                                    
                                    

                                }
                          ?>
                          </p>
                      </div>
       
      </section>
</body>

</html>
