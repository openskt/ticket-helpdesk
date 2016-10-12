
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
              <h3 class="box-title">Assign Ticket #<?php echo $ticket_id; ?></h3> &nbsp;
          </div>

          <!-- form start -->
          <form class="form-horizontal" action="ticket/assign_step3" method="post">



              <div class="box-body">
                  <div class="row">

                      <!-- Date and time range -->
                                    <div class="form-group">
                                      <label>Date and time range:</label>

                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="reservationtime">
                                      </div>
                                      <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

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
