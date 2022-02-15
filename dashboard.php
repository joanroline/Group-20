<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b><?php echo $actions->assignments(); ?></b>
                <p class="text-muted">
                    Assignments</p>
            </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $actions->pupils(1); ?></b>
                <p class="text-muted">
                    Active Students</p>
            </a>
          </a><a href="teacherdashboard.php" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $actions->pupils(0); ?></b>
              <p class="text-muted">
                  Deactivated Students</p>
            </a>
        </div>
    </div>
</div>
<!--/.content-->
