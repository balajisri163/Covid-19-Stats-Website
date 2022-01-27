<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COVID19 Dashboard </title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">WORLD STATS</h2>
                        </div>
                    </div>
					<?php
					include ("summary.php")?>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-calendar-day"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Confirmed Cases</p>
                                                <span class="number"><?php echo number_format($TotalConfirmed);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Today Confirmed Cases</p>
                                                <span class="number"><?php echo number_format($NewConfirmed);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-book-dead"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Death</p>
                                                <span class="number"><?php echo number_format($TotalDeaths);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Today Death</p>
                                                <span class="number"><?php echo number_format($NewDeaths);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                               
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Infection Overview</h5>
                                                <p class="text-muted">Infection overview across countries</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="trafficflow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
						<div class="col-md-12">
                            <div class="row">
                               
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Deaths Overview</h5>
                                                <p class="text-muted">Death overview across countries</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="sales"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>

						<div class="col-md-12">
                            <div class="row">
                               
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Populations Overview</h5>
                                                <p class="text-muted">Population overview across countries</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="population"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h5 class="mb-0">Total  by Country</h5>
                                        <p class="text-muted">Corona cases for all the infected countries</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table table-striped">
                                            <thead class="success">
                                                <tr>
                                                    <th>Country</th>
													<th>Continent</th>
													<th>Population</th>
                                                    <th>Infected</th>
													<th>Death</th>
													<th>Recovered</th>
													<th>Infection Ratio</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>

												<?php
													foreach($Countries as $val){
														echo "<tr><td>".$val["Country"]."</td>"	;
														echo "<td>".$val["Premium"]["CountryStats"]["Continent"]."</td>"	;
														echo "<td>".$val["Premium"]["CountryStats"]["Population"]."</td>"	;
														echo "<td>".$val["TotalConfirmed"]."</td>"	;
														echo "<td>".$val["TotalDeaths"]."</td>";
														$recovered = $val["TotalConfirmed"] - $val["TotalDeaths"];
														echo "<td>".$recovered."</td>";
														$infected = ($val["TotalConfirmed"]/$val["Premium"]["CountryStats"]["Population"])*100;
														echo "<td>".number_format((float)$infected, 2, '.', '')."</td></tr>";
													}
												?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>       
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>

<script>
var labelCountry = <?php echo json_encode($CountryName, JSON_HEX_TAG); ?>;
var cases = <?php echo json_encode($Infected, JSON_HEX_TAG); ?>;
var death = <?php echo json_encode($Death, JSON_HEX_TAG); ?>;
var population = <?php echo json_encode($population, JSON_HEX_TAG); ?>;

console.log("Balaji");
</script>
    <script src="assets/js/dashboard-charts.js"></script>
<script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
