<div class="content">

<div class="module">
  <div class="module-head">
      <h3>Assignments</h3>
    </div>
    <div class="module-body table">
      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>List</th>
            <th>Date</th>
            <th>Start time</th>
            <th>End time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($actions->get_assignments() as $assignment): ?>
          <tr>
            <td><?php echo $assignment['assignment_number']; ?></td>
            <td><?php echo strtoupper($assignment['assignment_list']); ?></td>
            <td><?php echo $assignment['assignment_date']; ?></td>
            <td><?php echo $assignment['start_time']; ?></td>
            <td><?php echo $assignment['end_time']; ?></td>
            <td><?php echo ($assignment['status'] == 1) ?  'Active': 'Expired'; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>List</th>
            <th>Date</th>
            <th>Start time</th>
            <th>End time</th>
            <th>Status</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div><!--/.module-->

<br />

</div><!--/.content-->
