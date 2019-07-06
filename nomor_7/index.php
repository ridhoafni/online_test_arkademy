<!doctype html>
<html lang="en">
<head>
<title>Contoh CRUD Data</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="Aguzrybudy" name="author"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
	<h2>Contoh CRUD PHP MYSQL MODAL</h2>
	<p>Test Koding</p>
	<p><a href="data_nama/data_nama.php" class="btn btn-success">Data Nama</a></p>
	<p><a href="data_hobi/data_hobi.php" class="btn btn-success">Data Hobi</a></p>
	<p><a href="data_kategori/data_kategori.php" class="btn btn-success">Data Kategori</a></p> 
	<br><br>
	<h3>Biodata Singkat</h3>
      

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No.</th>
      <th>Nama</th>
      <th>Hoby</th>
      <th>Categori</th>
    </thead>
<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $modal=mysqli_query($koneksi,"select nama.name,kategori.name_category,hobi.name_hobby from nama inner join hobi on nama.id_hobby=hobi.id inner join kategori on hobi.id_category=kategori.id order by nama.id ASC");
  while($r=mysqli_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['name']; ?></td>
      <td><?php echo  $r['name_hobby']; ?></td>
      <td><?php echo  $r['name_category']; ?></td>
  </tr>
 

<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data </h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="Name">Nama</label>
                  <input type="text" name="name"  class="form-control" placeholder="Name" required/>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="Hobby">Hobby</label>
                   <textarea name="hobby"  class="form-control" placeholder="Hobby" required/></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="Kategori">Kategori</label>
                  <input type="text" name="kategori"  class="form-control" plcaceholder="Kategori" required/>
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

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Yakin Ingin Hapus ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>

  



