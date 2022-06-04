<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserMove</title>
    <link href="/Public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="center-block">
        <h1 class="text-center main-text">UserMove</h1>
    </div>
    <a href="index.php?action=create" class="btn btn-success button-new">New user</a>
<!--    --><?php //var_dump($this->table); ?>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->table as $key) :?>
            <tr>
                <td class="text-center"><?php echo $key->name; ?></td>
                <td class="text-center"><?php echo $key->email; ?></td>
                <td class="text-center"><?php echo $key->gender; ?></td>
                <td class="text-center"><?php echo $key->status; ?></td>
                <td class="text-center">
                    <a href="index.php?action=delete&id=<?php echo $key->id; ?>" class="btn red btn-danger"
                       onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    <a href="index.php?action=edit&id=<?php echo $key->id; ?>" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>