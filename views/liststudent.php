<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<section>
    <div class="container">
        <h1 class="text-center">List Student</h1>
        <p><a href="?module=student&action=create">Thêm sinh viên</a> </p>
        <div class="row">
            <div class="col-6">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>mark</th>
                        <th>gender</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $item):?>
                        <tr>
                            <td><?php echo $item->id; ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td><?php echo $item->mark; ?></td>
                            <td><?php echo $item->gender; ?></td>
                            <td>
                                <a href="?module=student&action=edit&id=<?php echo $item->id;?>">Edit</a>
                            <!--    <a onclick="return confirm('Bạn muốn xóa <?php //echo $item["name"]; ?>')" href="deletestudent.php?id=<?php //echo $item["id"];?>">delete</a> -->
                                <form action="deletestudent.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $item->id;?>">
                                    <button onclick="return confirm('Bạn muốn xóa <?php echo $item->name; ?>')"
                                            type="submit">delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>
