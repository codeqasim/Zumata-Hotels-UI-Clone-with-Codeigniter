<!DOCTYPE HTML>
<head>
    <title>Travelhope</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bs.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jq.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bs.js"></script>
</head>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Travelhope</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="#">Home</a></li>
                <li class="active"><a href="#">Hotels</a></li>
                <li><a href="#">Flights</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Packages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Local Tours</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">International</li>
                        <li><a href="#">East</a></li>
                        <li><a href="#">West</a></li>
                        <li><a href="#">Asia</a></li>
                        <li><a href="#">Europe</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="./">Qasim Hussain <span class="sr-only">(current)</span></a></li>
                <li><a href="../navbar-static-top/">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="progress">
        <div class="indeterminate"></div>
    </div>
</nav>
<br><br><br><br><br>
<div class="container-fluid">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Search</div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" placeholder="City Destination or area" class="form-control" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" placeholder="Checkin" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Checkout" class="form-control" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Guests</label>
                            <select name="" id="" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Child</label>
                            <select name="" id="" class="form-control">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Rooms</label>
                            <select name="" id="" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-block">SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Filter Search </div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="#" class="list-group-item">Near To</a>
                    <a href="#" class="list-group-item">Hotel Name</a>
                    <a href="#" class="list-group-item">Star Rating</a>
                    <a href="#" class="list-group-item">Reviews</a>
                    <a href="#" class="list-group-item">Price</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <?php  for($i=1; $i<=8; $i++) {  ?>
        <div class="panel panel-default mb5">
            <div class="panel-body p10">
                <div class="col-md-1">
                    <div class="row">
                        <img src="<?php echo base_url(); ?>assets/img/hotel.jpg" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-md-5">
                    <h4>Moevenpick Hotel Jumeirah Lakes Towers</h4>
                    <p class="text-muted mt-10">Jumeirah Lakes Towers Cluster A</p>
                    <br>
                    <h4 class="text-warning mt-10"><?php  for($j=1; $j<=4; $j++) {  ?>&#9733;<?php } ?></h4>
                </div>
                <div class="col-md-1 text-center">
                    <!--<div class="alert alert-success">3%</div>-->
                </div>
                <div class="col-md-5 text-right">
                    <h4><small>USD $</small> 259</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#DETAILS">Book Now</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

 <!-- Modal -->
<div id="DETAILS" class="modal right fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Moevenpick Hotel Jumeirah Lakes Towers</h4>
            </div>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#rooms" aria-controls="home" role="tab" data-toggle="tab">Rooms</a></li>
                    <li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Hotel Info</a></li>
                    <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
                    <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                    <li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Map</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="rooms">
                        <div class="panel-body" style="background: #eee;border-bottom:1px solid #E3E3E3">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Checkin</label>
                                        <input type="" class="form-control" placeholder="checkin" value="20/03/2018" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Checkout</label>
                                        <input type="" class="form-control" placeholder="checkout" value="22/03/2018"/>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Guests</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Child</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">0</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Rooms</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12">
                                    <button class="btn btn-info btn-block btn-warning">
                                    Modify
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="indeterminate"></div>
                        </div>
                        <?php  for($k=1; $k<=8; $k++) {  ?>
                        <div class="p10">
                            <div class="col-md-1">
                                <div class="row">
                                    <img src="<?php echo base_url(); ?>assets/img/hotel.jpg" class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h4>Double bed delux room</h4>
                                <p class="text-muted mt-10">Jumeirah Lakes Towers Cluster A</p>
                                <br>
                            </div>
                            <div class="col-md-4 text-right">
                                <h4><small>USD $</small> 259</h4>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#BOOK">Book Now</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr style="margin:0px">
                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="info">
                        <div class="panel-body">
                            <h4>Moevenpick Hotel Jumeirah Lakes Towers</h4>
                            <p class="text-muted mt-10">Jumeirah Lakes Towers Cluster A</p>
                            <h4 class="text-warning mt-10"><?php  for($j=1; $j<=4; $j++) {  ?>&#9733;<?php } ?></h4>
                            <hr>
                            <h5 class="strong">Hotel description</h5>
                            <p>
                            <p><b>Property Location</b> <br>A stay at Movenpick Hotel Jumeirah Lakes Towers places you in the heart of Dubai, convenient to Dubai Marina Mall and Montgomerie Golf Club.  This 5-star hotel is within close proximity of The Beach Mall and Dubai Marina.</p>
                            <p><b>Rooms</b> <br>Make yourself at home in one of the 168 air-conditioned rooms featuring iPod docking stations and minibars. Wired and wireless Internet access is complimentary, and flat-screen televisions with satellite programming provide entertainment. Private bathrooms with shower/tub combinations feature deep soaking bathtubs and rainfall showerheads. Conveniences include phones, as well as safes and desks.</p>
                            <p><b>Amenities</b> <br>Pamper yourself with a visit to the spa, which offers massages, body treatments, and facials. You're sure to appreciate the recreational amenities, including an outdoor pool, a spa tub, and a sauna. Additional amenities at this hotel include complimentary wireless Internet access, concierge services, and babysitting/childcare (surcharge).</p>
                            <p><b>Dining</b> <br>Enjoy a meal at one of the hotel's dining establishments, which include 3 restaurants and a coffee shop/café. From your room, you can also access 24-hour room service. Quench your thirst with your favorite drink at a bar/lounge.</p>
                            <p><b>Business, Other Amenities</b> <br>Featured amenities include a business center, express check-in, and express check-out. Event facilities at this hotel consist of conference space and meeting rooms. Free valet parking is available onsite.</p>
                            </p>
                            <hr>
                            <h5 class="strong">Amenities</h5>
                            <div class="row">
                                <?php  for($m=1; $m<=16; $m++) {  ?>
                                <div class="col-md-3 text-success ">
                                    &#10004; Air Conditioning
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="gallery">
                        <div class="panel-body">
                            <div class="row">
                                <?php  for($n=1; $n<=12; $n++) {  ?>
                                <div class="col-md-4 form-group">
                                    <img src="<?php echo base_url(); ?>assets/img/gallery.jpg" class="img-responsive" alt="" />
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="reviews">
                        <div class="panel-body">
                            <table class="table-hover table table-striped">
                                <tbody>
                                    <?php  for($n=1; $n<=8; $n++) {  ?>
                                    <tr>
                                        <td style="width: 100px;">
                                            <img class="go-right" style="height:80px;width:80px" src="<?php echo base_url(); ?>assets/img/user.jpg" alt="82">
                                        </td>
                                        <td>
                                            <span class="dark"><strong class="go-right">Beano &nbsp;</strong></span> <span class="text-muted"><small>04/05/2014</small>   <span class="badge badge-warning pull-right go-left"> 6 / 10</span></span> <br>
                                            This was my 2nd stay at Rendezvous. Obviouslyl I like it or I wouldn't go back. BUT, the price is a big reason why I choose this place. There are much nicer, more modern hotels in Singapore, but this hotel is convenient to MRT and Bugis, has comfy, well-appointed rooms and very good service. The gym is the worst feature - the renovation obviously did
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="map">
                        <div class="panel-body">
                            <h5 class="strong">Location</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Address</label>
                                    <p class="text-muted">Jumeirah Lakes Towers Cluster A</p>
                                </div>
                                <div class="col-md-3">
                                    <label>City</label>
                                    <p class="text-muted">Dubai</p>
                                </div>
                                <div class="col-md-3">
                                    <label>Country</label>
                                    <p class="text-muted">United Arab Emerates</p>
                                </div>
                                <div class="col-md-3">
                                    <label>Geo location</label>
                                    <p class="text-muted">25.06612,55.138139</p>
                                </div>
                            </div>
                            <hr>
                            <img src="<?php echo base_url(); ?>assets/img/map.png" class="img-responsive" style="width:100%" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="BOOK" class="modal left fade" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title pull-right">Booking & Confirmation</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel panel-default">
                                <div class="panel-heading">Hotel Details</div>
                                <div class="panel-body">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <img src="<?php echo base_url(); ?>assets/img/hotel.jpg" class="img-responsive" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Moevenpick Hotel Jumeirah Lakes Towers</h5>
                                        <p class="text-muted mt-10">Jumeirah Lakes Towers Cluster A</p>
                                        <h4 class="text-warning mt-10"><?php  for($j=1; $j<=4; $j++) {  ?>&#9733;<?php } ?></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div>
                                        <div><span class="strong">Check-In</span> - 20/02/2018 <span class="pull-right"><span class="strong">Check-Out</span> - 22/02/2018</span></div>
                                        <div>Number of Guest <span class="pull-right">1</span></div>
                                        <div>Number of Child <span class="pull-right">0</span></div>
                                        <div>Number of Rooms <span class="pull-right">1</span></div>
                                        <div>Room Type <span class="pull-right">Superior</span></div>
                                        <div>Food <span class="pull-right">Full board included</span></div>
                                        <div>Bed <span class="pull-right">Queen Or Twin x 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert" style="color: #ffffff; background-color: #216bf3; border-color: #1d5bcc;">
                                <label style="color: white; margin-bottom: 0px;">Book now for</label>
                                <h3 style="margin-bottom: 0px;">USD 614.95</h3>
                                <span class="">Tax included</span>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="panel panel-default booking">
                                <div class="panel-heading">Personal Details</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="number" class="form-control" placeholder="Number" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="Email Address" />
                                    </div>
                                    <div class="form-group">
                                        <label>Country of Passport / Visa</label>
                                        <select name="" id="" class="form-control">
                                            <option>Pakistan</option>
                                            <option>Saudi Arabia</option>
                                            <option>United Emarate</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Special Notes</label>
                                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Requirements"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                By selecting to complete this booking I acknowledge that I have read and accept the <a target="_blank" href="#" class="strong">Terms &amp; Conditions  </a>
                            </div>
                            <button class="btn btn-success btn-block" data-toggle="modal" data-target="#BOOKING">Continue Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="BOOKING" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Booking Confirmed</h4>
            </div>
            <div class="modal-body">
                <img src="<?php echo base_url(); ?>assets/img/check.png" class="center-block" style="width: 100px; margin-top: 12px; opacity: 0.6;" alt="" />
                <h3 class="text-center">Booking Confirmed</h3>
                <hr>
                <p>Your booking has been confirmed and your reservation details were sent to youe email address. for information or support please feel free to contact us on given toll free numbers. Thank you for booking with us happy stay.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>