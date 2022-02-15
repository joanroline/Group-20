<div class="module">
    <div class="module-body table">
      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
        <thead>
          <tr>
            <th>Pupil</th>
            <th>Score(%)</th>
            <th>Assignment</th>
            <th>Comment</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($actions->submitted_assignment() as $r): ?>
            <tr>
              <td><?php echo $r['first_name']; ?> <?php echo $r['last_name']; ?></td>
              <td><?php echo $r['score']; ?></td>
              <td><?php echo $r['assignment_number'] ?></td>
              <td><?php echo (strlen($r['comment']) > 0) ?  $r['comment'] : '<a href="comment.php?id='.$r['id'].'">Add</a>'; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Pupil</th>
            <th>Score</th>
            <th>Assignment</th>
            <th>Comment</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div><!--/.module-->

<br />

</div><!--/.content-->
