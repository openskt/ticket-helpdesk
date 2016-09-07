
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ticket
        <small>Assign test</small>
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
              <h3 class="box-title">Assign Ticket</h3> &nbsp;
          </div>

              <form>
               <div class="form-group">
                 <label for="email">Email address:</label>
                 <input type="email" class="form-control" id="email">
               </div>
               <div class="form-group">
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control" id="pwd">
               </div>
               <div class="checkbox">
                 <label><input type="checkbox"> Remember me</label>
               </div>
               <button type="submit" class="btn btn-default">Submit</button>
             </form>




            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
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
                  <th>Source</th>
                  <th>Create Datetime</th>
                  <th>Start Datetime</th>
                  <th>End Datetime</th>
                  <th>ProjectID</th>
                  <th>ReferTo</th>
                  <th>Assigned to</th>
                  <th>Active?</th>
                  <th>Hold?</th>
                  <th>Failed?</th>
                </tr>
                <?php

                foreach($records as $r) {
                    echo "<tr>";
                    echo "<td>".$r->id."</td>";
                    echo "<td>".$r->status."</td>";
                    echo "<td>".$r->urgently."</td>";
                    echo "<td>".$r->priority."</td>";
                    echo "<td>".$r->create_by."</td>";
                    echo "<td>".$r->subject."</td>";
                    echo "<td>".$r->details."</td>";
                    echo "<td>".$r->due_date."</td>";
                    echo "<td>".$r->end_user."</td>";
                    echo "<td>".$r->source."</td>";
                    echo "<td>".$r->create_datetime."</td>";
                    echo "<td>".$r->start_datetime."</td>";
                    echo "<td>".$r->end_datetime."</td>";
                    echo "<td>".$r->project_id."</td>";
                    echo "<td>".$r->refer_to."</td>";
                    echo "<td>";
                    if(isset($r->assign_to)){
                        echo $r->assign_to;
                    }else{
                        echo "<a href='".base_url()."ticket/assign/".$r->id."' class='btn btn-success' role='button'>Assign</a>";
                    }
                    echo "</td>";
                    echo "<td>".$r->is_active."</td>";
                    echo "<td>".$r->is_hold."</td>";
                    echo "<td>".$r->is_failed."</td>";
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
