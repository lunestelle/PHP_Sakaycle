<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
  <div class="row">
    <div class="col-12 text-uppercase nav-top">
      <h6 class="title-head">operators</h6>
    </div>
    <div class="col-lg-12 mt-4">
      <div class="row">
        <div class="col-12">
          <div class="table-responsive pt-4">
            <table class="table table-hover" id="systemTable">
              <thead class="thead-custom">
                <tr class="text-uppercase">
                  <th scope="col" class="text-center">Full Name</th>
                  <th scope="col" class="text-center">Phone Number</th>
                  <th scope="col" class="text-center">Email</th>
                  <th scope="col" class="text-center">Address</th>
                  <th scope="col" class="text-center">Tricycles</th>
                  <th scope="col" class="text-center">Drivers</th>
                  <th scope="col" class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?php echo $user['full_name']; ?></td>
                    <td><?php echo empty($user['phone_number']) ? '----------------' : $user['phone_number']; ?></td>
                    <td><?php echo empty($user['email']) ? '----------------' : $user['email']; ?></td>
                    <td><?php echo empty($user['address']) ? '----------------' : $user['address']; ?></td>
                    <td>
                      <?php if (empty($user['tricycles'])): ?>
                        <span class="badge text-bg-info p-1">No Registered Tricycle</span>
                      <?php else: ?>
                        <?php foreach ($user['tricycles'] as $tricycle): ?>
                          <a href="./view_tricycle?tricycle_id=<?php echo $tricycle['tricycle_id']; ?>" class="tricycle-link"><?php echo $tricycle['plate_no']; ?></a><br>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php if (empty($user['drivers'])): ?>
                        <span class="badge text-bg-info p-1">No Registered Driver</span>
                      <?php else: ?>
                        <?php foreach ($user['drivers'] as $driver): ?>
                          <a href="./view_driver?driver_id=<?php echo $driver['driver_id']; ?>" class="tricycle-link"><?php echo $driver['driver_name']; ?></a><br>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="./view_operator?operator_id=<?php echo $user['user_id'];?>" class="view_data px-1 me-1" style="color:#26CC00;" title="View Operator Details"><i class="fa-solid fa-file-lines fa-lg"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>