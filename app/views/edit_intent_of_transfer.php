<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
  <div class="row">
    <div class="col-12 text-uppercase nav-top" id="mainAppointmentForm">
      <h6 class="title-head">Edit Scheduled Appointment</h6>
    </div>
    <div class="col-lg-12">
      <div class="row">
        <div class="col-12 pt-2">
          <div class="container pt-3">
            <div id="editAppointmentForm">
              <form class="default-form" method="POST" action="" id="appointmentForm" enctype="multipart/form-data">
                <div class="content-container mb-3">
                  <div class="bckgrnd pt-2">
                    <h6 class="text-uppercase text-center text-light fs-6 bckgrnd">Appointment Information</h6>
                  </div>
                  <div class="row px-3 p-4">
                    <div class="col-12 d-flex mb-2">
                      <div class="col-4 px-5">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                          <input type="text" class="form-control phone-no" style="cursor: pointer;" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required readonly data-toggle="tooltip" data-bs-placement="top" title="Default appointment full name. This field is read-only. To update, please go to Manage Profile.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-4 px-5">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <div class="input-group">
                          <span class="input-group-text">+63</span>
                          <input type="text" class="form-control phone-no" id="phone_number" name="phone_number" placeholder="e.g., 9123456789" value="<?php echo isset($phone_number) ? $phone_number : ''; ?>" required readonly data-toggle="tooltip" data-bs-placement="top" title="Default phone number. This field is read-only. To update, please go to Manage Profile.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-4 px-5">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                          <input type="email" class="form-control phone-no" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required readonly data-toggle="tooltip" data-bs-placement="top" title="Default email address. This field is read-only. To update, please go to Manage Profile.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 d-flex">
                      <div class="col-4 px-5">
                        <label for="appointment_type" class="form-label">Appointment Type</label>
                        <div class="input-group">
                          <input type="text" class="form-control phone-no" style="cursor: pointer;" id="appointment_type" name="appointment_type" value="<?php echo isset($appointment_type) ? $appointment_type : ''; ?>" readonly data-toggle="tooltip" data-bs-placement="top" title="Default appointment type. This field is read-only.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-4 px-5">
                        <label for="appointment_date" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" id="appointment_date" name="appointment_date" value="<?php echo isset($appointment_date) ? date('Y-m-d', strtotime($appointment_date)) : ''; ?>" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="appointment_time" class="form-label">Preferred Time</label>
                        <input type="time" class="form-control" id="appointment_time" name="appointment_time" value="<?php echo isset($appointment_time) ? $appointment_time : ''; ?>" required>
                      </div>
                    </div>
                    <div class="col-12 d-flex mt-3">
                      <div class="col-4 px-5">
                        <label for="transfer_type" class="form-label">Transfer Type</label>
                        <div class="input-group">
                          <input type="text" class="form-control" style="cursor: pointer;" id="transfer_type" name="transfer_type" value="<?php echo isset($transfer_type) ? $transfer_type : ''; ?>" data-toggle="tooltip" data-bs-placement="top" title="Default transfer type. This field is read-only." readonly>
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-4 px-5">
                        <?php if ($userRole === 'admin'): ?>
                          <label for="status" class="form-label">Status</label>
                          <select class="form-control appointment-status-select fw-bold" id="status" name="status">
                            <option value="" selected disabled>Select Appointment Status</option>
                            <?php if ($status === 'Pending'): ?>
                              <option value="Pending" <?php echo (isset($status) && $status === 'Pending') ? 'selected' : ''; ?> disabled>Pending</option>
                              <option value="Approved" <?php echo (isset($status) && $status === 'Approved') ? 'selected' : ''; ?>>Approved</option>
                              <option value="Rejected" <?php echo (isset($status) && $status === 'Rejected') ? 'selected' : ''; ?>>Rejected</option>
                            <?php elseif ($status === "Approved"): ?>
                              <option value="Approved" <?php echo (isset($status) && $status === 'Approved') ? 'selected' : ''; ?> disabled>Approved</option>
                              <option value="On Process" <?php echo (isset($status) && $status === 'On Process') ? 'selected' : ''; ?>>On Process</option>
                            <?php elseif ($status === "On Process"): ?>
                              <option value="On Process" <?php echo (isset($status) && $status === 'On Process') ? 'selected' : ''; ?> disabled>On Process</option>
                              <option value="Completed" <?php echo (isset($status) && $status === 'Completed') ? 'selected' : ''; ?>>Completed</option>
                            <?php endif; ?>
                          </select>
                        <?php else: ?>
                          <input type="hidden" name="status" value="<?php echo isset($status) ? $status : ''; ?>">
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php if ($userRole === 'admin'): ?>
                      <div class="col-12 d-flex mt-3">
                        <div class="col-8 px-5" id="rejection-comments-container" style="display: none;">
                          <label for="comments" class="form-label">Rejection Comments</label>
                          <textarea class="form-control text-start" id="comments" name="comments" style="width: 580px;" rows="3"><?php echo isset($comments) ? $comments : ''; ?></textarea>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="content-container mt-4">
                  <div class="bckgrnd pt-2">
                    <h6 class="text-uppercase text-center text-light fs-6">Tricycle Application Form</h6>
                  </div>
                  <div class="row px-3 p-4">
                    <div class="col-12 d-flex mb-2">
                      <div class="col-4 px-5">
                        <label for="operator_name" class="form-label">Name of Operator</label>
                        <div class="input-group">
                          <input type="text" class="form-control phone-no" style="cursor: pointer;" id="operator_name" name="operator_name" value="<?php echo isset($operator_name) ? $operator_name : ''; ?>" readonly data-toggle="tooltip" data-bs-placement="top" title="Default operator name. This field is read-only. To update, please go to Manage Profile.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-4 px-5">
                        <label for="tricycle_phone_number" class="form-label">Phone Number</label>
                        <div class="input-group">
                          <span class="input-group-text">+63</span>
                          <input type="text" class="form-control phone-no" id="tricycle_phone_number" name="tricycle_phone_number" placeholder="e.g., 9123456789" value="<?php echo isset($tricycle_phone_number) ? $tricycle_phone_number : ''; ?>" required readonly data-toggle="tooltip" data-bs-placement="top" title="Default phone number. This field is read-only. To update, please go to Manage Profile.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="col-4 px-5">
                        <label for="address" class="form-label">Address</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="address" name="address" value="<?php echo isset($address) ? $address : ''; ?>" required readonly data-toggle="tooltip" data-bs-placement="top" title="Default address. This field is read-only. To update, please go to Manage Profile.">
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 d-flex mb-2">
                      <div class="col-4 px-5">
                        <label for="mtop_no" class="form-label">MTOP Number</label>
                        <input type="text" class="form-control" id="mtop_no" name="mtop_no" value="<?php echo isset($mtop_no) ? $mtop_no : ''; ?>" min="0" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="color_code" class="form-label">Color Code</label>
                        <select class="form-control" id="color_code" name="color_code" required>
                          <option selected disabled>Please Select Here</option>
                          <option value="Red" data-route-area="Free Zone / Zone 1" <?php echo (isset($color_code) && $color_code == 'Red' ? 'selected' : ''); ?>>Red</option>
                          <option value="Blue" data-route-area="Free Zone & Zone 2" <?php echo (isset($color_code) && $color_code == 'Blue' ? 'selected' : ''); ?>>Blue</option>
                          <option value="Yellow" data-route-area="Free Zone & Zone 3" <?php echo (isset($color_code) && $color_code == 'Yellow' ? 'selected' : ''); ?>>Yellow</option>
                          <option value="Green" data-route-area="Free Zone & Zone 4" <?php echo (isset($color_code) && $color_code == 'Green' ? 'selected' : ''); ?>>Green</option>
                        </select>
                      </div>
                      <div class="col-4 px-5">
                        <label for="route_area" class="form-label">Route Area</label>
                        <div class="input-group">
                          <input type="text" class="form-control" style="cursor:pointer;" id="route_area" name="route_area" placeholder="Select Color Code First" data-toggle="tooltip" data-bs-placement="top" title="Please choose a Color Code to determine the Route Area for the tricycle. This field is read-only." value="<?php echo isset($route_area) ? $route_area : ''; ?>" readonly>
                          <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is read-only.">
                            <i class="fa-solid fa-info-circle"></i>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 d-flex mb-5">
                      <div class="col-4 px-5">
                        <label for="make_model" class="form-label">Make Model</label>
                        <input type="text" class="form-control" id="make_model" name="make_model" value="<?php echo isset($make_model) ? $make_model : ''; ?>" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="make_model_year_acquired" class="form-label">Model Year Acquired</label>
                        <input type="text" class="form-control" id="make_model_year_acquired" name="make_model_year_acquired" value="<?php echo isset($make_model_year_acquired) ? $make_model_year_acquired : ''; ?>" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="make_model_expiry_date" class="form-label">Model Expiry Date</label>
                        <input type="date" class="form-control" id="make_model_expiry_date" name="make_model_expiry_date" value="<?php echo isset($make_model_expiry_date) ? $make_model_expiry_date : ''; ?>" required>
                      </div>
                    </div>

                    <div class="col-12 d-flex mb-2">
                      <div class="col-4 px-5">
                        <label for="motor_number" class="form-label">Motor Number</label>
                        <input type="text" class="form-control" id="motor_number" name="motor_number" value="<?php echo isset($motor_number) ? $motor_number : ''; ?>" min="0" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="insurer" class="form-label">Insurer</label>
                        <input type="text" class="form-control" id="insurer" name="insurer" value="<?php echo isset($insurer) ? $insurer : ''; ?>" required>
                      </div>
                      <?php if ($userRole === 'operator' && !empty($availableCinNumbers)): ?>
                        <div class="col-4 px-5">
                          <label for="tricycle_cin_number_id" class="form-label">Tricycle CIN</label>
                          <select class="form-control" id="tricycle_cin_number_id" name="tricycle_cin_number_id" required>
                            <option value="" disabled <?= empty($selectedCinNumberId) ? 'selected' : ''; ?>>Please Select Here</option>
                            <?php foreach ($availableCinNumbers as $cinNumberId => $cinNumber): ?>
                              <option value="<?= $cinNumberId ?>" <?= ($cinNumberId == $selectedCinNumberId) ? 'selected' : ''; ?>>
                                <?= $cinNumber['cin_number'] ?>
                              </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      <?php elseif ($userRole === 'admin' && isset($selectedCinNumberId)): ?>
                        <div class="col-4 px-5">
                          <label for="tricycle_cin_number_id" class="form-label">Tricycle CIN</label>
                          <input type="text" class="form-control" style="cursor: pointer;" id="tricycle_cin_number_id" name="tricycle_cin_number_id" value="<?= $selectedCinNumberId ?>" readonly data-toggle="tooltip" data-bs-placement="top" title="Default Tricycle CIN – Only the operator can update this information.">
                        </div>
                      <?php else: ?>
                        <div class="col-4 px-5">
                          <label for="tricycle_cin_number_id" class="form-label">Tricycle CIN</label>
                          <input type="text" class="form-control" id="tricycle_cin_number_id" name="tricycle_cin_number_id" value="" data-toggle="tooltip" data-bs-placement="top" title="No available Tricycle CIN numbers." readonly disabled>
                        </div>
                      <?php endif; ?>
                    </div>


                    <div class="col-12 d-flex mb-5">
                      <div class="col-4 px-5">
                        <label for="coc_no" class="form-label">C.O.C Number</label>
                        <input type="text" class="form-control" id="coc_no" name="coc_no" value="<?php echo isset($coc_no) ? $coc_no : ''; ?>" min="0" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="coc_no_expiry_date" class="form-label">C.O.C Expiry Date</label>
                        <input type="date" class="form-control" id="coc_no_expiry_date" name="coc_no_expiry_date" value="<?php echo isset($coc_no_expiry_date) ? $coc_no_expiry_date : ''; ?>" required>
                      </div>
                    </div>

                    <div class="col-12 d-flex mb-2">
                      <?php if (!empty($availableCinNumbers)): ?>
                        <div class="col-4 px-5">
                          <label for="lto_cr_no" class="form-label">LTO CR Number</label>
                          <input type="text" class="form-control" id="lto_cr_no" name="lto_cr_no" value="<?= isset($lto_cr_no) ? $lto_cr_no : ''; ?>" min="0" required>
                        </div>
                        <div class="col-4 px-5">
                          <label for="lto_or_no" class="form-label">LTO OR Number</label>
                          <input type="text" class="form-control" id="lto_or_no" name="lto_or_no" value="<?= isset($lto_or_no) ? $lto_or_no : ''; ?>" required>
                        </div>
                        <div class="col-4 px-5">
                          <label for="driver_id" class="form-label">Name of Driver</label>
                          <?php if ($userRole === 'admin'): ?>
                            <?php foreach ($drivers as $driver): ?>
                              <input type="text" class="form-control" id="driver_name" value="<?= isset($driver['name']) ? $driver['name'] : ''; ?>" readonly data-toggle="tooltip" data-bs-placement="top" title="Default Driver Name – Only the user can update this information.">
                              <input type="hidden" name="driver_id" value="<?= $driver['driver_id']; ?>">
                            <?php endforeach; ?>
                          <?php else: ?>
                            <select class="form-control" id="driver_id" name="driver_id">
                              <option value="" disabled <?= isset($driver_id) ? 'selected' : ''; ?>>Please Select Here</option>
                              <?php foreach ($drivers as $driver): ?>
                                <option value="<?= $driver['driver_id']; ?>" <?= (isset($driver_id) && $driver_id == $driver['driver_id']) ? 'selected' : ''; ?>>
                                  <?= $driver['name']; ?>
                                </option>
                              <?php endforeach; ?>
                            </select>
                          <?php endif; ?>
                        </div>
                      <?php else: ?>
                        <div class="col-4 px-5">
                          <label for="lto_cr_no" class="form-label">LTO CR Number</label>
                          <input type="text" class="form-control" id="lto_cr_no" name="lto_cr_no" value="" data-toggle="tooltip" data-bs-placement="top" title="No Tricycle CIN has been selected." readonly disabled>
                        </div>
                        <div class="col-4 px-5">
                          <label for="lto_or_no" class="form-label">LTO OR Number</label>
                          <input type="date" class="form-control text-uppercase" id="lto_or_no" name="lto_or_no" value="" data-toggle="tooltip" data-bs-placement="top" title="No Tricycle CIN has been selected." readonly disabled>
                        </div>
                        <div class="col-4 px-5">
                          <label for="driver_id" class="form-label">Name of Driver</label>
                          <input type="text" class="form-control" id="driver_id" name="driver_id" value="" data-toggle="tooltip" data-bs-placement="top" title="No tricycle drivers are currently available for selection." readonly disabled>
                        </div>
                      <?php endif; ?>
                    </div>

                    <div class="col-12 d-flex mb-2">
                      <div class="col-4 px-5">
                        <label for="driver_license_no" class="form-label">Driver License Number</label>
                        <input type="text" class="form-control" id="driver_license_no" name="driver_license_no" value="<?php echo isset($driver_license_no) ? $driver_license_no : ''; ?>" min="0" required>
                      </div>
                      <div class="col-4 px-5">
                        <label for="driver_license_expiry_date" class="form-label">Driver License Expiry Date</label>
                        <input type="date" class="form-control" id="driver_license_expiry_date" name="driver_license_expiry_date" value="<?php echo isset($driver_license_expiry_date) ? $driver_license_expiry_date : ''; ?>" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="content-container mt-4 mb-3">
                  <div class="bckgrnd pt-2">
                    <h6 class="text-uppercase text-center text-light fs-6">MTOP Requirements Images</h6>
                  </div>
                  <div class="px-3 pt-2">
                    <p class="text-muted fw-bold fst-italic"><span class="text-danger">Note: </span>Please ensure all uploaded images are clear for better processing.</p>
                  </div>
                  <div class="row px-3 p-4">
                    <div class="col-12 d-flex mb-2">
                      <div class="text-center col-4 px-4">
                        <label for="mc_lto_certificate_of_registration" class="form-label">LTO Certificate of Registration (MC of New Unit)</label>
                        <?php
                          if (isset($mc_lto_certificate_of_registration_path) && $mc_lto_certificate_of_registration_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $mc_lto_certificate_of_registration_path . '" class="img-fluid rounded fixed-height-image" id="mc_lto_certificate_of_registration" alt="LTO Certificate of Registration (MC of New Unit)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="mc_lto_certificate_of_registration" data-original-image="' . $mc_lto_certificate_of_registration_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="mc_lto_certificate_of_registration" id="mc_lto_certificate_of_registration-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_mc_lto_certificate_of_registration" value="' . ($mc_lto_certificate_of_registration_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="mc_lto_official_receipt" class="form-label">LTO Official Receipt (MC of New Unit)</label>
                        <?php
                          if (isset($mc_lto_official_receipt_path) && $mc_lto_official_receipt_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $mc_lto_official_receipt_path . '" class="img-fluid rounded fixed-height-image" id="mc_lto_official_receipt" alt="LTO Official Receipt (MC of New Unit)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="mc_lto_official_receipt" data-original-image="' . $mc_lto_official_receipt_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="mc_lto_official_receipt" id="mc_lto_official_receipt-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_mc_lto_official_receipt" value="' . ($mc_lto_official_receipt_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="mc_plate_authorization" class="form-label">Plate Authorization (MC of New Unit)</label>
                        <?php
                          if (isset($mc_plate_authorization_path) && $mc_plate_authorization_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $mc_plate_authorization_path . '" class="img-fluid rounded fixed-height-image" id="mc_plate_authorization" alt="Plate Authorization (MC of New Unit)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="mc_plate_authorization" data-original-image="' . $mc_plate_authorization_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="mc_plate_authorization" id="mc_plate_authorization-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_mc_plate_authorization" value="' . ($mc_plate_authorization_path ?? '') . '">';
                        ?>
                      </div>
                    </div>
                    <div class="col-12 d-flex mb-2">
                      <div class="text-center col-4 px-4">
                        <label for="tc_insurance_policy" class="form-label">Insurance Policy (TC) (New Owner)</label>
                        <?php
                          if (isset($tc_insurance_policy_path) && $tc_insurance_policy_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $tc_insurance_policy_path . '" class="img-fluid rounded fixed-height-image" id="tc_insurance_policy" alt="Insurance Policy (TC) (New Owner)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="tc_insurance_policy" data-original-image="' . $tc_insurance_policy_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="tc_insurance_policy" id="tc_insurance_policy-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_tc_insurance_policy" value="' . ($tc_insurance_policy_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="unit_front_view_image" class="form-label">Picture of New Unit (Front View)</label>
                        <?php
                          if (isset($unit_front_view_image_path) && $unit_front_view_image_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $unit_front_view_image_path . '" class="img-fluid rounded fixed-height-image" id="unit_front_view_image" alt="Picture of New Unit (Front View)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="unit_front_view_image" data-original-image="' . $unit_front_view_image_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="unit_front_view_image" id="unit_unit_front_view_image-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_unit_front_view_image" value="' . ($unit_front_view_image_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="unit_side_view_image" class="form-label">Picture of New Unit (Side View)</label>
                        <?php
                          if (isset($unit_side_view_image_path) && $unit_side_view_image_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $unit_side_view_image_path . '" class="img-fluid rounded fixed-height-image" id="unit_side_view_image" alt="Picture of New Unit (Side View)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="unit_side_view_image" data-original-image="' . $unit_side_view_image_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="unit_side_view_image" id="unit_side_view_image-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_unit_side_view_image" value="' . ($unit_side_view_image_path ?? '') . '">';
                        ?>
                      </div>
                    </div>
                    <div class="col-12 d-flex mb-2">
                      <div class="text-center col-4 px-4">
                        <label for="sketch_location_of_garage" class="form-label">Sketch Location of Garage</label>
                        <?php
                          if (isset($sketch_location_of_garage_path) && $sketch_location_of_garage_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $sketch_location_of_garage_path . '" class="img-fluid rounded fixed-height-image" id="sketch_location_of_garage" alt="Sketch Location of Garage">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="sketch_location_of_garage" data-original-image="' . $sketch_location_of_garage_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="sketch_location_of_garage" id="sketch_location_of_garage-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_sketch_location_of_garage" value="' . ($sketch_location_of_garage_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="affidavit_of_income_tax_return" class="form-label">Affidavit of No Income or Latest Income Tax Return</label>
                        <?php
                          if (isset($affidavit_of_income_tax_return_path) && $affidavit_of_income_tax_return_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $affidavit_of_income_tax_return_path . '" class="img-fluid rounded fixed-height-image" id="affidavit_of_income_tax_return" alt="Affidavit of No Income or Latest Income Tax Return">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="affidavit_of_income_tax_return" data-original-image="' . $affidavit_of_income_tax_return_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="affidavit_of_income_tax_return" id="affidavit_of_income_tax_return-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_affidavit_of_income_tax_return" value="' . ($affidavit_of_income_tax_return_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="driver_cert_safety_driving_seminar" class="form-label">Driver's Certificate of Safety Driving Seminar</label>
                        <?php
                          if (isset($driver_cert_safety_driving_seminar_path) && $driver_cert_safety_driving_seminar_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $driver_cert_safety_driving_seminar_path . '" class="img-fluid rounded fixed-height-image" id="driver_cert_safety_driving_seminar" alt="Driver\'s Certificate of Safety Driving Seminar">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="driver_cert_safety_driving_seminar" data-original-image="' . $driver_cert_safety_driving_seminar_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="driver_cert_safety_driving_seminar" id="driver_cert_safety_driving_seminar-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_driver_cert_safety_driving_seminar" value="' . ($driver_cert_safety_driving_seminar_path ?? '') . '">';
                        ?>
                      </div>
                    </div>
                    <div class="col-12 d-flex mb-2">
                      <div class="text-center col-4 px-4">
                        <label for="proof_of_id" class="form-label">Proof of ID /Residence <br> (Voters/Birth/Baptismal/Marriage Cert.)</label>
                        <?php
                          if (isset($proof_of_id_path) && $proof_of_id_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $proof_of_id_path . '" class="img-fluid rounded fixed-height-image" id="proof_of_id" alt="Proof of ID /Residence <br> (Voters/Birth/Baptismal/Marriage Cert.)">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="proof_of_id" data-original-image="' . $proof_of_id_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="proof_of_id" id="proof_of_id-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_proof_of_id" value="' . ($proof_of_id_path ?? '') . '">';
                        ?>
                      </div>
                      <div class="text-center col-4 px-4">
                        <label for="latest_franchise" class="form-label">Latest Franchise</label>
                        <?php
                          if (isset($latest_franchise_path) && $latest_franchise_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $latest_franchise_path . '" class="img-fluid rounded fixed-height-image" id="latest_franchise" alt="Latest Franchise">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="latest_franchise" data-original-image="' . $latest_franchise_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="latest_franchise" id="latest_franchise-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_latest_franchise" value="' . ($latest_franchise_path ?? '') . '">';
                        ?>
                      </div>
                    </div>
                  </div>

                  <div class="row px-3 p-4">
                    <div class="text-center">
                      <h6>Additional Requirement</h6>
                    </div>
                    <div class="col-12 d-flex mb-2">
                      <div class="text-center col-4 px-4">
                        <label for="deed_of_donation_or_deed_of_sale" class="form-label">Deed of Donation or Deed of Sale</label>
                        <?php
                          if (isset($deed_of_donation_or_deed_of_sale_path) && $deed_of_donation_or_deed_of_sale_path) {
                            echo '<div class="image-container position-relative">';
                            echo '<img src="' . $deed_of_donation_or_deed_of_sale_path . '" class="img-fluid rounded fixed-height-image" id="deed_of_donation_or_deed_of_sale" alt="Deed of Donation or Deed of Sale">';
                            echo '<button type="button" class="btn-close position-absolute top-0 end-0 m-2 remove-image-btn" data-bs-toggle="modal" data-bs-target="#deleteImageModal" data-image-type="deed_of_donation_or_deed_of_sale" data-original-image="' . $deed_of_donation_or_deed_of_sale_path . '"></button>';
                            echo '</div>';
                          } else {
                            echo '<div class="image-container">';
                            echo '<input class="form-control" type="file" name="deed_of_donation_or_deed_of_sale" id="deed_of_donation_or_deed_of_sale-input" accept="image/*" required>';
                            echo '</div>';
                          }
                        ?>
                        <?php
                          echo '<input type="hidden" name="original_deed_of_donation_or_deed_of_sale" value="' . ($deed_of_donation_or_deed_of_sale_path ?? '') . '">';
                        ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-end my-3">
                  <button type="submit" class="sidebar-btnContent" name="update_intent_of_transfer" id="update_intent_of_transfer">Update</button>
                  <a href="./appointments" class="cancel-btn">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Confirmation Modal -->
<div class="modal fade" id="deleteImageModal" tabindex="-1" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteImageModalLabel">Delete Image Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this image?
      </div>
      <div class="modal-footer">
        <form method="POST" action="">
          <input type="hidden" name="image_type" id="imageTypeInput">
          <input type="hidden" name="original_image_path" id="originalImagePathInput">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger" name="confirm_delete_image">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    $("#color_code").change(function () {
      let selectedColorCode = $(this).val();
      let selectedRouteArea = $("#color_code").find(":selected").data("route-area");
      $("#route_area").val(selectedRouteArea);
    });

    let errorMessage = $(".flash-message.error");
    if (errorMessage.length > 0) {
      document.getElementById("mainAppointmentForm").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    }
  });

  $(document).ready(function () {
    $(".remove-image-btn").click(function () {
      let imageType = $(this).data("image-type");
      let originalImagePath = $(this).data("original-image");
      
      $("#imageTypeInput").val(imageType);
      $("#originalImagePathInput").val(originalImagePath);
    });
  });

  $(document).ready(function () {
    function toggleCommentsVisibility() {
      const selectedStatus = $('#status').val();
      const isAdmin = <?php echo $userRole === 'admin' ? 'true' : 'false'; ?>;
      const showComments = isAdmin && selectedStatus === 'Rejected';
      $('#rejection-comments-container').toggle(showComments);
    }

    toggleCommentsVisibility();

    // Trigger toggle when the status dropdown value changes
    $('#status').change(function () {
      toggleCommentsVisibility();
    });
  });
</script>