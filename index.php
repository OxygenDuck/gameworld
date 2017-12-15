<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Gameworld</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="MainPage">
    <?php include 'header.php'; ?>
    <div style="width: 100%">
      <img id="HomeBanner" src="Media/Images/SuperMarioOdysseyWallpaper.png" alt="Wallpaper">
    </div>
    <h2 id="bannerText">Games all the way</h2>
    <div id="HomeConsoleImages">
      <div id="PlaystationHome" class="HomeConsoleImages">
        <a href="store.php?Console=Playstation"><img src="Media/Images/Logos/PlayStationLogo.png" alt="Playstation"></a>
      </div>
      <div id="SwitchHome" class="HomeConsoleImages">
        <a href="store.php?Console=Switch"><img src="Media/Images/Logos/NintendoSwitchLogo.png" alt="Switch"></a>
      </div>
      <div id="XboxHome" class="HomeConsoleImages">
        <a href="store.php?Console=Xbox"><img src="Media/Images/Logos/XboxLogo.png" alt="Xbox"></a>
      </div>
      <div style="clear: both"></div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>
