<!-- Content Header (Page header) -->
<?php include_once("api/analisa/read.php");?> 
<section class="content-header">
  <h1>
    User
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>analisa</a></li>
  </ol>
</section>

<!-- Main content -->

<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data User</h3>
    </div>
    <div class="box-body">
      <?php if (isset($_SESSION['flash'])): ?>
         <div class="alert alert-danger alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <h4><i class="icon fa fa-ban"></i>Kesalahan</h4>
           <?php echo $_SESSION['flash']['msg'] ?>
         </div>
       <?php endif ?>
      <a href="<?=$baseUrl.'/analisa/form'?>" class="btn btn-success">Tambah</a>
      <div class="table-responsive" style="margin: 20px 0">
        <table id="table-datatable" class="table table-stripped">
          <thead>
              <tr>
                <th>No</th>
                <th>Tanaman</th>
                <th>Jenis Tanah</th>
                <th>PH</th>
                <th>Suhu</th>
                <th>Kedalaman</th>
                <th>Kelas</th>
                <th></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $key => $value): ?>
                <tr>
                  <td><?=$key+1?></td>
                  <td><?=$value->tanaman?></td>
                  <td><?=$value->jenis?></td>
                  <td><?=$value->ph?></td>
                  <td><?=$value->suhu?></td>
                  <td><?=$value->kedalaman?></td>
                  <td><?=$value->kelas?></td>
                  <td>
                    <a href="<?="$baseUrl/analisa/form?idAnalisa=$value->idAnalisa"?>" class="fa fa-edit text-warning"></a>
                    <button data-id="<?=$value->idAnalisa?>" href="#" class="btn-transparent fa fa-times text-danger delete"></button>
                  </td>
                </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<script>
  $(".delete").on("click",function (argument) {
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        var id = $(this).attr("data-id");
        location.href="<?=$baseHref?>api/analisa/delete.php?idAnalisa="+id;
      }
    })
  })
</script>
<!-- /.content -->