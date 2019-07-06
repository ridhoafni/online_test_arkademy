<?php
    include "../koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"SELECT * FROM kategori WHERE id='$id'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Name">Nama</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
                    <input type="text" name="name_category"  class="form-control" value="<?php echo $r['name']; ?>"/>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Simpan
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Batal
                  </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>