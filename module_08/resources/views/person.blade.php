<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is person input field</title>
</head>
<body>
    <h1>Create a person form</h1>
    <form action="/persons" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" placeholder="Abdur Rahim"><br/>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="arahimcse@gmail.com"><br/>

        <input type="file" name="image"><br/>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
