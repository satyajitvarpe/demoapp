<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <p>Hello , {{Session::get('name')}}</p><br />
    <h3>role, {{Session::get('userrole')}}</h3>
    <a href="login">Logout</a><br />

</body>

</html>