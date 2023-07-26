<div class="container-fluid">
  <div class="row">
    {{sidebar}} 
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
      <div class="row">
        <div class="col-12 title-head text-uppercase">
          <h6>drivers</h6>
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-12">
              <div class="mt-3">
                <a href="new_driver" class="text-uppercase sidebar-btnContent">New</a>
              </div>
            </div>
            <div class="col-12">
              <div class="table-responsive pt-4">
                <table class="table-bordered table-hover" id="systemTable">
                  <thead class="thead-custom">
                    <tr class="text-uppercase">
                      <th scope="col" class="text-center">#</th>
                      <th scope="col" class="text-center">Name</th>
                      <th scope="col" class="text-center">Birthdate</th>
                      <th scope="col" class="text-center">Address</th>
                      <th scope="col" class="text-center">Phone No.</th>
                      <th scope="col" class="text-center">License No.</th>
                      <th scope="col">License Validity</th>
                      <!-- <th scope="col">Actions</th> -->
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php foreach ($drivers as $driver): ?>
                      <tr>
                        <td><?php echo $index++; ?></td>
                        <td><?php echo $driver['name']; ?></td>
                        <td><?php echo $driver['birthdate']; ?></td>
                        <td><?php echo $driver['address']; ?></td>
                        <td><?php echo $driver['phone_no']; ?></td>
                        <td><?php echo $driver['license_no']; ?></td>
                        <td><?php echo $driver['license_validity']; ?></td>
                        <!-- <td>Actions</td> -->
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
  </div>
</div>