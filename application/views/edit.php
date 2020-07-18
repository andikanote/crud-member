
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            form edit
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php foreach ($data->result() as $row) {
                                        # code...
                                    } ?>
                                    <form role="form" method="post" action="master/proses_edit" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>"> 
                                            <input type="hidden" name="id_input" class="form-control" value="<?php echo $row->id_input ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="text" name="email" class="form-control" value="<?php echo $row->email ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>no</label>
                                            <input type="text" name="no" class="form-control" value="<?php echo $row->no ?>"> 
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="userfile">
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                         -->
                                        <button type="submit" class="btn btn-success">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                        </div>
 
