<!-- Content Header (Page header) -->
<?php include_once("api/user/read.php"); ?> 
<section class="content-header">
  <h1>
    User
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>user</a></li>
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
      <a href="<?=$baseUrl.'/user/form'?>" class="btn btn-success">Tambah</a>
      <div class="table-responsive" style="margin: 20px 0">
        <table id="table-datatable" class="table table-stripped">
          <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Alamat</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $key => $value): ?>
                <tr>
                  <td><?=$key+1?></td>
                  <td><?=$value->nama?></td>
                  <td><?=$value->username?></td>
                  <td><?=$value->telp?></td>
                  <td><?=$value->alamat?></td>
                  <td>
                    <a href="<?="$baseUrl/user/form?idUser=$value->idUser"?>" class="fa fa-edit text-warning"></a>
                    <button data-id="<?=$value->idUser?>" href="#" class="btn-transparent fa fa-times text-danger delete"></button>
                    <a href="<?="$baseUrl/user/viewUser?idUser=$value->idUser"?>" class="fa fa-search text-primary"></a>
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
        location.href="<?=$baseHref?>api/user/delete.php?idUser="+id;
      }
    })
  })
</script>
<!-- /.content -->