<?php require_once("header.php"); ?>

<h1 style="text-align:center; font-family:Serif;  font-size:4rem"><span id="title">Utopia Hotel Employee Website</span></h1>

    <h2 style="text-align:center"><strong> Welcome <?php echo $_POST["name"]; ?>, Stay Up-to-Date!</strong><h2>
  
<div class="container">
  <div class="column">
  <div class="card">
  <img src="https://th.bing.com/th/id/OIP.GEA7TEUSNiV4dmfBaDRKWwHaLH?pid=ImgDet&rs=1" alt="Avatar" class="image">
  <div class="middle">
    <div class="text">CEO, Kyle Robb</div>
    </div>
  </div>
  </div>
  
  <div class="column">
  <div class="card">
     <img src="https://th.bing.com/th/id/OIP.z_qTkVmYdIXDfbvgwxQ2tgHaF7?w=203&h=162&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Avatar" class="image">
  <div class="middle">
    <div class="text">CFO, Rose Fields</div>
     </div>
  </div>
  </div>
    
    <div class="column">
  <div class="card">
     <img src="https://th.bing.com/th/id/OIP.fhuer9YUSHDPvJ3yh-E2kAHaJQ?w=203&h=254&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Avatar" class="image">
  <div class="middle">
    <div class="text">CIO, Gabrielle McKessie</div>
     </div>
  </div>
  </div>
    
  </div>

        <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
            
<?php require_once("footer.php"); ?>
