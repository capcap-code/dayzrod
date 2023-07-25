<?php
session_start(); 
include 'connection.php';
error_reporting(0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Important Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="CrossFire-Epic is a fast-paced free-to-play first person shooter, pitting two teams against each other. Select a mercenary from one of several special operations groups from around the world and choose from a massive armory of firearms, explosives, hand-to-hand weapons. Enjoy adrenaline-fueled action-packed battles across a variety of different modes spaning competitive player-versus-player arenas to cooperative survival scenarios."
        />
        <meta name="author" content="CrossFire Epic" />
        <meta
            name="keywords"
            content="CrossFire Epic Gaming CF CF-EPIC cf-epic epic-gaming gaming epic crossfire play-for-free play for free"
        />

        <!-- Title -->
        <title>CF-Epic Home</title>
        <link rel="icon" href="/assets/home/img/favicon.png" />

        <!-- CDN's -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./css/main.css" />
		  <link rel="stylesheet" href="./css/main2.css" />
		  <script>
        const loadingImagePath = "/assets/home/img/favicon.png";
    </script>
    <!-- CSS here -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/6447a5a439.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/home/css/plugins.css">
    <link rel="stylesheet" href="/assets/home/css/main.css">
    <script src="/assets/home/js/tg-page-head.js"></script>

    <script type="text/javascript" class="flasher-js">
(function() {
    var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.4/dist/flasher.min.js';
    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};
    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);

    function mergeOptions(first, second) {
        return {
            context: merge(first.context || {}, second.context || {}),
            envelopes: merge(first.envelopes || [], second.envelopes || []),
            options: merge(first.options || {}, second.options || {}),
            scripts: merge(first.scripts || [], second.scripts || []),
            styles: merge(first.styles || [], second.styles || []),
        };
    }

    function merge(first, second) {
        if (Array.isArray(first) && Array.isArray(second)) {
            return first.concat(second).filter(function(item, index, array) {
                return array.indexOf(item) === index;
            });
        }

        return Object.assign({}, first, second);
    }

    function renderOptions(options) {
        if(!window.hasOwnProperty('flasher')) {
            console.error('Flasher is not loaded');
            return;
        }

        requestAnimationFrame(function () {
            window.flasher.render(options);
        });
    }

    function render(options) {
        if ('loading' !== document.readyState) {
            renderOptions(options);

            return;
        }

        document.addEventListener('DOMContentLoaded', function() {
            renderOptions(options);
        });
    }

    if (1 === document.querySelectorAll('script.flasher-js').length) {
        document.addEventListener('flasher:render', function (event) {
            render(event.detail);
        });
    }

    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {
        render(options);
    } else {
        var tag = document.createElement('script');
        tag.setAttribute('src', rootScript);
        tag.setAttribute('type', 'text/javascript');
        tag.onload = function () {
            render(options);
        };

        document.head.appendChild(tag);
    }
})();
</script><script type="text/javascript">
    window.addEventListener('flasher:sweetalert:promise', function (event) {
        var envelope = event.detail.envelope;
        var context = envelope.context;

        if (!context.livewire || !context.livewire.id) {
            return;
        }

        var params = event.detail;
        var componentId = context.livewire.id;

        Livewire.components.emitSelf(componentId, 'sweetalertEvent', params);

        var promise = event.detail.promise;
        if (promise.isConfirmed) {
            Livewire.components.emitSelf(componentId, 'sweetalertConfirmed', params);
        }

        if (promise.isDenied) {
            Livewire.components.emitSelf(componentId, 'sweetalertDenied', params);
        }

        if (promise.isDismissed) {
            Livewire.components.emitSelf(componentId, 'sweetalertDismissed', params);
        }
    }, false);
</script> <!-- Flash Messages -->
        <style>
        .product__desc-wrap .tab-content {
            background-color: #1c1a1a8c;
        }

        .tournament__box-prize {
            margin-bottom: 0px;
        }
    </style>

    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
    <style>
        .link-warning:hover {
            text-decoration: underline !important;
        }
    </style>

    <style>
        #login_a_href:hover {
            color: var(--tg-theme-primary);
        }

        .dropdown-item {
            font-family: var(--tg-heading-font-family);
        }

        .dropdown-item:hover {
            color: #16181b !important;
            text-decoration: none;
            background-color: var(--tg-theme-primary) !important;
        }

    </style>
    </head>

    <body>
        <!-- Navbar -->
     
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
                                    <img src="https://crossfire.epic-gaming.net/assets/logo.png" alt="Logo">
                                </a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class=""><a href="https://crossfire.epic-gaming.net">Home</a></li>
                                   
									
									   <li class="menu-item-has-children">
                                        <a href="javascript:;">News And Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="#news">News</a></li>
                                            <li><a href="https://crossfire.epic-gaming.net/pages/events.php">Events</a></li>
                                        </ul>
                                    </li>
									
                                    <li class="menu-item-has-children">
                                        <a href="javascript:;">Ranking</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://crossfire.epic-gaming.net/pages/ranking.php">Player Rank</a></li>
                                            <li><a href="https://crossfire.epic-gaming.net/pages/claning.php">Clans</a></li>
                                        </ul>
                                    </li>

                                    <li class=""><a href="https://crossfire.epic-gaming.net/pages/shop.php">Shop</a></li>
                                    <li class=""><a href="https://crossfire.epic-gaming.net/pages/tournaments.php">Tournaments</a></li>
                                    <li class=""><a href="https://crossfire.epic-gaming.net/pages/download.php">Downloads</a></li>
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
                                            <li><a href="https://crossfire.epic-gaming.net/pages/profile.php?puid=<?php echo $session ?>">CrossFire Profile</a></li>
                                            <li><a href="https://crossfire.epic-gaming.net/pages/redeem.php">Redeem Code</a></li>
                                            <li><a href="https://crossfire.epic-gaming.net/pages/history.php">Redeem History</a></li>
											<li><a href="https://crossfire.epic-gaming.net/pages/account.php">Account Setting</a></li>
											<li><a href="https://discord.gg/epicmena">Buy EG</a></li>
											<li><a href="https://crossfire.epic-gaming.net/pages/luckySpin.php">Lucky Spinner</a></li>
											<li><a href="https://crossfire.epic-gaming.net/pages/invitaion.php">INVITATION System</a></li>
											<li><a >ZP: <?php echo $cc202['Cash']; ?></a></li>
											<li><a >EP: <?php echo $cc20202['EP']; ?></a></li>
											<li><a href="https://crossfire.epic-gaming.net/logout.php">Logout</a></li>
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
                                    <img src="https://crossfire.epic-gaming.net/assets/logo.png" alt="Logo"></a>
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
								
								     <a href="https://crossfire.epic-gaming.net/pages/profile.php?puid=<?php echo $session ?>" class="tg-btn-3 tg-svg mx-auto">
                               
                                    <span>CrossFire Profile</span>
                                </a>
                                <a href="https://crossfire.epic-gaming.net/pages/redeem.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Redeem Code</span>
                                </a>
								  <a href="https://crossfire.epic-gaming.net/pages/account.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Account Setting</span>
                                </a>
									  <a href="https://discord.gg/epicmena" class="tg-btn-3 tg-svg mx-auto">
                              
                                    <span>Buy EG</span>
                                </a>
								
								  <a href="https://crossfire.epic-gaming.net/pages/luckySpin.php" class="tg-btn-3 tg-svg mx-auto">
                                
                                    <span>Lucky Spinner</span>
                                </a>
								
								  <a class="tg-btn-3 tg-svg mx-auto">
                               
                                    <span>ZP: <?php echo $cc202['Cash']; ?></span>
                                </a>
								
								
								
								  <a class="tg-btn-3 tg-svg mx-auto">
                             
                                    <span>EP: <?php echo $cc20202['EP']; ?></span>
                                </a>
								
									  <a href="https://crossfire.epic-gaming.net/logout.php" class="tg-btn-3 tg-svg mx-auto">
                                 
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

        <!-- Header -->
                <header data-aos="zoom-in" class="d-flex align-items-center justify-content-center" data-aos-duration="500">
            <div class="container h-100">
                <div class="box">
                    <div
                        class="header_img"
                        data-aos="fade-down"
                        data-aos-duration="1000"
                    >
                       
                    </div>
                    <div class="info">
                        <h1 data-aos="fade-left" data-aos-duration="1500">
						<br>
						<br>
                            Quick, Simple & Massive!
							<br>
							<br>
                        </h1>
                        <a href="./pages/download.php">
                            <div
                                data-aos="fade-right"
                                data-aos-duration="2000"
                                class="header_bottom_btn"
                            >
                                Play Now
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>
		       <div class="newBox py-5">
            <div class="container" id="news">
               

                <div class="row">
				
                    <div class="col-lg-4 col-md-4 col-sm-4 imgBox">
                        <a href="https://discord.gg/epicmena" target="_blank">
                            <img src="./images/img/registration9.png" alt="" />
                        </a>
                    </div>
                    <div class="col-lg- col-md-4 col-sm-4 imgBox">
                        <a href="https://discord.gg/epicmena" target="_blank">
                            <img src="./images/img/discord.png" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 imgBox">
					<a href="pages/events.php" target="_blank">
                        <img src="./images/img/Giveaway.png" alt="" />
						</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Social Links -->
        <section class="section-padding contact" data-aos="fade-up">
            <h3 data-aos="fade-down" data-aos-duration="500">Stay Connected</h3>
            <div class="container contact_status">
                <div
                    class="status"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    <span>Server Status</span>
                    <figure class="online" online>
                        <div></div>
                        <figcaption>online</figcaption>
                    </figure>
                </div>
                <div
                    class="social"
                    data-aos="fade-left"
                    data-aos-duration="2000"
                >
                    <a
                        href="https://www.facebook.com/groups/659804105761504"
                        target="_blank"
                    >
                        <i class="bx bxl-facebook-circle"></i>
                    </a>
                    <a
                        href="https://discord.gg/epicmena"
                        target="_blank"
                    >
                        <i class="bx bxl-discord-alt"></i
                    ></a>
                    <a href=""><i class="bx bxl-youtube"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <h4>All Right Reserved &copy; <span>CF-Epic Gaming</span></h4>
        </footer>
        <!-- JS CDN's -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
            integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
        <script src="./js/main.js"></script>
        <script>
            AOS.init();
        </script>
        	<script src="assets/home/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/home/js/plugins.js"></script>


<script src="assets/home/js/main.js"></script>
    <script>
        $(document).ready(function () {
            var swiper = new Swiper('.news-slider', {
                slidesPerView: 3,
                spaceBetween: 30,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.slider-button-next',
                    prevEl: '.slider-button-prev',
                },
            });
        });
    </script>
    </body>
</html>
