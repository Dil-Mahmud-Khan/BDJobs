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
<body class="flex justify-center">
<form action="insert.php" method="post">
    <form >
    <div >
        <tr>
            <td><label for="book" class="border-red-400">Book Name:</label></td>
            <td><input type="text" name="bookname" class="border" id="bookname"></td>
            <br>
            <tr>
                <td><label for="pubName">Publisher Name:</label></td>
            </tr>
            <tr>
            <td><input type="text" name="publishername" class="border" id="PublisherName"></td>
            </tr>
            <br>
            <tr>
                <td><label for="pubAge">Publisher Age:</label></td>
                <td><input type="number" name="publisherage" class="border" id="publisherAge"></td>
            </tr>
            <br>
            <tr>
                <td><label for="pageNo">Page No:</label></td>
                <td><input type="number" name="pageno" class="border" id="PageNo"></td>
            </tr>
            <br>
            <tr>
                <td><label for="PubDate">Publish Date:</label></td>
                <td><input name="publishdate" id="publishDate" name="publishdate" class="border" type="date"></td>
            </tr>
            <br>
            <tr>
                <td ><label for="BookType">Book Type:</label></td>
                <td><input type="checkbox" name="booktype" value="Sci-fi">Sci-Fi</td>
                <td><input type="checkbox" name="booktype" value="Drama">Drama</td>
                <td><input type="checkbox" name="booktype" value="Novel">Novel</td>
            </tr>
        </td>
        <br>
        <tr>
            <td> <input id="savebtn" class="center ml-16 mt-2 bg-slate-300 p-2 rounded center" type="submit" value="Save"></td>
        </tr>
    </div>
    </form>
    
</body>
</html>