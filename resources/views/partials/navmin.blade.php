<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4c4c8c8acb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="logo">
            <a href="/home">
                <img src="{{ "$logo" }}" width="40px">
            </a>
          <h5>Agung Kalimosodo</h5>
        </div>
        <div class="link">
          <a href="/a/Seatings">Seating</a>
          <a href="/a/Tabels">Tabels</a>
          <a href="/a/Cabinets">Cabinets</a>
          <a href="/a/Bedrooms">Bedroom</a>
          <a href="/a/Mirrors">Mirrors</a>
          <a href="/a/Lightings">Lighting</a>
          <a href="/a/Rugs">Rugs</a>
          <a href="/a/Swatches">Swatches</a>
        </div>
      </nav>
      <div class="container mt-4">
        <h1>@yield('container')</h1>
    </div>
</body>
</html>


