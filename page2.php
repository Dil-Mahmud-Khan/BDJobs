<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>
<body class="flex justify-center pt-5">
    <form action="">
        <div>
            <tr>
                <td><label for="keyword">Keyword:</label></td>
                <td> <input type="text" name="keyword" class="border" id="border"></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <input type="text" class="border" name="age" id="border">
            </tr>
            <br>
            <tr>
                <td ><label for="BookType">Book Type:</label></td>
                <td><input type="checkbox">Sci-Fi</td>
                <td><input type="checkbox">Drama</td>
                <td><input type="checkbox">Novel</td>
            </tr>
            <br>
            <tr>
                <td><Button class="center ml-24 mt-2 bg-slate-300 p-2 rounded center">Search</Button></td>
            </tr>
        </div>
    </form>

   
</body>
</html>