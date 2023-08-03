<?php
    include "adminHeader.php";
?>

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./Order1 Admin.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />

  <div class="orders1-admin">
    <div class="mdigraph-box"></div>
    <div class="orders1-admin-child"></div>
    <div class="orders1-admin-item"></div>
    <b class="list-of-orders">List of Orders</b>
    <b class="manage-orders">Manage Orders</b>
    <div class="rectangle-parent">
      <div class="frame-child"></div>
      <div class="frame-item"></div>
      <b class="complete" id="completeText">Complete</b>
      <img class="frame-inner" alt="" src="./public/line-8.svg" />

      <b class="preparing" id="preparingText">Preparing</b>
      <b class="new">New</b>
      <b class="delivery" id="deliveryText">Delivery</b>
      <img class="line-icon" alt="" src="./public/line-6.svg" />

      <img class="frame-child1" alt="" src="./public/line-71.svg" />
    </div>
    <div class="rectangle-group">
      <div class="rectangle-div"></div>
      <div class="frame-child2"></div>
      <b class="cancel-order">Cancel order</b>
      <b class="order-info">Order Info</b>
      <div class="rectangle-container">
        <div class="group-child"></div>
        <div class="customer-name">Customer Name</div>
        <div class="group-item"></div>
        <div class="address">Address</div>
        <div class="group-inner"></div>
        <div class="email">Email</div>
        <div class="order-no">Order No.</div>
        <div class="line-div"></div>
      </div>
      <div class="frame-child3"></div>
      <b class="accept-order">Accept order</b>
    </div>
    <div class="group-div">
      <div class="group-child1"></div>
      <img class="iconoirprofile-circle" alt="" src="./public/iconoirprofilecircle.svg" />

      <img class="gridiconsdropdown" alt="" src="./public/gridiconsdropdown.svg" />

      <img class="vector-icon" alt="" src="./public/vector.svg" />

      <img class="iconamoonnotification-fill" alt="" src="./public/iconamoonnotificationfill.svg" />

      <img class="logo-1-icon" alt="" src="./public/logo-1@2x.png" />

      <div class="super-admin">Super Admin</div>
    </div>
    <div class="vector-parent">
      <img class="rectangle-icon" alt="" src="./public/rectangle-1.svg" />

      <div class="customers">Customers</div>
      <div class="category">Category</div>
      <div class="products">Products</div>
      <div class="dashboard">Dashboard</div>
      <div class="icsharp-people"></div>
      <div class="order-confirmation-parent">
        <div class="order-confirmation">Order Confirmation</div>
        <b class="statistics">Statistics</b>
        <b class="orders">Orders</b>
        <div class="manage-orders1">Manage Orders</div>
        <div class="order-cancellation">Order Cancellation</div>
      </div>
      <div class="message-wrapper">
        <div class="message">Message</div>
      </div>
      <img class="material-symbolsdashboard-icon" alt="" src="./public/materialsymbolsdashboard.svg" />

      <div class="mdiusers"></div>
      <img class="fluentpeople-24-filled-icon" alt="" src="./public/fluentpeople24filled.svg" />
    </div>
  </div>

  <script>
    var completeText = document.getElementById("completeText");
    if (completeText) {
      completeText.addEventListener("click", function (e) {
        window.location.href = "./OrdersCompleteAdmin.html";
      });
    }

    var preparingText = document.getElementById("preparingText");
    if (preparingText) {
      preparingText.addEventListener("click", function (e) {
        window.location.href = "./OrdersPreparingAdmin.html";
      });
    }

    var deliveryText = document.getElementById("deliveryText");
    if (deliveryText) {
      deliveryText.addEventListener("click", function (e) {
        window.location.href = "./OrdersDeliveryAdmin.html";
      });
    }
  </script>

<?php
    include "adminFooter.php";

?>
