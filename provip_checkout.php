<!DOCTYPE html>
<html>
<head>
<style>
.container {

  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
  color: white;
}
</style>
</head>
<body>


<div class="container" style="width:100%">
  <img src="images/provip.jpg" alt="Snow" style="width:100%">
  <button class="btn" onclick="window.location.href='my-booking.php'">Redeem </button>
</div>

</body>
</html>