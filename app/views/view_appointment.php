<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
  <div class="row">
    <div class="col-12 title-head text-uppercase">
      <h6>View Appointment</h6>
    </div>
    <div class="col-lg-12">
      <div class="row">
        <div class="col-12 pt-2">
          <div class="container pt-4">
            <div id="newAppointmentForm">
              <form class="default-form" method="POST" action="">
                <div class="content-container mt-2 p-3">
                  <h6 class="pl-2 text-uppercase">Appointment Details</h6>
                  <div class="container">
                    <div class="d-flex justify-content-center">
                      <div class="row px-3">
                        <div class="col-12">
                          <div class="row mt-3">
                            <p>Name: <?php echo $appointment->name; ?></p>
                            <p>Phone Number: <?php echo $appointment->phone_number; ?></p>
                            <p>Appointment Type: <?php echo $appointment->appointment_type; ?></p>
                            <p>Date: <?php echo $appointment->appointment_date; ?></p>
                            <p>Time: <?php echo $appointment_time; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-end my-3">
                  <a href="#" class="sidebar-btnContent text-white px-1 me-1" style="color: #ff6c36;" title="Cancel Appointment" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel Appointment</a>
                </div>
              </form>

              <!-- Cancel Modal -->
              <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="cancelModalLabel">Cancel Appointment</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <?php
                        $appointmentDate = date('l, F j, Y', strtotime($appointment->appointment_date));
                        $appointmentTime = date('h:i A', strtotime($appointment->appointment_time));
                      ?>
                      <p>Are you sure you want to cancel the appointment for <?php echo $appointment->name; ?> on <?php echo $appointmentDate; ?> at <?php echo $appointmentTime; ?>?</p>
                    </div>
                    <div class="modal-footer">
                      <form action="<?php echo 'cancel_appointment?appointment_id=' .$appointment->appointment_id; ?>" method="post">
                        <input type="submit" class="btn btn-danger" value="Yes, Cancel Appointment">
                      </form>
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
</main>