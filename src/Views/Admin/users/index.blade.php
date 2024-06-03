<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách User</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Danh sách User</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['updated_at'] ?></td>
                    <td>

                        <form action="{{ url('admin/users/' . $user['id'] .  '/delete') }}" method="POST">
                            <button class="btn btn-danger"
                                onclick="return confirm('Chắc chắn xóa không?')" 
                                type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>