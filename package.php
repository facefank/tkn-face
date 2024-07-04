<?php include("test.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>
    <div class="container">
        <form action="test.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <input type="text" name="description" placeholder="รายละเอียด">
            <button type="submit">Upload</button>
        </form>
        
        
            




    
        
        
    </div>
</body>

</html>