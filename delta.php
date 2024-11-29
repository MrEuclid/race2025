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

<title>Delta</title>

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
   
   color:blue;
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

p.parameter  {
    display: inline-block;
    color: blue;
    font-size: 1em;
    font-weight: bolder;

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

    <h1> $ a \Delta  b =  ab + a - b $ </h1>

    <h3>
        a = <p class = "parameter" id = "a"></p>,
        b = <p class = "parameter" id = "b"></p>,
        c = <p class = "parameter" id = "c"></p>,
        d = <p class = "parameter" id = "d"></p>
    </h3>

    <h4>There are 3 marks for each question.</h4>

    
  
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

<script type="text/javascript">
    
    function delta(a,b)
    {
        let d = parseInt(a*b + (a - b));
        console.log(a,b,d);
        return d;
    }
</script>



<script type="text/javascript">
    
    function makeQuestion1(a,b)


    {

        expr = '$ a \\Delta b  =  $';
        $('#equation1').html(expr);
        MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation1" ]);

        console.log("q1",a,b,delta(a,b));
        return delta(a,b) ;
    }
</script>

<script type="text/javascript">
    
    function makeQuestion2(a,b)


    {

       
        expr = '$ b \\Delta a =  $';
        $('#equation2').html(expr);
        MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation2" ]);

        console.log("q2",a,b,delta(b,a));
        return delta(b,a)

    }
</script>


<script type="text/javascript">
    
    function makeQuestion3()


    {
        

        expr = '$ a \\Delta a  - b \\Delta b =  $';
        $('#equation3').html(expr);
        MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation3" ]);

        console.log("q2",a,b,delta(b,a));
        return delta(a,a) - delta(b,b);
    }
</script>


<script>

    function makeQuestion4(a)


    {
        let m = 2*a;
        while ((m - a) /  (a-1) != parseInt((m - a) /  (a-1)))
        {
            m++;
        }
     
        expr = '$ a \\Delta x =  ' + m + ', x =  $';
        $('#equation4').html(expr);
        MathJax.Hub.Queue(["Typeset", MathJax.Hub, "equation4" ]);

        console.log("q4",a,m-a, a-1, (m -a) / (a - 1));
        return (m -a) / (a - 1) ;
    }
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
   
    question = '<?php echo $question; ?>' ;
// points = question.substr(-1);
// calculate points on exit
// $('#cancel').text("Exit");

answer = [];

answer = [];

a = randomInteger(2,10);
b = randomInteger(2,10);
c = randomInteger(2,20);
d = randomInteger(2,10);


answer[1] = makeQuestion1(a,b) ;
answer[2] = makeQuestion2(a,b,c,d) ;
answer[3] = makeQuestion3(a,b,c,d) ;
answer[4] = makeQuestion4(a,b,c,d) ;


correct = 0 ; // number correct;
points = 0 ;

// get values of a,b,c,d - global

$('#a').text(a);
$('#b').text(b);
$('#c').text(c);
$('#d').text(d);

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
            alert("keep trying")
        }
})
})

</script>



