<?php
include "connectToDatabase.php";

$console = $_GET["Console"];

foreach ($items as $value) {
  //Switch Games
  if ($console == "Switch" || $console == "all") {
    if ($value['console'] == "Switch") {
      echo "<div class='StoreItem'>
        <img src='Media/Images/Games/" . $value['game_id'] . ".png' alt='" . $value['game_id'] . "'>
        <div class='PriceTag'> 	€" . $value['price'] . ",-</div>
        <div class='StoreItemInformation'>
          <h2>" . $value['name'] . "</h2>
          <a href='checkout.php'><button class='buyBttn' type='button' name='Buy'>Buy</button></a>
        <div style='clear: both;'></div>
      </div>
      <div class='ConsoleName' style='background-color: rgb(197, 0, 0);'>" . $value['console'] . "</div>
      </div>";
    }
  }
  //Playstation Games
  if ($console == "Playstation" || $console == "all") {
    if ($value['console'] == "Playstation") {
      echo "<div class='StoreItem'>
        <img src='Media/Images/Games/" . $value['game_id'] . ".png' alt='" . $value['game_id'] . "'>
        <div class='PriceTag'>€" . $value['price'] . ",-</div>
        <div class='StoreItemInformation'>
          <h2>" . $value['name'] . "</h2>
          <a href='checkout.php'><button class='buyBttn' type='button' name='Buy'>Buy</button></a>
        <div style='clear: both;'></div>
      </div>
      <div class='ConsoleName' style='background-color: rgb(10, 10, 199);'>" . $value['console'] . "</div>
      </div>";
    }
  }
  //Xbox Games
  if ($console == "Xbox" || $console == "all") {
    if ($value['console'] == "Xbox") {
      echo "<div class='StoreItem'>
        <img src='Media/Images/Games/" . $value['game_id'] . ".png' alt='" . $value['game_id'] . "'>
        <div class='PriceTag'>€" . $value['price'] . ",-</div>
        <div class='StoreItemInformation'>
          <h2>" . $value['name'] . "</h2>
          <a href='checkout.php'><button class='buyBttn' type='button' name='Buy'>Buy</button></a>
        <div style='clear: both;'></div>
      </div>
      <div class='ConsoleName' style='background-color: rgb(16, 95, 16);'>" . $value['console'] . "</div>
      </div>";
    }
  }
}



 ?>
