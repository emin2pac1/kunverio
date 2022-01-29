<?php require_once('common/header.php') ?>
       <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-5">
                    <h1 class="font-weight-light">All your measurments, in your language!</h1>
                    <p>Kunverio makes converting between different Measurement Systems and Units a breeze! </p>
                    <a class="btn btn-primary home-btn-act" href="#units">Give it a try</a>
                </div>
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/hero.jpg" alt="..." height="400" width="600" /></div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Easy as pie! All you need to do is to enter your measurment and the unit in needs to be converted to!</p></div>
            </div>
            <!-- Content Row-->
                <div class="col-md-12 mb-5 text-center" id="units">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"> Kunverio's Measurements</h2>
                            <div class="container">
                              <div class="row">
                                <p>Choose one</p>
                                <div class="btn-space">
                                <a href="length.php" class="btn btn-primary btn-space home-btn">Length and distance</a>
                                <a href="area.php" class="btn btn-danger btn-space home-btn">Area</a>
                                <a href="volume.php" class="btn btn-warning btn-space home-btn">Volume and capacity</a>
                                  </div>

                                <div class="row">
                                  <div class="btn-space">
                                <a href="mass.php" class="btn btn-primary btn-space home-btn">Mass and weight</a>
                                <!-- <a href="speed.php" class="btn btn-danger btn-space home-btn">Speed</a> -->
                                <a href="tempr.php" class="btn btn-warning btn-space home-btn">Temperature</a>
                                </div>
                                  </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <?php require_once('common/footer.php') ?>
