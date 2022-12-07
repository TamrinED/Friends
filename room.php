<?php require_once("header.php"); ?>
<center>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>
  
  <h1 style="text-align:center; font-family:Serif;  font-size:4rem"><span id="title">Rooms</span></h1>
    <table style="background-color:#CFD8DC" class="table table-striped">
  
<div id="myPlot" style="width:100%;max-width:700px; align:center"></div>

<script>
var xArray = [1,2,3,4,5,6,7,8,9,10,11,12];
var yArray = [50,60,80,90,100,130,190,110,130,100,80,40];

// Define Data
var data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
var layout = {
  xaxis: {range: [1, 12], title: "Months"},
  yaxis: {range: [10, 200], title: "Rooms Booked"},  
  title: "The Number of Rooms Booked by Guests per Month in 2022"
  
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>

      </center>
<?php require_once("footer.php"); ?>
