
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Checkout - Gameworld</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="MainPage">
    <?php include "header.php";
          include "connectToDatabase.php";?>
    <table id="Checkout">
      <thead>
        <tr>
          <th>Image</th>
          <th>Game</th>
          <th>Console</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
        $i = 0;
        foreach ($items[0] as $value) {
          if ($i == 0) {
            echo "<td><img src='Media/Images/Games/" . $value . ".png' alt='" . $value . "'></img></td>";
          }
          else {
            echo "<td>" . $value . "</td>";
          }
          $i++;
        }
         ?>
       </tr>
        <tr>
          <?php
          $i = 0;
          foreach ($items[1] as $value) {
            if ($i == 0) {
              echo "<td><img src='Media/Images/Games/" . $value . ".png' alt='" . $value . "'></img></td>";
            }
            else {
              echo "<td>" . $value . "</td>";
            }
            $i++;
          }
           ?>
        </tr>
        <tr>
          <?php
          $i = 0;
          foreach ($items[5] as $value) {
            if ($i == 0) {
              echo "<td><img src='Media/Images/Games/" . $value . ".png' alt='" . $value . "'></img></td>";
            }
            else {
              echo "<td>" . $value . "</td>";
            }
            $i++;
          }
           ?>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td style="text-align: center;">Total:</td>
          <td colspan="3"><?php
          $total = $items[0]["price"] + $items[1]["price"] + $items[5]["price"];
          //echo the total
          echo "€" . $total . ",-";
           ?></td>
        </tr>
      </tfoot>
    </table>
    <a id="checkoutBttn" onclick="alertUser();">Checkout</a>
    <?php include "footer.php"; ?>
  </div>
</body>
</html>

<script type="text/javascript">
  function alertUser() {
    alert('Sorry, But I can\'t actually sell these items :/');
  }
</script>
