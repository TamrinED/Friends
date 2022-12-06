<?php require_once("header.php"); ?>

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
  yaxis: {range: [10, 200], title: "Rooms Booked"},  
  line.style.backgroundColor= "black";
  title: "The Number of Rooms Booked by Guests per Month in 2022"
  
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>


<?php require_once("footer.php"); ?>
