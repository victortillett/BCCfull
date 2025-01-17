<?php 
include('authentication.php');
$pagetitle="Select Seat";
include ('includes/header.php');
include ('includes/navbar.php');

?>
      <!-- Bus Seat Select -->
      <div class="seat-select padding-bt">
         <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
               <a class="text-danger mr-3" href="bus-details.php"><i class="icofont-rounded-left"></i></a>
               Bus Seat Select
            </h5>
            <div class="ml-auto d-flex align-items-center">
               <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
            </div>
         </div>
         <!-- Ticket -->
         <div class="ticket p-3">
            <h6 class="mb-1 font-weight-bold text-dark">Yutong A/C Bus</h6>
            <div class="start-rating f-10 mb-3">
               <i class="icofont-star text-danger"></i>
               <i class="icofont-star text-danger"></i>
               <i class="icofont-star text-danger"></i>
               <i class="icofont-star text-danger"></i>
               <i class="icofont-star text-muted"></i>
               <span class="text-dark">4.0</span>
            </div>
            <div class="bg-white rounded-1 shadow-sm p-3 mb-3 w-100">
               <div class="row mx-0 mb-3">
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Wifi</small>
                     <p class="small mb-0 l-hght-14"> Access in the bus</p>
                  </div>
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">AC</small>
                     <p class="small mb-0 l-hght-14"> Ac is available</p>
                  </div>
               </div>
               <div class="row mx-0 mb-3">
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Dinner / Lunch</small>
                     <p class="small mb-0 l-hght-14"> Yes</p>
                  </div>
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Safety Features</small>
                     <p class="small mb-0 l-hght-14"> Sanitized, Masks</p>
                  </div>
               </div>
               <div class="row mx-0">
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Essentials</small>
                     <p class="small mb-0 l-hght-14"> Pillow, Water</p>
                  </div>
                  <div class="col-6 p-0">
                     <small class="text-muted mb-1 f-10 pr-1">Snacks</small>
                     <p class="small mb-0 l-hght-14">Juice / shake </p>
                  </div>
               </div>
            </div>
            <!-- Select Seat -->
            <div class="select-seat row bg-white mx-0 px-3 pt-3 pb-1 mb-3 rounded-1 shadow-sm">
               <div class="col-8 pl-0">
                  <div class="d-flex">
                     <div class="sold text-center">
                        <img src="img/sold-seat.png" class="img-fluid mb-1">
                        <p class="small f-10">Sold Out</p>
                     </div>
                     <div class="sold text-center mx-3">
                        <img src="img/available-seat.png" class="img-fluid mb-1">
                        <p class="small f-10">Available</p>
                     </div>
                     <div class="sold text-center">
                        <img src="img/selected-seat.png" class="img-fluid mb-1">
                        <p class="small f-10">Selected</p>
                     </div>
                  </div>
                  <!-- Select Seats -->
                  <div class="select-seat">
                     <div class="checkboxes-seat mt-4">
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="a1" autocomplete="off">
                           A1
                           </label>
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="a2" autocomplete="off">
                           A2
                           </label>
                        </div>
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="b1" autocomplete="off">
                           B1
                           </label>
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="b2" autocomplete="off">
                           B2
                           </label>
                        </div>
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="c1" autocomplete="off" checked disabled>
                           C1
                           </label>
                           <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="c2" autocomplete="off" checked disabled>
                           C2
                           </label>
                        </div>
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="d1" autocomplete="off" checked disabled>
                           D1
                           </label>
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="d2" autocomplete="off">
                           D2
                           </label>
                        </div>
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="e1" autocomplete="off">
                           E1
                           </label>
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="e2" autocomplete="off">
                           E2
                           </label>
                        </div>
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="f1" autocomplete="off">
                           F1
                           </label>
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="f2" autocomplete="off">
                           F2
                           </label>
                        </div>
                        <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="g1" autocomplete="off">
                           G1
                           </label>
                           <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                           <input type="checkbox" name="g2" autocomplete="off">
                           G2
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-4 text-right pr-0">
                  <img src="img/driver.png" class="img-fluid mb-4">
                  <div class="checkboxes-seat mt-4">
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mb-2">
                        <input type="checkbox" name="a3" autocomplete="off">
                        A3
                        </label>
                     </div>
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mb-2">
                        <input type="checkbox" name="b3" autocomplete="off">
                        B3
                        </label>
                     </div>
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-danger small btn-sm rounded mb-2">
                        <input type="checkbox" name="c3" autocomplete="off" checked disabled>
                        C3
                        </label>
                     </div>
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-danger small btn-sm rounded mb-2">
                        <input type="checkbox" name="d3" autocomplete="off" checked disabled>
                        D3
                        </label>
                     </div>
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mb-2">
                        <input type="checkbox" name="e3" autocomplete="off">
                        E3
                        </label>
                     </div>
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mb-2">
                        <input type="checkbox" name="f3" autocomplete="off">
                        F3
                        </label>
                     </div>
                     <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mb-2">
                        <input type="checkbox" name="g3" autocomplete="off">
                        G3
                        </label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="list_item d-flex col-12 m-0 p-3 bg-white shadow-sm rounded-1 shadow-sm">
               <div class="d-flex mb-auto">
                  <img src="img/qr-code.png" class="img-fluid osahan-qr">
               </div>
               <div class="d-flex w-100">
                  <div class="bus_details w-100 pl-3">
                     <p class="mb-2 l-hght-18 font-weight-bold">More info.</p>
                     <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Passenger</small>
                        <p class="small mb-0 ml-auto l-hght-14"> Joan Rase</p>
                     </div>
                     <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Ticket Number</small>
                        <p class="small mb-0 ml-auto l-hght-14"> 1313</p>
                     </div>
                     <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">PNR Number</small>
                        <p class="small mb-0 ml-auto l-hght-14"> 56276-32324</p>
                     </div>
                     <div class="l-hght-10 d-flex align-items-center mt-3">
                        <p class="mb-0 pr-1 font-weight-bold">Amount Paid</p>
                        <p class="mb-0 ml-auto l-hght-14 text-danger font-weight-bold">$700</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <form action="book_seat.php" method="post">
    Seat Number:
    <select name="seat_number">
        <?php
        // Retrieve the available seats
        $sql = "SELECT * FROM seat WHERE is_booked = 0";
        $result = $conn->query($sql);

        // Generate the seat options dynamically
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $seatNumber = $row['seatno'];
                echo "<option value='$seatNumber'>$seatNumber</option>";
            }
        }
        ?>
    </select>
    <input type="submit" value="book_seat">
</form>
      <!-- Continue Booking -->
      <div class="fixed-bottom view-seatbt p-3">
         <a href="payment.php" class="btn btn-danger btn-block d-flex align-items-center osahanbus-btn rounded-1">
         <span class="text-left l-hght-14">
         TOTAL $700<br>
         <small class="f-10 text-white-50">Seats Selected : 3</small>
         </span>
         <span class="font-weight-bold ml-auto">NEXT</span>
         </a>
      </div>
      
      <!-- sidebar -->

      <?php include ('includes/footer.php');?> 