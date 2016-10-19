
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ticket
        <small>Assign Step 1</small>
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
              <h3 class="box-title">Assign Ticket #<?php echo $ticket->tid; ?></h3> &nbsp;
          </div>

          <!-- form start -->

            <form class="form-horizontal"  action="<?= site_url('ticket/assign_step2') ?>" method="post">
              <div class="box-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="col-md-2 control-label">Subject</label>
                              <div class="col-md-9">
                                  <input class="form-control" placeholder="Subject" value="<?php echo $ticket->subject; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-2 control-label">Details</label>
                              <div class="col-md-9">
                                  <textarea class="form-control" rows="13" placeholder="Details ..."><?php echo $ticket->details; ?></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <input type="hidden" name="ticket_id" value="<?php echo $ticket->tid; ?>">
                          <div class="form-group">
                              <label class="col-md-3 control-label">Urgently</label>
                              <div class="col-md-8">
                              <div class="radio">
                                <?php
                                $ug = $ticket->urgently;
                                ?>
                                  <label>
                                      <input type="radio" name="urgently" class="minimal" <?php if($ug == "normal") echo " checked"; ?>>
                                      Normal
                                  </label>
                                  <label>
                                      <input type="radio" name="urgently" class="minimal"<?php if($ug == "urgent") echo " checked"; ?>>
                                      Urgent
                                  </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Priority</label>
                              <div class="col-md-8">
                              <div class="radio">
                                <?php $pri = $ticket->priority; ?>
                                  <label>
                                      <input type="radio" name="priority" class="minimal" <?php if($pri == "normal") echo " checked"; ?>>
                                      Normal
                                  </label>
                                  <label>
                                      <input type="radio" name="priority" class="minimal" <?php if($pri == "medium") echo " checked"; ?>>
                                      Medium
                                  </label>
                                  <label>
                                      <input type="radio" name="priority" class="minimal" <?php if($pri == "high") echo " checked"; ?>>
                                      High
                                  </label>
                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                              <label class="col-md-3 control-label">Project:</label>
                              <div class="col-md-8">

                                    <select class="form-control select2" data-placeholder="Select Assigned To" style="width: 100%;">
                                        <?php foreach ($projects as $p) {
                                            # code...
                                            echo "<option value=\".$p->id.\">".$p->project_name."</option>";
                                        } ?>
                                    </select>

                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Created by:</label>
                              <div class="col-md-8">
                                  <input class="form-control" placeholder=" asdf asdfasdfa" readonly="" value="<?php
                                  echo $ticket->fname." ".$ticket->lname; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Created D/T:</label>
                              <div class="col-md-8">
                                  <input type="text" class="form-control pull-right datepicker" readonly="" value="<?php echo $ticket->create_datetime; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Assign to:</label>
                              <div class="col-md-8">
                                  <select name="assign_to" class="form-control select2" data-placeholder="Select Assigned To" style="width: 100%;">
                                      <?php foreach($staffs as $s) {
                                        echo "<option value=\"".$s->id."\">".$s->fname." ".$s->lname."</option>";
                                      } ?>
                                  </select>
                              </div>
                          </div>

                      </div>
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
