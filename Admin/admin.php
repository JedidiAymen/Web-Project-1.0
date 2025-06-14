<?php
require_once '../login/config.php';

// Check if user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    // If not, redirect to login page
    header("Location: ../login/login.php");
    exit();
}

// Get admin information
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><img src="admin_images/logo.png" alt="" width="36"></span>
                        <span class="title">Pharmacy Shop</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="bi bi-house"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Products/Products.html">
                        <span class="icon"><i class="fa-solid fa-tablets"></i></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li>
                    <a href="Customers/Customers.html">
                        <span class="icon"><i class="bi bi-people"></i></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="order/order.html">
                        <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
                        <span class="title">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="Settings/Settings.html">
                        <span class="icon"><i class="bi bi-gear"></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--main-->
        <div class="main">
            <div class="topbar">
                    <div class="toggle">
                        <i class="bi bi-list"></i>
                    </div>
                    
                
                <!--search-->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search here">
                        <i class="bi bi-search"></i>
                    </label>
                </div>
                <!--usersimg-->
                <div class="user">
                    <img src="admin_images/images/user.jpg" alt="">
                </div>
            </div>
            <!--cards-->
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers">708</div>
                        <div class="cardname">Daily Views</div>
                    </div>
                    <div class="iconbox">
                        <i class="bi bi-eye"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardname">Sales</div>
                    </div>
                    <div class="iconbox">
                        <i class="bi bi-cart"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardname">Comments</div>
                    </div>
                    <div class="iconbox">
                        <i class="bi bi-chat-left-text"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardname">Earning</div>
                    </div>
                    <div class="iconbox">
                        <i class="bi bi-wallet2"></i>
                    </div>
                </div>
            </div>
           
            <div class="details">
                 <!--order details list-->
                <div class="recentorders">
                    <div class="cardheader">
                        <h2>Recent Orders</h2>
                        <a href="order/order.html" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Product 1</td>
                                <td>25$</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Product 2</td>
                                <td>10$</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Product 3</td>
                                <td>15$</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Product 4</td>
                                <td>23$</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Product 5</td>
                                <td>18$</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Product 6</td>
                                <td>12$</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Product 7</td>
                                <td>18$</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Product 8</td>
                                <td>20$</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Product 9</td>
                                <td>11$</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Product 10</td>
                                <td>15$</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>  
                </div>
                <!--New Customers--> 
                <div class="recentcustomers">
                    <div class="cardheader">
                        <h2>New Customers</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img1.jpg" alt=""></div></td>
                            <td><h4>Amine<br><span>Tunis</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img2.jpg" alt=""></div></td>
                            <td><h4>Aymen<br><span>Tunis</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img3.jpg" alt=""></div></td>
                            <td><h4>Chadha<br><span>Tunis</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img4.jpg" alt=""></div></td>
                            <td><h4>Amelia<br><span>France</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img5.jpg" alt=""></div></td>
                            <td><h4>David <br><span>Italy</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img6.jpg" alt=""></div></td>
                            <td><h4>Mohamed<br><span>Suisse</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img7.jpg" alt=""></div></td>
                            <td><h4>OLivia<br><span>USA</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img8.jpg" alt=""></div></td>
                            <td><h4>Cesur<br><span>Turkie</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="admin_images/images/img9.jpg" alt=""></div></td>
                            <td><h4>Diana<br><span>Malaysia</span></h4></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="floating-icon" id="floatingIcon">
        <i class="bi bi-chat-dots"></i>
    </div>
    <script src="Products/Products.js"></script>
</body>
</html>
