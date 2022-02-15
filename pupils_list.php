<div class="module">
  <div class="module-head">
      <h3>Pupils</h3>
    </div>
    <div class="module-body table">
      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
        <thead>
          <tr>
            <th>User Code</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($actions->get_pupils() as $pupil): ?>
            <tr>
              <td><?php echo $pupil['user_code'] ?></td>
              <td><?php echo $pupil['first_name'] ?></td>
              <td><?php echo $pupil['last_name'] ?></td>
              <td><?php echo $pupil['contact'] ?></td>
              <td>
                <?php if($pupil['status'] == 1): ?>
                          <a href="controller.php?pupil=<?php echo $pupil['user_code'] ?>">Deactivate</a>
                <?php else: ?>
                          Has been deactivated
                <?php endif?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>User Code</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div><!--/.module-->

<br />

</div><!--/.content-->
