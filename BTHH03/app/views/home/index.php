<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Danh sách bệnh nhân</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/app/views/home/doctor.php">Danh sách bác sĩ</a>
  
</ul>
        <h3>Quản lý bệnh nhân</h3>
        <a href="" class="btn btn-success">Thêm mới bệnh nhân</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã bệnh nhân</th>
      <th scope="col">Tên bệnh nhân</th>
      <th scope="col">Ngày khám</th>
      <th scope="col">Triệu chứng</th>
      <th scope="col">Mã bác sĩ</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xoá</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($patients as $patient){ ?>
        <tr>
      <th scope="row"><?= $patient->getID(); ?></th>
      <td><?= $patient->gettenBenhNhan(); ?></td>
      <td><?= $patient->getngayKham(); ?></td>
      <td><?= $patient->gettrieuChung(); ?></td>
      <td><?= $patient->getidBacSi(); ?></td>
      <td><a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
      <td><a href="" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>