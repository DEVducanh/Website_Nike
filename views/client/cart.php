<?php 


session_start();

spl_autoload_register(function ($class) {    
    $fileName = "$class.php";

    $fileModel              = PATH_MODEL . $fileName;
    $fileControllerClient   = PATH_CONTROLLER_CLIENT . $fileName;
    $fileControllerAdmin    = PATH_CONTROLLER_ADMIN . $fileName;

    if (is_readable($fileModel)) {
        require_once $fileModel;
    } 
    else if (is_readable($fileControllerClient)) {
        require_once $fileControllerClient;
    }
    else if (is_readable($fileControllerAdmin)) {
        require_once $fileControllerAdmin;
    }
});
?> 
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Giỏ Hàng</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/Cart.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/home.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/modal.css">
</head>

<body>
  <div class="container">
    <header>
      <nav>
        <div class="logo">
          <img src="/images/Logo.png" />
        </div>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?action=product_cart">Shop</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li><a href="#">Service</a></li>
        </ul>
        <div class="search-container">
          <input type="text" placeholder="Search..." class="search-input" />
          <i class="search-icon fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="menu-icon">
          <div class="user-icon">
                  <span><i class="fa-solid fa-user"></i></span>
                  <div class="dropdown-menu">
                    <a href="#" onclick="openModal()">Đăng ký</a>
                    <a href="#" onclick="openModal()">Đăng nhập</a>
                  </div>
          </div>
          <div class="cart-icon">
            <a href="index.php?action=cart"><i class="fa-solid fa-cart-shopping"></i></a>
            <span class="cart-count">2</span>
          </div>
        </div>
      </nav>
    </header>
  <div class="cart-container">
    <div class="shopping-cart">
      <div class="cart-title">
        <h2>Giỏ Hàng</h2>
      </div>
      <table class="cart-table">
        <thead>
          <th>Image</th>
          <th>Product</th>
          <th>Details</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Remove</th>
        </thead>
        <tbody>
          <tr>
            <td><img src="images/anh1.png" alt="Product Image" class="product-image" /></td>
            <td>Giày Baseketball E35</td>
            <td>
              <div class="details">
                <span>Size: 40</span><br><span>Material: Leather</span>
              </div>
            </td>
            <td class="price">8700000</td>
            <td>
              <button class="quantity-btn" onclick="updateQuantity(this, -1)">-</button>
              <input type="number" value="1" class="quantity" onchange="updateTotal(this)" />
              <button class="quantity-btn" onclick="updateQuantity(this, 1)">+</button>
            </td>
            <td class="product-total">8700000đ</td>
            <td><button class="remove-btn" onclick="removeProduct(this)">Xóa</button></td>
          </tr>
          <tr>
            <td><img src="images/anh2.png" alt="Product Image" class="product-image" /></td>
            <td>Giày Baseketball E35</td>
            <td>
              <div class="details">
                <span>Size: 40</span><br><span>Material: Leather</span>
              </div>
            </td>
            <td class="price">8700000</td>
            <td>
              <button class="quantity-btn" onclick="updateQuantity(this, -1)">-</button>
              <input type="number" value="1" class="quantity" onchange="updateTotal(this)" />
              <button class="quantity-btn" onclick="updateQuantity(this, 1)">+</button>
            </td>
            <td class="product-total">8700000đ</td>
            <td><button class="remove-btn" onclick="removeProduct(this)">Xóa</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="summary-container">
      <h3>Tổng tiền giỏ hàng</h3>
      <p style="padding: 12px 0;">Tổng sản phẩm: <span id="total-items">1</span></p>
      <h3 id="grand-total">Tổng Cộng: 8700000đ</h3>
      <button class="buy-now">Thanh Toán</button>
    </div>
  </div>
  </div>
  <?php include 'views/component/form_login_singup.php' ?>
  <script src="./script/cart.js"></script>
  <script src="./script/modal.js"></script>
</body>
</html>