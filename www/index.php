<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

  <title>Document</title>
  <style>
    html,
    body {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100%;
      display: table;
      font-weight: 100;
      font-family: 'Karla';
    }
  </style>
</head>

<body>
  <?php
  require_once("php/crud/insert.php");

  ?>
  <div class="container">
    <form action="php/crud/insert.php" method="POST">
      <input type="text" name="Title">
      <input type="submit" value="新增">
    </form>

    <ul class="list-group list-group-flush">
      <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
        Cras justo odio
        <a class="btn btn-danger btn-sm" href="php/crud/delete.php?id=123" role="button">刪除</a>
      </li> -->
      <?php
      //get booklist
      require_once($_SERVER["DOCUMENT_ROOT"] . "/php/crud/get.php");
      $result = getBooklist();
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          print("<li class='list-group-item d-flex justify-content-between align-items-center'>" . $row['Title'] . "<a class='btn btn-danger btn-sm' href='php/crud/delete.php?id=" . $row["Id"] . "' role='button'>刪除</a></li>");
        }
      } else {
        echo "0 results";
      }
      ?>


    </ul>
    <!-- 

    <div class="content">
      <div class="title" title="Laragon">Laragon</div>

      <div class="info"><br />
        <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
        PHP version: <?php print phpversion(); ?> <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
        Document Root: <?php print($_SERVER['DOCUMENT_ROOT']); ?><br />
      </div>
      <div class="opt">
        <div><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
      </div>
    </div> -->

  </div>



</body>

</html>