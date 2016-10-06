
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ticket
        <small>Listing</small>
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
            <div class="box-header">
              <h3 class="box-title">Active Ticket</h3> &nbsp;


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">New Ticket</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">New Ticket</h4>
        </div>
        <form action="/ticket/add_new" method="post">
        <div class="modal-body">

            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Subject:</label>
              <input type="text" class="form-control" id="ticet_subject" name="ticket_subject" required>
            </div>
            <div class="form-group">
              <label for="message-text" class="form-control-label">Details:</label>
              <textarea class="form-control" id="message-text" name="ticket_details" required></textarea>
            </div>

            <div class="form-group">
                <input type="checkbox" name="urgently"> Urgent
            </div>
            <div class="form-group">
              <label for="message-text" class="form-control-label">Attachment(s):</label>
              <input id="input-1" type="file" class="file" name="atth_file">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send request</button>
        </div>
        </form>
      </div>
    </div>
  </div>


              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <?php
              /*
              echo "</pre>";
              echo var_dump($records);
              exit();
              */
              ?>
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Status</th>
                  <th>Urgently</th>
                  <th>Priority</th>
                  <th>Create by</th>
                  <th>Subject</th>
                  <th>Details</th>
                  <th>Due Date</th>
                  <th>End User</th>
                  <th>Assigned To</th>
                  <th>Create Datetime</th>
                  <th>Start Datetime</th>
                  <th>End Datetime</th>
                  <th>Assigned to</th>
                </tr>
                <?php

                foreach($records as $r) {
                    echo "<tr>";
                    echo "<td>".$r->id."</td>";
                    echo "<td>".$r->status."</td>";
                    echo "<td>".$r->urgently."</td>";
                    echo "<td>".$r->priority."</td>";
                    //echo "<td>".$r->create_by."</td>";
                    echo "<td>".$r->bfname." ".$r->blname."</td>";
                    echo "<td>".$r->subject."</td>";
                    echo "<td>".$r->details."</td>";
                    echo "<td>".$r->due_date."</td>";
                    echo "<td>".$r->end_user."</td>";
                    echo "<td>".$r->cfname." ".$r->clname."</td>";
                    echo "<td>".$r->create_datetime."</td>";
                    echo "<td>".$r->start_datetime."</td>";
                    echo "<td>".$r->end_datetime."</td>";
                    echo "<td>";
                    if(isset($r->assign_to)){
                        echo $r->assign_to;
                    }else{
                        echo "<a href='".base_url()."ticket/assign/".$r->id."' class='btn btn-success' role='button'>Assign</a>";
                    }
                    echo "</td>";
                    echo "</tr>";
                }

                 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>



      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
