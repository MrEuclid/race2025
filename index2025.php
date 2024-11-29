
<!DOCTYPE html>
<html lang="en">
  <head>
 

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <script src="../javaScript/jQuery/jquery-3.3.1.min.js"></script>
  <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    
    <script src = "https://cdnjs.com/libraries/mathjs"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript"> google.charts.load('current', {'packages':['corechart', 'controls']});</script>
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

<script src="https://cdnjs.com/libraries/mathjs"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/7.5.1/math.min.js"></script>

    
<link rel="stylesheet" href="../css/templeStyles.css">
<!--
<link rel="stylesheet" href="../css/newTempleStyles.css">
-->

<link rel="stylesheet" href="race2024.css">

    <meta charset="utf-8">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
<title>Smart Maths</title>

<style type="text/css">


img 
    {
        width:100%;
        height:100%;
        object-fit:cover;
    }

[id^=q]  {

    color:white; 
    font-weight:bolder ; 
    font-size:1em ; 
    border-radius: 24px;
    height: 120px;
    width: 120px;
    font-family: "Lucida Console", "Courier New", monospace;
    display: inline-block;
    margin: 1px;
    border-width: 1px;
    border-color: orange;
    background-color: blue;
    font-family: "Lucida Console", "Courier New", monospace;
    

 
     }
h1 {display: inline-block; font-size:2em; font-weight:bolder; color:green; text-align:center;}

p {display:inline-block;}

#instructions {display: inline-block; font-size:2em; font-weight:bolder; color:green; text-align:center;}

img { width: 180px; height: 120px; padding: 5px; }


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

#teamName {display: inline-block; color: black; font-size: 2em;font-weight: bolder; width: auto;}
#total,#timer , #cancel, #home , #start
    {
        display: inline-block; 
        background-color: blue; 
        color: white; 
        width: 4em;
         height: 3em;
         font-size: 1em;
         font-weight: bolder;
        padding-bottom: 1em;
        text-align:center;
}


#home,#cancel ,#start
            {
                display: inline-block; 
             background-color: green; 
             color: yellow;
            font-size:1em ; 
            font-weight:bolder; 
        }

#expression{margin: 10px ;
            background-color: lightblue;
            color: black;
            text-align: center;
            font-weight: bolder;
            font-size: 1.2em;
            width:240px ;
            height:40px;
            }

            #ans {margin: 10px ;
            background-color: lightgreen;
            color: black;
            text-align: center;
            font-weight: bolder;
            font-size: 1.2em;
            width:320px ;
            height:40px;
            }
#casio {border-style: solid; color: green;}

.calc {background-color: lightgreen;color:black;}
.think {background-color: lightblue;color:black;}
.easy {background-color: pink;color:black;}
.stats {background-color: red;color:black;}
.graphs {background-color: orange;color:black;}
.smart {background-color: lightgreen;color:black;}

  </style>

  </head>
  <body>
      <div class  = "container-fluid">
      
      <div class = "row text-center">
        <div class = "col- ">
         


 <div id = "heading">
    <h1>Welcome to Smart Maths</h1>
</div> <!-- heading -->
</div></div>
<div id = "loginBox">
<div class = "row text-center">
  <div class = "col- ">
<label>Team name</label>
<input type = "text" id = "theTeam">
<button id = "login">Log in</button>
<a href = "../index.php"><button>Home</button></a>
  </div></div>

<div class = "row">
  <div class = "col- text-center">

<div id = "errorMessage"></div>
</div></div>

</div> <!-- title -->

<div class = "row">
  <div class = "col- ">

<div id = "stats">


    <div class = "row">
  <div class = "col- text-center">
  <a href="../index.php" >
       
 <button id = "home">Home</button>
     </a>
   
    
    <button id = "start">Start</button>

 <button id = "total" >0</button>
 <button id = 'timer'>
    0:00
</button>  
<button id = "cancel">Cancel</button>
</div></div>

</div>  <!-- stats -->
</div></div>

<div class = "row">
  <div class = "col- ">


<div id = "menu">
<div class = "row">
  <div class = "col-12 text-center">
<h1 id = "instructions">Choose your questions</h1>
</div></div>

 
 


   <div class = "row">
  <div class = "col-12 text-center">

 <button class = "smart" id = 'q40'>Calculations - 12</button> 
    <button class = "smart" id = 'q41'>Squares - 12</button> 
       <button class = "calc"  id = 'q2'> Primes - 12</button>
         <button class = "graphs"  id = 'q3'>Cubic - 12</button> 
           <button class = "calc"  id = 'q4'>Equations - 10</button> 
</div></div>
<!--
     <div class = "row">
  <div class = "col-12 text-center">        
<h3>Thinking</h3>
</div></div>
  <div class = "row">
  <div class = "col-12 text-center">
      <button class = "think" id = 'q5'>Squares - 8</button> 
    <button class = "think" id = 'q6'>Fish - 12</button> 
     <button class = "think" id = 'q7'>Code - 10</button> 
       <button class = "think" id = 'q8'> Pizza - 12</button>

</div></div>


<h3>Extra</h3>
  <div class = "row">
  <div class = "col-12 text-center">
     
  <button class = "calc" id = 'q9'>E1 - 6</button> 
    <button class = "calc" id = 'q10'>E2 - 6</button> 

        <button class = "easy" id = 'q11'>Knapsack easy - 6</button> 
             <button class = "easy" id = 'q12'>Knapsack hard - 10</button>      
</div></div>


  <div class = "row">
  <div class = "col-12 text-center">
     
  <button class = "easy" id = 'q13'>Two square - 6</button> 
  <button class = "calc" id = 'q14'>Three squares - 10</button>   
  <button class = "think" id = 'q15'>Continued fractions - easy - 8</button>  
  <button class = "think" id = 'q16'>Continued fractions - hard - 12</button>    
</div></div>

  <div class = "row">
  <div class = "col-12 text-center">
     
  <button class = "graphs" id = 'q17'>Parabola - 10</button> 
   <button class = "stats" id = 'q18'>Stats Easy - 8</button>  
      <button class = "stats" id = 'q19'>Stats Pie - 8</button>  
        <button class = "stats" id = 'q20'>Stats Donuts - 8</button>  
</div></div>


   <div class = "row">
  <div class = "col-12 text-center">
     
  <button class = "stats" id = 'q21'>Marks  - 8</button> 
  <button class = "stats" id = 'q22'>filters  - 8</button> 
    <button class = "graphs" id = 'q23'>Parabola Line easy - 6</button> 
        <button class = "graphs" id = 'q24'>Parabola Line Medium - 8</button> 
</div></div>

   <div class = "row">
  <div class = "col-12 text-center">
     <button class = "graphs" id = 'q25'>Parabola Line Hard - 10</button> 
     <button class = "calc" id = 'q26'>Complex numbers - 15</button> 
      <button class = "calc" id = 'q27'>Function star - 12</button> 
         <button class = "stats" id = 'q28'>Column chart - 8</button> 
</div></div>

   <div class = "row">
  <div class = "col-12 text-center">
     <button class = "calc" id = 'q29'>Quadratics medium - 8</button> 
         <button class = "calc" id = 'q30'>Quadratics hard - 12</button> 
              <button class = "calc" id = 'q31'>Complex fractions - 12</button> 
                      <button class = "graphs" id = 'q32'>Turnng points - 8</button> 
</div></div>


   <div class = "row">
  <div class = "col-12 text-center">
     <button class = "calc" id = 'q33'>Circle line - 6</button> 
         <button class = "calc" id = 'q34'>Q - 12</button> 
              <button class = "calc" id = 'q35'>C - 12</button> 
                      <button class = "graphs" id = 'q36'>T - 8</button> 
</div></div>

-->
</div> <!-- menu -->


<div class = "row">
<div class = "col-sm-12 c">

  <div id = "play">Play</div>
</div></div>

<div class = "row">
<div class = "col- text-center">

<p id = "myTeam" ></p>
</div></div>


<div id = "casio">

   <div class = "row">
      <div class = "col-sm-12 c">
      
        <input type = "text" id = "expression">
        <button id = "calc" type="button" class="btn btn-success btn-sm">Calculate</button> 
        <input type = "text" id = "ans" readonly = "true">
      
    </div></div>
          </div>  <!-- casio -->

</div> <!-- container -->
  </body>
</html>


<script type="text/javascript">
  
    $(document).ready(function(){

      $('#menu').hide() ;
       $('#play').hide() ;
       $('#stats').hide();
       $('#casio').hide();

   //    $('#instructions').hide() ;
timed = 60*60 ;


// grade = "junior";

})
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#login').on('click', function()

{
    var team = $('#theTeam').val() ;

if (team.length > 1)
 { var me = $('#theTeam').val();
//  alert("Your are in team " + me);

$('#menu').show() ;
$('[id^=q]').prop('disabled',true);
 $('#loginBox').hide();
 $('#total').text('0');
 $('#stats').show();

 $('#instructions').text('Press the start button');
}

else

{
    alert('Please enter a team name!');
}

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('[id^=q]').on('click', function()
  {
$('#menu').hide() ;
    $('#play').show() ;
  $('#home').hide() ;
   // $('#title').hide();
    $('#heading').hide() ;
    var clicked = this.id;
    console.log("Clicked",clicked);
   qtn = $('#' + clicked).text();
    console.log("Clicked",clicked,qtn);

points = parseInt(qtn.substr(-2));
// alert(points);
    //questionID = clicked.substring(1,1);

    //questionID = parseInt(questionID);
   //alert("Clicked " + clicked);

    questionID = clicked;
 

  })
})
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q1').on('click', function()
  {


    var value = $('#q1').text();
   // var value = "Factorials"; 
   $('#play').load("factorials.php",{question: value}) ;

  })
  })


</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q2').on('click', function()
  {

    var value = $('#q2').text();
 //  alert("V2 " + value) ;
   $('#play').load("functions.php",{question: value}) ;

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q3').on('click', function()
{
   
    var value = $('#q3').text();
   $('#play').load("cubics.php",{question: value}) ;

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q4').on('click', function()

  {

    var value = $('#q4').text();
   $('#play').load("equations1.php",{question: value});

  })
  })
</script>



<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q5').on('click', function()


  {

    var value = $('#q5').text();
   $('#play').load("pellian.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q6').on('click', function()


  {

    var value = $('#q6').text();
  //  alert("Value " + value) ;
   $('#play').load("population.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q7').on('click', function()

  {

    var value = $('#q7').text();
   $('#play').load("knapsack.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q8').on('click', function()


  {

var value = $('#q8').text();

   $('#play').load("pizza.php",{question: value});

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q9').on('click', function()


  {

var value = $('#q9').text();

   $('#play').load("E1.php",{question: value});

  })
  })


</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q10').on('click', function()


  {

var value = $('#q10').text();

   $('#play').load("E2.php",{question: value});

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q11').on('click', function()


  {

var value = $('#q11').text();

   $('#play').load("knapsackEasy.php",{question: value});

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q12').on('click', function()


  {

var value = $('#q12').text();

   $('#play').load("knapsackHard.php",{question: value});

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q13').on('click', function()


  {

var value = $('#q12').text();

   $('#play').load("twoSquares.php",{question: value});

  })
  })


</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q14').on('click', function()


  {

var value = $('#q14').text();

   $('#play').load("threeSquares.php",{question: value});

  })
  })


</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q15').on('click', function()


  {

var value = $('#q15').text();

   $('#play').load("continuedFractionsEasy.php",{question: value});

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q16').on('click', function()


  {

var value = $('#q16').text();

   $('#play').load("continuedFractionsHard.php",{question: value});

  })
  })


</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q17').on('click', function()


  {

var value = $('#q17').text();

   $('#play').load("parabolaGoogle.php",{question: value});

  })
  })


</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q18').on('click', function()
  {
    var value = $('#q18').text();
    $('#play').load("statsEasy.php",{question: value});

  })
  })
</script>



<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q19').on('click', function()
  {
    var value = $('#q19').text();
    $('#play').load("statsPie.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q20').on('click', function()
  {
    var value = $('#q20').text();
    $('#play').load("donuts.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q21').on('click', function()
  {
    var value = $('#q21').text();
    $('#play').load("marks.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q22').on('click', function()
  {
    var value = $('#q22').text();
    $('#play').load("smc.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q23').on('click', function()
  {
    var value = $('#q23').text();
    $('#play').load("parabolaLineEasy.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q24').on('click', function()
  {
    var value = $('#q24').text();
    $('#play').load("parabolaLineMedium.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q25').on('click', function()
  {
    var value = $('#q25').text();
    $('#play').load("parabolaLineHard.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q26').on('click', function()
  {
    var value = $('#q26').text();
    $('#play').load("complex.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q27').on('click', function()
  {
    var value = $('#q27').text();
    $('#play').load("functionStar.php",{question: value});

  })
  })
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q28').on('click', function()
  {
    var value = $('#q28').text();
    $('#play').load("columnChart.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q29').on('click', function()
  {
    var value = $('#q29').text();
    $('#play').load("quadraticsMedium.php",{question: value});

  })
  })
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q30').on('click', function()
  {
    var value = $('#q30').text();
    $('#play').load("quadraticsHard.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q31').on('click', function()
  {
    var value = $('#q31').text();
    $('#play').load("complexFractions.php",{question: value});

  })
  })
</script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q32').on('click', function()
  {
    var value = $('#q32').text();
    $('#play').load("cubicMaxMin.php",{question: value});

  })
  })
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q33').on('click', function()
  {
    var value = $('#q33').text();
    $('#play').load("circleChord.php",{question: value});

  })
  })
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q40').on('click', function()
  {
    var value = $('#q40').text();
    $('#play').load("bodmas.php",{question: value});

  })
  })
</script>


<script type="text/javascript">
  
    $(document).ready(function(){
    $('#q41').on('click', function()
  {
    var value = $('#q41').text();
    $('#play').load("squares.php",{question: value});

  })
  })
</script>

<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            display.text('X' + ":" + 'X');
            $('#play').hide() ;
            $('#menu').hide() ;
            $('#home').show();


        }
    }, 1000);

    return;
}

</script>

<script>
$(document).ready(function(){
    $('#start').on('click', function(){

      $('#instructions').text('Choose your Game').show() ;

       // alert("Timer on") ;
   
        $('#start').hide() ;
        $('#score').show() ;
        $('#menu').show() ;
        $('#home').hide() ;
        $('#casio').show();
       
        $('[id^=q]').prop('disabled',false);

        jQuery(function ($) {
            var fiveMinutes = timed,
                display = $('#timer');
            startTimer(fiveMinutes, display);
        });      
    })
    })
        </script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#cancel').on('click', function()

{
  console.log("Cancel");
  $('#home').show();
 $('#menu').show() ;
 $('#title').hide();
 $('#stats').show() ;
 $('#play').hide().empty();



  })
  })


</script>

<script>
function remove_linebreaks(str) {
    return str.replace( /[\r\n]+/gm, "" );
}
  </script>

<script type="text/javascript">
  
    $(document).ready(function(){
    $('#login').on('click', function()

{

 team = $('#theTeam').val() ;
 team = team.trim() ;
 if (team.length > 0)
 {
// alert("Logging in as " + team);
    $.ajax({
        url: 'loadTeam.php', // to be done
        type: 'POST',
        data: {team:team}, 
        datatype: 'text',
        
    })  // parameters
    .done(function (response) { 


console.log("Response",response);
      var code = response.split("*");
console.log("response",response) ;
  
 code[0] = remove_linebreaks(code[0]) ;
      console.log(code);
    
// alert(code[0] + ' get ready to play! ' + code[2] + 'id ' + code[1]);
console.log("Code",code);



team =  code[0] + "*" +  code[2]; // grade + team + number of times used
//alert(team);
$('#myTeam').text(team) ;
   
    })  //done
    .fail(function (jqXHR, textStatus, errorThrown) { 
    alert("Failure " + jqXHR + ' ' + textStatus + ' error ' + errorThrown) ;
    
    })  // fail

}

  })
  })


</script>

<script>
function updateDatabase(teamName,score,timer,question,questionID)



{


 $.ajax({
        url: 'updateScores.php', // to be done
        type: 'POST',
        data: {teamName:teamName,score:score,timer:timer,question:question, questionID:questionID}, 
        datatype: 'text',
        
    })  // parameters
    .done(function (response) { 

      alert("Database updated " + teamName + " " + score + " " + timer + " " + question + " " + questionID);
console.log("Response to update",response);
  
   
    })  //done
    .fail(function (jqXHR, textStatus, errorThrown) { 
    alert("Failure " + jqXHR + ' ' + textStatus + ' error ' + errorThrown) ;
    
    })  // fail
  

}

  </script>

  <script>

function processWin(q)  // for question id q

{


// alert("Using " +points);
 var pts = parseInt($('#total').text());
if (pts < 0) {pts = -pts;}
     points = parseInt(points) ;
     console.log("points",pts);
     pts = parseInt(pts + points);
     console.log("points",pts);
     $('#total').text(pts);

    $('#menu').show();

     $('#play').empty().show();
     $('#' + q).prop('disabled',true).css({"background-color":"blue","color":"yellow"});

     var t = team.split("*");
    var teamName = t[0];
   
    var score = $('#total').text() ;
    var timer = $('#timer').text() ;

     console.log("output",teamName,score,timer,question,questionID);
    updateDatabase(teamName,score,timer,question,questionID);


}

  </script>

  <script>
function calculate(){
  //  "use strict";
    var s= prompt('Enter problem');
    if(/[^0-9()*+\/ .-]+/.test(s)) throw Error('bad input...');
    try{
        var ans= eval(s);
    }
    catch(er){
    //    alert(er.message);
    }
  //  alert(ans);
}
</script>

  <script>
   $(document).ready(function () {
    $('#calc').on('click', function(){
// calculate();
var expr = $('#expression').val() ;

 $.ajax({
    dataType: 'text',
    type: 'post',
    async: false,
    url: 'evaluate.php',
    data: {expr:expr},
    
    success: function(response){

    console.log(response);
    $('#ans').val(response) ;
    $('#expression').val('') ;
   // alert(response) ;

        }, // success

      error: function(xhr, textStatus, errorThrown){
                        alert('request student data failed');
                          $('#errorMessage').text(response) ;
                      } // failure
                }); //ajax



    })

    })

  </script>





