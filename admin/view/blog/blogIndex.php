<!-- Content Header (Page header) -->
<?php include_once("api/blog/read.php");
  include_once("config/function.php");
 ?> 
<section class="content-header">
  <h1>
    Blog
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>blog</a></li>
  </ol>
</section>

<!-- Main content -->

<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data blog</h3>
    </div>
    <div class="box-body">
      <a href="<?=$baseUrl.'/blog/form'?>" class="btn btn-success">Tambah</a>
      <div class="table-responsive" style="margin: 20px 0">
        <table id="table-datatable" class="table table-stripped">
          <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Content</th>
                <th>Create at</th>
                <th>Create by</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $key => $value): ?>
                <tr>
                  <td><?=$key+1?></td>
                  <td><?=$value->judul?></td>
                  <td><?=limitString(150,$value->content)?></td>
                  <td><?=date("m l Y - H:i",strtotime($value->dateCreate))?></td>
                  <td><?=$value->idUser?></td>
                  <td>
                    <a href="<?="$baseUrl/blog/form?idNews=$value->idNews"?>" class="fa fa-edit text-warning"></a>
                    <button data-id="<?=$value->idNews?>" href="#" class="btn-transparent fa fa-times text-danger delete"></button>
                    <a href="<?="$baseUrl/blog/viewBlog?idNews=$value->idNews"?>" class="fa fa-search text-primary"></a>
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
        location.href="<?=$baseHref?>api/blog/delete.php?idNews="+id;
      }
    })
  })
</script>
<!-- /.content -->