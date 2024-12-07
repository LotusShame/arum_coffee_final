
<?php
     if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

  $tableid = $_GET['id'];
  $tables = New Tables();
  $stables = $tables->single_table($tableid);

?>
 <form class="form-horizontal span6" action="controller.php?action=reserve" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Reservasi Meja</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                   
                  <div class="form-group">
                    <div class="col-md-8">
                      <label style="font-size: 20px;" class="col-md-4 control-label" for="TABLENO">No. Meja:</label>

                      <div class="col-md-2">
                       <input id="TABLEID" name="TABLEID"   type="HIDDEN" value="<?php echo $stables->TABLEID; ?>">
                         <input style="font-size: 40px; text-align: center;" class="form-control input-lg" id="TABLENO" name="TABLENO" placeholder="Nomor Meja" type="text" value="<?php echo $stables->TABLENO; ?>" READONLY>
                      </div>
                    </div>
                  </div> 

                   <div class="form-group">
                    <div class="col-md-8">
                      <label style="font-size: 20px;" class="col-md-4 control-label" for="CUSTOMER">Nama Pelanggan:</label>

                      <div class="col-md-8"> 
                         <input class="form-control input-lg" id="CUSTOMER" name="CUSTOMER" placeholder="Nama Lengkap" type="text" value="" required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label style="font-size: 20px;" class="col-md-4 control-label" for="CUSTOMER">Waktu:</label>

                      <div class="col-md-8"> 
                            <div class="input-group bootstrap-timepicker timepicker">
                            <input id="RESERVEDTIME" name="RESERVEDTIME"  type="text" class="form-control input-lg timepicker1">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                             </div> 

                      </div>
                    </div>
                  </div> 
 
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="idno"></label>
                      <div class="col-md-8">
                         <button style="width: 100%; font-size: 20px;" class="btn btn-primary btn-s" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Simpan</button>
                      <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                     
                     </div>
                    </div>
                  </div>  
        </form>
      
 