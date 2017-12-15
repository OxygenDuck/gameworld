<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Store</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="MainPage">
    <?php include "header.php";?>
    <form action="store.php" method="get">
      <select name="Console" onchange="this.form.submit()">
        <option hidden>Console</option>
        <option value="all">All</option>
        <option value="Switch">Switch</option>
        <option value="Playstation">Playstation</option>
        <option value="Xbox">Xbox</option>
      </select>
    </form>

    <?php include "storeItems.php"; ?>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>
