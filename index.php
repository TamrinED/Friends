<?php require_once("header.php"); ?>

<h1 style="text-align: center;">Hotel Reservations</h1>
<h2 style="text-align: center;">Hello welcome to our website! On this website you can find infromation about our guests reservations, their payment type, and what room they receive.</h2>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
var xArray = [1,2,3,4,5,6,7,8,9,10,11,12];
var yArray = [50,60,70,80,90,100,110,110,130,100,80,40];

// Define Data
var data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
var layout = {
  xaxis: {range: [1, 12], title: "Months"},
  yaxis: {range: [10, 200], title: "Reservations"},  
  title: "House Prices vs. Size"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>

<?php require_once("footer.php"); ?>
