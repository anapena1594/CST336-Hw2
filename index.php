<html>
    <head>
      <title> Future Teller </title>
        <style>
          @import url("styles.css");  
        </style>  
    </head>
    <body>
     <h1 id ="tt"> Future Teller</h1>
     <h3 id ="t2"> Click here to know your future and your love status.</h3>

     <div>
        <?php
     
 global $bad, $good;  
        $bad = array('a', 'b', 'c', 'd', 'e','f');
        
        $good= array('a', 'b', 'c', 'd', 'e','f');
 
 $unique1= array_unique($bad);
 $unique2= array_unique($good);

  function random() {
     
      for($i=0; $i<=2; $i++){
       ${"Value"  . $i} = rand(1,2);
       
      }
      
      badorgood1($Value1);
      badorgood2($Value2);
      
     
  }  

  random();
  
  
  function badorgood1 ($value){
      global $bad, $good; 
      if ($value == 1){
           shuffle ($good);
           $get= array_pop($good);
           futureg($get);
           
      }
      
      else {
           shuffle ($bad);
           $get= array_pop($bad);
           futureb($get);
           }
 } 
 
  function badorgood2 ($value){
      global $bad, $good; 
      if ($value == 1){
           shuffle ($good);
           $get= array_pop($good);
           loveg($get);
           
      }
      
      else { 
           shuffle ($bad);
           $get= array_pop($bad);
           loveb($get);
           }
 } 
 
 function futureg($value){
     switch($value){
                 case "a": 
                         echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                         echo "<h2> The best is yet to come!</h2>";
                         break;
                 case "b":
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> Your future is bright and beautiful!</h2>";
                         break;
                 case "c": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> Don't be afraid to move foward, great things are ahead of you!</h2>";
                         break;
                 case "d": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> Your future is bright as your faight!</h2>";
                         break;
                 case "e": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> New oportunities are coming your way!</h2>";
                         break;
                 case "f":
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> You will win the lottery!</h2>";
                         break;
    }
  
 } 
 
  function futureb($value){
     switch($value){
                 case "a":
                         echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                         echo "<h2> Your future does not seam bright!</h2>";
                         break;
                 case "b":
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> Your future looks very negative!</h2>";
                         break;
                 case "c": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> You will face several struggles!</h2>";
                         break;
                 case "d": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> You need to work harder for what you want!</h2>";
                         break;
                 case "e": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> Being too Negative wont help the future ahead of you!</h2>";
                         break;
                 case "f": 
                     echo "</br></br><h1 class = 'hello'> ~Future~ </h1>";
                     echo "<h2> Watch your steps everywhere you go!</h2>";
                         break;
    }
  
 }  
 
  function loveg($value){
     switch($value){
                 case "a": 
                         echo "<h1 class = 'hello1'> ~Love~ </h1>";
                         echo "<h2> Your heart is in the right place!</h2>";
                         break;
                 case "b":
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2>Someone special is in your life!</h2>";
                         break;
                 case "c": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2>Semeone special will show up in your life soon!</h2>";
                         break;
                 case "d": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2>Love is in the air! </h2>";
                         break;
                 case "e": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2>Love is waiting for you!</h2>";
                         break;
                 case "f": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2>Love is not a problem for you! </h2>";
                         break;
    }
  
 }  
 
  function loveb($value){
     switch($value){
                 case "a": 
                         echo "<h1 class = 'hello1'> ~Love~ </h1>";
                         echo "<h2> Love is not for you!</h2>";
                         break;
                 case "b": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2> Look somewhere else!</h2>";
                         break;
                 case "c": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2> You are in a bad situation with your partner</h2>";
                         break;
                 case "d": 
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2> Get out before you end up hurt!</h2>";
                         break;
                 case "e":
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2> That person is not your other half!</h2>";
                         break;
                 case "f":
                     echo "<h1 class = 'hello1'> ~Love~ </h1>";
                     echo "<h2> The city is huge, look for someone else!</h2>";
                         break;
    }
  
 }  
 
  
 
        ?>
        
      
      
      </div>
      <img class ='star' src= "Pictures/stars.png"/>
     
      <form>
      <input type="submit" value="Shake!"/>
      </form>
        
    </body>
    
</html>