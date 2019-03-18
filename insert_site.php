<html>

<head>
<title> Search engine Usig PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> -->
    
</script>
</head>
<style>
gray{
background-color: #ccc;
}
</style>
<body>

    <div class = "jumbotron gray">
        <form action = "insert.php" method="post" enctype="multipart/form-data">
            <table class="table">
  <thead>
    <tr>
      <td><h2><b>Inserting new website</b></h2></td>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Site title</th>
      <td><input type="text" name="site_title"></td>
     
    </tr>
    <tr>
      <th scope="row">Site Link</th>
      <td><input type="text" name="site_link"></td>
     
    </tr>
    <tr>
      <th scope="row">Site Keywords</th>
      <td><input type="text" name="site_keywords" ></td>
     
    </tr>
    <tr>
      <th scope="row">Site Description</th>
      <td><textarea rows=" 6" name="site_desc" cols="30"></textarea></td>
     
    </tr>
    <tr>
      <th scope="row">Site image</th>
      <td><input type="file" name="site_image"></td>
     
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" name="submit" value="Add site now"/></td>
     
    </tr>
    
    
  </tbody>
</table>
</form>
</div>








<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> -->
    <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script> -->
        <!-- <script src="js/bootstrap.js"></script> -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        </script>
        </body>
</html>
