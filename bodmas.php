<?php 
$question = $_POST['question'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>
 
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <script src="../javaScript/jQuery/jquery-3.3.1.min.js"></script>
  <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    
  <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      extensions: ["tex2jax.js"],
      jax: ["input/TeX","output/HTML-CSS"],
      tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
    });
  </script>   
  
   <script type="text/javascript">
    MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
  </script>

  <script type="text/javascript" src="../javaScript/mathJax/MathJax-2.7.7/MathJax.js"></script>

<link rel="stylesheet" href="../css/templeStyles.css">
<link rel="stylesheet" href="../css/newTempleStyles.css">
   

 <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      extensions: ["tex2jax.js"],
      jax: ["input/TeX","output/HTML-CSS"],
      tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
    });
  </script>   
  
   <script type="text/javascript">
    MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
  </script>
  
  <script type="text/javascript" src="../MathJax-2.7.5/MathJax.js"></script>

<title>6 Questions Junior</title>

<style>







h1 {
font-weight: bolder; 
   font-size: 24pt; 
   
   color:green;
}

h2 {
font-weight: bolder; 
   font-size: 20pt; 
   
   color:blue;

}

h3 {
font-weight: bolder; 
   font-size: 16pt; 
   
   color:green;
}

h4 {
font-weight: bold; 
   font-size: 14pt; 
   
   color:orange;
}



p {
font-weight: bold;
font-style: italic;
font-size: medium;
}


#message {font-size: 10pt ; font-style: italic;color: black ; text-align: justify;}

#answer {
            text-align: center;
            background-color: lightblue;
            font-size: 1.2em;
            font-weight: bolder;
}


h4 {
            text-align: center;
            
            font-size: 1.2em;
            font-weight: bold;
            color: black;
}

input {
    display: inline-block; 
    background-color: lightyellow; 
    text-align: center; 
    font-size: 1.2em; 
    font-weight: bolder;
    margin: 10px;
    width: 4em;
    height: 3em;


}

[id^=equation] {
    font-weight: bolder;
    color: black;
    font-size: 1.2em;
}


</style>


</head>
<body>

    <div class  = "container-fluid">

        <div class = "row">
            <div class = "col-sm-12 c">
                <p id = "stars"></p>
                </div></div>

    <div class = "row">
      <div class = "col-sm-12 c">

    <h1>Do the BODMAS calculations</h1>

    <h4>There are 3 marks for each question. Click Exit when finished.</h4>

    
  
</div></div>


 <div class = "row">
      <div class = "col- c">
    <div id = "ex1">
<label id = "equation1"></label>
<input id = "solution1">
<button id = "check1">Check 1</button>
</div>
</div></div>



 <div class = "row">
      <div class = "col- c">
    <div id = "ex2">
<label id = "equation2"></label>
<input id = "solution2">
<button id = "check2">Check 2</button>
</div>
</div></div>



 <div class = "row">
      <div class = "col- c">
    <div id = "ex3">
<label id = "equation3"></label>
<input id = "solution3">
<button id = "check3">Check 3</button>
</div>
</div></div>


 <div class = "row">
      <div class = "col- c">
    <div id = "ex4">
<label id = "equation4"></label>
<input id = "solution4">
<button id = "check4">Check 4</button>
</div>
</div></div>





</div>

</body>
</html>

<script type="text/javascript">
    
    function gcd(a, b) {
   
   a = Math.abs(a) ;
   b = Math.abs(b) ;

//alert('Now ' + a + ' ' + b);

    if (a == 0)
        return b;

    if (b == 0)
       return a ;  

    while (b != 0) 
    {
        if (a > b)
            a = a - b;
        else
            b = b - a;
    }

    return a;
}

</script>

<script type="text/javascript">
    

      function randomInteger(min, max) { // min and max included 
  return Math.floor(Math.random() * (max - min + 1) + min);
}
</script>

<script>
function getVariables()

{

  valid = false ; 
  data = [] ;

  var a = 10;
  var b = 99;

    data[0] = randomInteger(a,b);
    data[1] = randomInteger(a,b);
    data[2] = randomInteger(a,b);

return data;
}


</script>

<script type="text/javascript">
  
function gcd(a, b) {
    if (b) {
        return gcd(b, a % b);
    } else {
        return Math.abs(a);
    }
}

</script>

<script type="text/javascript">
    
    function makeQuestion1()


    {

        var a = 0 ;
         while (a % 2 == 0)
         {a = randomInteger(3,12)   ;}

         var k = a*a ;
        
         var c = parseInt(a*a +1)/2;
         var b = Math.sqrt(c*c - a*a);


        console.log(k,a,b,c);

     

        

        var expr = '$ \\sqrt{' + a + '^2 + ' + b + '^2} = '  + '$';

        $('#equation1').html(expr);
         MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation1" ]);



        return c;


    }
</script>

<script type="text/javascript">
    
    function makeQuestion2()


    {


           var b = randomInteger(2,20) ;
         //  m = randomInteger(2,8);
         m = 1;
           a = b + m ;

            diff = parseInt(a-b);
            product = a*b;

       x = product / diff;

        console.log(a,b,diff,product,x);

     
        var term = '$ \\frac{ ' + 1 + '} {' + a + '} ' + '+'  + '$' ;

         term =  term + '$ \\frac{ ' + 1 + '} {' + 'x' + '} '   + ' =  $' ;
         term = term + '$ \\frac{ ' + 1 + '} {' + b + '} $' + ' ,' + 'x = ';
        $('#equation2').html(term);
         MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation2" ]);


       
        return x;


    }
</script>


<script type="text/javascript">
    
    function makeQuestion3()


    {

        var a = 4;
        var b = 4;

    // get a/b as a reduced fraction
       
     while (a == b & a > 1 & b > 1)
     {
         a = randomInteger(10,25) ;
         b = randomInteger(5,20);
         var g = gcd(a,b) ;
        a = a / g ;
        b = b / g;
        console.log("a b",a,b);
     }
      
        var sum   = parseInt(a + b) ;

        var m = randomInteger(2,10);
       z = m*sum ; // z is a multiple of a + b
        x = m*a ; 
 
console.log("q3",a,b,sum,m,z,x);
        var term = '$ \\frac{ ' + 'x' + '} {' + 'y' + '} ' + ' = '  + '  \\frac{' + a + '} { ' + b + '} $' ;
       term = term +  ' and x + y = ' + z  + ' , x = '  ;

  console.log(term) ;   

        $('#equation3').html(term);
         MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation3" ]);

        
      

      $('#equation3').html(term);
         MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation4" ]);
        return x;


    }
</script>


<script>

    function makeQuestion4()


    {

     // TRIANGULAR NUMBERS, GIVEN S FIND n

       var n = randomInteger(10,25) ;

       var s = +(n/2)*(n+1);

       console.log(n,s);

       var term = '$ \\frac{x}{2} (x +1) = ' + s + ' , x > 0, x =  $' ;
       
     

        $('#equation4').html(term);
         MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation4" ]);

     
      
        return n;


    }
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
   
    question = '<?php echo $question; ?>' ;
// points = question.substr(-1);
// calculate points on exit
// $('#cancel').text("Exit");

answer = [];

answer[1] = makeQuestion1() ;
answer[2] = makeQuestion2() ;
answer[3] = makeQuestion3() ;
answer[4] = makeQuestion4() ;

correct = 0 ; // number correct;
points = 0 ;

console.log(answer);
  })


</script>








<script>
      $(document).ready(function(){
    $('[id^=check]').on('click', function()


    {
        var clicked = this.id;
        var qNumber = clicked.slice(-1);
        alert("Checking " + qNumber);

        var guess = $('#solution' + qNumber).val() ;
        if (guess == answer[qNumber])
        {
            alert("Correct");
            $('#solution' + qNumber).prop('disabled',true).css({"background-color":"lightgreen","color":"black"});
            $('#' + clicked).hide() ;
            points = points + 3 ;

            if (points == 12)

            {

                alert("You have solved " + points/3 + " equations!");
alert("Processing win " + questionID + " with " + points + " pts");
processWin(questionID);
    console.log("processing ",questionID);

            }
        }

        else

        {
            alert("keep tryings")
        }
})
})

</script>



