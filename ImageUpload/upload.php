<html>
<head><title>File Upload To Database</title></head>

<body>
<h3>Please Choose a File and click Submit</h3>

  <form enctype="multipart/form-data" action="image.php" method="POST">

  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
  Name : <input type="text" name="name" size="25" length="25" value="">

  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
   File: <input name="userfile" type="file" size="25"/>

  <input type="submit" value="Upload" />
</form>

</body>
</html>
<!-- https://sumedh.info/articles/store-upload-image-postgres-php-2.html