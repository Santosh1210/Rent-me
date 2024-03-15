<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Animation</title>
<style>
body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f0f0f0;
}

.car {
  width: 200px;
  height: 100px;
  background-color: #333;
  position: relative;
  border-radius: 10px;
}

.body {
  width: 160px;
  height: 80px;
  background-color: #ffce38;
  position: absolute;
  top: 10px;
  left: 20px;
}

.wheel {
  width: 40px;
  height: 40px;
  background-color: #333;
  position: absolute;
  bottom: 0;
  border-radius: 50%;
}

.front-wheel {
  left: 20px;
}

.back-wheel {
  right: 20px;
}
</style>
</head>
<body>

<div class="car">
  <div class="body"></div>
  <div class="wheel front-wheel"></div>
  <div class="wheel back-wheel"></div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const car = document.querySelector('.car');
  let carPosition = 0;

  function moveCar() {
    carPosition += 1;
    car.style.transform = `translateX(${carPosition}px)`;

    // Repeat animation
    if (carPosition > window.innerWidth) {
      carPosition = -200;
    }

    requestAnimationFrame(moveCar);
  }

  moveCar();
});
</script>

</body>
</html>
