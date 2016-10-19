
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ticket
        <small>Assign Step 2</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ticket</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Due of this Ticket #<?php echo $ticket_id; ?></h3> &nbsp;
          </div>

          <!-- form start -->
          <form class="form-horizontal" action="ticket/assign_step3" method="post">
              <input type="hidden" name="ticket_id" value="<?php echo $ticket_id; ?>">

              <div class="box-body">
                  <div class="row">

                         <div class="col-md-8">
                             <div id="datetimepicker12" name="due_dt"></div>
                         </div>

                         <script type="text/javascript">
                             $(function () {
                                 $('#datetimepicker12').datetimepicker({
                                     inline: true,
                                     sideBySide: true
                                 });
                             });
                         </script>

                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="row">
                      <div class="col-md-6">

                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <div class="col-md-11">
                                  <button type="submit" class="btn btn-primary pull-right btn-flat">Next Step</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.box-footer -->
          </form>





          </div>
          <!-- /.box -->
        </div>
      </div>



      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
