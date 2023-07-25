<?php
session_start(); 
include 'connection.php';
error_reporting(0);
ini_set('display_errors', 0);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>EPIC</title>



    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/home/img/favicon.png">


    <script>
        const loadingImagePath = "/assets/home/img/favicon.png";
    </script>
    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/home/css/plugins.css">
    <link rel="stylesheet" href="/assets/home/css/main.css">
    <script src="/assets/home/js/tg-page-head.js"></script>


    <style>
        #login_a_href:hover {
            color: #b09a6e;
        }
    </style>
</head>


<body>
<!-- scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="flaticon-right-arrow"></i>
</button>
<!-- scroll-top-end-->


<!-- header-area -->
<header>
    <div id="sticky-header" class="tg-header__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="https://crossfire.epic-gaming.net">
                                    <img src="/assets/logo.png" alt="Logo">
                                </a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class=""><a href="https://crossfire.epic-gaming.net">Home</a></li>
                                   
									
									   <li class="menu-item-has-children">
                                        <a href="javascript:;">News And Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="#news">News</a></li>
                                            <li><a href="pages/events.php">Events</a></li>
                                        </ul>
                                    </li>
									
                                    <li class="menu-item-has-children">
                                        <a href="javascript:;">Ranking</a>
                                        <ul class="sub-menu">
                                            <li><a href="pages/ranking.php">Player Rank</a></li>
                                            <li><a href="pages/claning.php">Clans</a></li>
                                        </ul>
                                    </li>

                                    <li class=""><a href="pages/shop.php">Shop</a></li>
                                    <li class=""><a href="pages/download.php">Downloads</a></li>
                                </ul>
                            </div>
							
												<?php
		
		  if (!isset($_SESSION['USER_ID'])) {
  	$_SESSION['msg'] = "You must log in first";
  	
  ?>
							
                            <div class="tgmenu__action d-none d-md-block">
                                <ul class="list-wrap">
								
                                                                            <li class="header-btn">
                                            <a href="https://crossfire.epic-gaming.net/pages/register.php" class="tg-btn-3 tg-svg">
                                                <div class="svg-icon" id="svg-2"
                                                     data-svg-icon="/assets/home/img/icons/shape02.svg"></div>
                                              <i class="fa-solid fa-user-plus"></i>
                                                <span>Register</span>
                                            </a>
                                        </li>
                                        <li class="header-btn">
                                            <a id="login_a_href" href="https://crossfire.epic-gaming.net/pages/login.php" class="fw-bold">Login</a>
                                        </li>
                                                                    </ul>
                            </div>
							
							
															<?php }else{ 
		 $session = $_SESSION['USER_ID'];
$check2 = odbc_exec($connection, "SELECT [NICK] FROM [CF_USER] WHERE [USN] = '".$session."'");
$cc2 = odbc_fetch_array($check2);

$check202 = odbc_exec($connection3, "SELECT [Cash] FROM [TAccountCashMst] WHERE [UserNo] = '".$session."'");
$cc202 = odbc_fetch_array($check202);


$check20220 = odbc_exec($connection, "SELECT [EP] FROM [CF_MEMBER] WHERE [USN] = '".$session."'");
$cc20202 = odbc_fetch_array($check20220);
		?>
							
							           <div class="tgmenu__action d-none d-md-block">
							
                                <ul class="list-wrap">
								   <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
             <ul class="navigation">
			   <li class="menu-item-has-children">
                                        <a href="javascript:;">My Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="pages/profile.php?puid=<?php echo $session ?>">CrossFire Profile</a></li>
                                            <li><a href="pages/redeem.php">Redeem Code</a></li>
											<li><a href="pages/account.php">Account Setting</a></li>
											<li><a href="https://discord.gg/epicmena">Buy EG</a></li>
											<li><a href="pages/luckySpin.php">Lucky Spinner</a></li>
											<li><a >ZP: <?php echo $cc202['Cash']; ?></a></li>
											<li><a >EP: <?php echo $cc20202['EP']; ?></a></li>
											<li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
									 </ul>
									 </div>
						
									
                                                                    </ul>
                            </div>
							
															<?php } ?>
							
							
							
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="flaticon-swords-in-cross-arrangement"></i></div>
                            <div class="nav-logo">
                                <a href="https://crossfire.epic-gaming.net">
                                    <img src="/assets/logo.png" alt="Logo"></a>
                            </div>

                            <div class="tgmobile__menu-outer">
                              
                            </div>
					<?php
		
		  if (!isset($_SESSION['USER_ID'])) {
  	$_SESSION['msg'] = "You must log in first";
  	
  ?>
                                 <a href="https://crossfire.epic-gaming.net/pages/login.php" class="tg-btn-3 tg-svg mx-auto">
                                 
                                    <span>Login</span>
                                </a>
                                <a href="https://crossfire.epic-gaming.net/pages/register.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Register</span>
                                </a>
								<?php }else{ 
		 $session = $_SESSION['USER_ID'];
$check2 = odbc_exec($connection, "SELECT [NICK] FROM [CF_USER] WHERE [USN] = '".$session."'");
$cc2 = odbc_fetch_array($check2);

$check202 = odbc_exec($connection3, "SELECT [Cash] FROM [TAccountCashMst] WHERE [UserNo] = '".$session."'");
$cc202 = odbc_fetch_array($check202);


$check20220 = odbc_exec($connection, "SELECT [EP] FROM [CF_MEMBER] WHERE [USN] = '".$session."'");
$cc20202 = odbc_fetch_array($check20220);
		?>
								
								     <a href="pages/profile.php?puid=<?php echo $session ?>" class="tg-btn-3 tg-svg mx-auto">
                               
                                    <span>CrossFire Profile</span>
                                </a>
                                <a href="pages/redeem.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Redeem Code</span>
                                </a>
								  <a href="pages/account.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Account Setting</span>
                                </a>
									  <a href="https://discord.gg/epicmena" class="tg-btn-3 tg-svg mx-auto">
                              
                                    <span>Buy EG</span>
                                </a>
								
								  <a href="pages/luckySpin.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Lucky Spinner</span>
                                </a>
								
								  <a class="tg-btn-3 tg-svg mx-auto">
                               
                                    <span>ZP: <?php echo $cc202['Cash']; ?></span>
                                </a>
								
								
								
								  <a class="tg-btn-3 tg-svg mx-auto">
                             
                                    <span>EP: <?php echo $cc20202['EP']; ?></span>
                                </a>
								
									  <a href="logout.php" class="tg-btn-3 tg-svg mx-auto">
                                 
                                    <span>Logout</span>
                                </a>
								
								
								  
								
								
								<?php } ?>
								
								
								
                                                    </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                 
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->


<!-- main-area -->
<main class="main--area">
    <div class="container">
        <div class="row my-auto" style="height: 100vh">
            <div class="col-12" style="float:none;margin:auto;">
                <div class="error__wrapper text-center">
                    <div class="error__content">
                        <h1>404</h1>
                        <h2>Page Not Found</h2>
                        <p>Sorry, but the page you are looking for does not exist, have been removed, name changed or is
                            temporarily unavailable.</p>
                        <div class="error__btn">
                            <a class="btn btn__white btn__bordered btn__bordered-white"
                               href="https://crossfire.epic-gaming.net">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->

<!-- All JS Custom Plugins Link Here here -->
<script src="/assets/home/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/assets/home/js/plugins.js"></script>
<script src="/assets/home/js/main.js"></script>

</body>
</html>
