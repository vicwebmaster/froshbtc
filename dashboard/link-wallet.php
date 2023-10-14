<?php
include "process/config.php";
require_once "process/conn.php";
require_once "process/session.php";
?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="3ZYuh4Acwa7HLOFeaPbetLV1OebW5SlhZOcMVhxK">
    <title><?php echo $system['sitename']; ?> - Connect Wallet</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $system['sitename']; ?>">

    <meta itemprop="name" content="<?php echo $system['sitename']; ?>">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $system['sitename']; ?>">
    <meta property="og:description" content="<?php echo $system['sitename']; ?>">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../user/dashboard">

    <meta name="twitter:card" content="summary_large_image">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/animate.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/slick.css">
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/dots.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/main.css">
    <link rel="stylesheet" href="../assets/templates/bit_gold//css/custom.css">
    <link rel="stylesheet" href="../assets/templates/bit_gold/css/color.php?color=CCA354&secondColor=000000">
    <style type="text/css">
        #copyBoard {
            cursor: pointer;
        }

        .attachment-thumbnail{
            border-radius:1rem;
        }

        .elementor-heading-title{
            font-size: 17px;
            text-align: center;
            margin-top:12px
        }

        .col-lg-2{
            margin-bottom:30px
        }
    </style>
</head>

<body>


    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <div class="full-wh">
        <!-- STAR ANIMATION -->
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div><!-- / STAR ANIMATION -->
    </div>
    <div class="page-wrapper">

        <?php
        require_once "../assets/dash-header.php";
        ?>

        <!-- inner hero start -->
        <section class="inner-hero bg_img" data-background="../assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Connect Wallet</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li>Connect Wallet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="cmn-section">
            <div class="container">
                <div class="row justify-content-center mt-2">
                    <h2 style="font-size: 40px; color:#cca354; text-align:center" class="mb-5">CHOOSE YOUR WALLET</h2>


                    <div class="col-md-12 row">

                        <div class="col-lg-2 col-6">
                            <div class="row jusif">
                                <div class="elementor-element elementor-element-51166eb8 elementor-widget elementor-widget-image" data-id="51166eb8" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/multi.php">
                                            <img src="wallets/trust-wallet-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-36243005 elementor-widget elementor-widget-heading" data-id="36243005" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Multicoin</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-51166eb8 elementor-widget elementor-widget-image" data-id="51166eb8" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/blockchain.php">
                                            <img src="wallets/blockchainwallet.png" class="attachment-thumbnail size-thumbnail" alt=""> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-36243005 elementor-widget elementor-widget-heading" data-id="36243005" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">BlockChain Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-51166eb8 elementor-widget elementor-widget-image" data-id="51166eb8" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/ledger.php">
                                            <img src="wallets/zvqWFfy-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-36243005 elementor-widget elementor-widget-heading" data-id="36243005" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Ledger</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-15bfe4c3 elementor-widget elementor-widget-image" data-id="15bfe4c3" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/trust.php">
                                            <img src="wallets/trust-wallet-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6494748 elementor-widget elementor-widget-heading" data-id="6494748" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Trust Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-63560c6d elementor-widget elementor-widget-image" data-id="63560c6d" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">

                                        <a href="imp/metamask.php">
                                            <img src="wallets/c57ca95b47569778a828d19178114f4db188b89b763c899ba0be274e97267d96-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-245e915e elementor-widget elementor-widget-heading" data-id="245e915e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"> Metamask</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5918dd75 elementor-widget elementor-widget-image" data-id="5918dd75" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/zelcore.php">
                                            <img src="wallets/29f4a70ad5993f3f73ae8119f0e78ecbae51deec2a021a770225c644935c0f09-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5139bcef elementor-widget elementor-widget-heading" data-id="5139bcef" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Zelcore</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5b48d99b elementor-widget elementor-widget-image" data-id="5b48d99b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/xdc.php">
                                            <img src="wallets/78640a74036794a5b7f8ea501887c168232723696db4231f54abd3fe524037b4-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7574838f elementor-widget elementor-widget-heading" data-id="7574838f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">XDC Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7c73deee elementor-widget elementor-widget-image" data-id="7c73deee" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/rainbow.php">
                                            <img src="wallets/rainbow-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-50c25389 elementor-widget elementor-widget-heading" data-id="50c25389" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Rainbow</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6b76f147 elementor-widget elementor-widget-image" data-id="6b76f147" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/ownbit.php">
                                            <img src="wallets/8fb830a15679a8537d84c3852e026a4bdb39d0ee3b387411a91e8f6abafdc1ad-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-54dd3ab1 elementor-widget elementor-widget-heading" data-id="54dd3ab1" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Ownbit</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4f20ca91 elementor-widget elementor-widget-image" data-id="4f20ca91" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/vision.php">
                                            <img src="wallets/b642ab6de0fe5c7d1e4a2b2821c9c807a81d0f6fd42ee3a75e513ea16e91151c-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-72b7f0ad elementor-widget elementor-widget-heading" data-id="72b7f0ad" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Vision</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-27a352ac elementor-widget elementor-widget-image" data-id="27a352ac" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/atomic.php">
                                            <img src="wallets/185850e869e40f4e6c59b5b3f60b7e63a72e88b09e2a43a40b1fd0f237e49e9a-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-55c5e4c2 elementor-widget elementor-widget-heading" data-id="55c5e4c2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Atomic</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-32c672f1 elementor-widget elementor-widget-image" data-id="32c672f1" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/coin98.php">
                                            <img src="wallets/b021913ba555948a1c81eb3d89b372be46f8354e926679de648e4fa2938bed3e-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3b31c9e8 elementor-widget elementor-widget-heading" data-id="3b31c9e8" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Coin98</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3014ac98 elementor-widget elementor-widget-image" data-id="3014ac98" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/defi.php">
                                            <img src="wallets/f2436c67184f158d1beda5df53298ee84abfc367581e4505134b5bcf5f46697d-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1868d533 elementor-widget elementor-widget-heading" data-id="1868d533" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Crypto.com | DeFi Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5c27e43 elementor-widget elementor-widget-image" data-id="5c27e43" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/mathwallet.php">
                                            <img src="wallets/7674bb4e353bf52886768a3ddc2a4562ce2f4191c80831291218ebd90f5f5e26-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-34074044 elementor-widget elementor-widget-heading" data-id="34074044" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">MathWallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2f2c1191 elementor-widget elementor-widget-image" data-id="2f2c1191" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/morix.php">
                                            <img src="wallets/hw9IIkS-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a3e3ede elementor-widget elementor-widget-heading" data-id="a3e3ede" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">MoriX Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1521a31 elementor-widget elementor-widget-image" data-id="1521a31" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/safepal.php">
                                            <img src="wallets/0b415a746fb9ee99cce155c2ceca0c6f6061b1dbca2d722b3ba16381d0562150-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-62377b61 elementor-widget elementor-widget-heading" data-id="62377b61" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">SafePal</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1718805 elementor-widget elementor-widget-image" data-id="1718805" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/sparkpoint.php">
                                            <img src="wallets/3b0e861b3a57e98325b82ab687fe0a712c81366d521ceec49eebc35591f1b5d1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5383c94a elementor-widget elementor-widget-heading" data-id="5383c94a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">SparkPoint</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6865625b elementor-widget elementor-widget-image" data-id="6865625b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/unstoppable.php">
                                            <img src="wallets/7e90b95230bc462869bbb59f952273d89841e1c76bcc5319898e08c9f34bd4cd-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-53ee8508 elementor-widget elementor-widget-heading" data-id="53ee8508" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Unstoppable Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4a641fb7 elementor-widget elementor-widget-image" data-id="4a641fb7" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/peakdefi.php">
                                            <img src="wallets/38ee551a01e3c5af9d8a9715768861e4d642e2381a62245083f96672b5646c6b-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-55912963 elementor-widget elementor-widget-heading" data-id="55912963" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">PeakDeFi Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-462b5263 elementor-widget elementor-widget-image" data-id="462b5263" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/infinity.php">
                                            <img src="wallets/802a2041afdaf4c7e41a2903e98df333c8835897532699ad370f829390c6900f-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-56388152 elementor-widget elementor-widget-heading" data-id="56388152" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Infinity Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-aeb54ab elementor-widget elementor-widget-image" data-id="aeb54ab" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/autherium.php">
                                            <img width="400" height="400" src="wallets/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b67a33d.jpg" class="attachment-thumbnail size-large" alt="" loading="lazy" srcset="wallets/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b67a33d.jpg 400w, wallets/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b67a33d-300x300.jpg 300w, wallets/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b67a33d-100x100.jpg 100w, wallets/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b67a33d-150x150.jpg 150w" sizes="(max-width: 400px) 100vw, 400px" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-18879967 elementor-widget elementor-widget-heading" data-id="18879967" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Autherium</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-515a1d52 elementor-widget elementor-widget-image" data-id="515a1d52" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/easypocket.php">
                                            <img width="400" height="400" src="wallets/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a76f5c.jpg" class="attachment-thumbnail size-large" alt="" loading="lazy" srcset="wallets/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a76f5c.jpg 400w, wallets/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a76f5c-300x300.jpg 300w, wallets/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a76f5c-100x100.jpg 100w, wallets/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a76f5c-150x150.jpg 150w" sizes="(max-width: 400px) 100vw, 400px" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-66d191fb elementor-widget elementor-widget-heading" data-id="66d191fb" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Easy Pocket</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2056e07f elementor-widget elementor-widget-image" data-id="2056e07f" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/midas.php">
                                            <img width="400" height="352" src="wallets/1e04cf5cddcd84edb1370b12eae1fcecedf125b77209fff80e7ef2a6d3c74719.jpg" class="attachment-thumbnail size-large" alt="" loading="lazy" srcset="wallets/1e04cf5cddcd84edb1370b12eae1fcecedf125b77209fff80e7ef2a6d3c74719.jpg 400w, wallets/1e04cf5cddcd84edb1370b12eae1fcecedf125b77209fff80e7ef2a6d3c74719-300x264.jpg 300w" sizes="(max-width: 400px) 100vw, 400px" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6c82490f elementor-widget elementor-widget-heading" data-id="6c82490f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Midas Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-365ed1e4 elementor-widget elementor-widget-image" data-id="365ed1e4" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/walleth.php">
                                            <img width="256" height="256" src="wallets/walleth.png" class="attachment-thumbnail size-large" alt="" loading="lazy" srcset="wallets/walleth.png 256w, wallets/walleth-100x100.png 100w, wallets/walleth-150x150.png 150w" sizes="(max-width: 256px) 100vw, 256px" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-493bdbe3 elementor-widget elementor-widget-heading" data-id="493bdbe3" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Walleth</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6da47dab elementor-widget elementor-widget-image" data-id="6da47dab" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/onto.php">
                                            <img src="wallets/dceb063851b1833cbb209e3717a0a0b06bf3fb500fe9db8cd3a553e4b1d02137-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-319eca52 elementor-widget elementor-widget-heading" data-id="319eca52" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Onto</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6d2efe1b elementor-widget elementor-widget-image" data-id="6d2efe1b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/meet.php">
                                            <img src="wallets/FNeEqEY-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4c7950bf elementor-widget elementor-widget-heading" data-id="4c7950bf" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Meet.One</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3d596ab2 elementor-widget elementor-widget-image" data-id="3d596ab2" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/gridplus.php">
                                            <img src="wallets/6ec1ffc9627c3b9f87676da3f7b5796828a6c016d3253e51e771e6f951cb5702-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-594e0fc8 elementor-widget elementor-widget-heading" data-id="594e0fc8" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">GridPlus</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-37f86265 elementor-widget elementor-widget-image" data-id="37f86265" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/infinito.php">
                                            <img src="wallets/d0387325e894a1c4244820260ad7c78bb20d79eeec2fd59ffe3529223f3f84c6-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-75f50a16 elementor-widget elementor-widget-heading" data-id="75f50a16" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Infinito</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-759f7b0c elementor-widget elementor-widget-image" data-id="759f7b0c" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/dok.php">
                                            <img src="wallets/d12b6e114af8c47a6eec19a576f1022032a5ee4f8cafee612049f4796c803c7e-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1f6e957c elementor-widget elementor-widget-heading" data-id="1f6e957c" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Dok Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1596aa3f elementor-widget elementor-widget-image" data-id="1596aa3f" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/tronlink.php">
                                            <img src="wallets/X4pm9U0-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-19730383 elementor-widget elementor-widget-heading" data-id="19730383" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">TronLink</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22144ef elementor-widget elementor-widget-image" data-id="22144ef" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/coinomi.php">
                                            <img src="wallets/9277bc510b6d95f29be38e7c0e402ae8438262f0f4c6dbb40dfc22f5043e8814-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-40f5d2b4 elementor-widget elementor-widget-heading" data-id="40f5d2b4" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Coinomi</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-76e26398 elementor-widget elementor-widget-image" data-id="76e26398" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/myether.php">
                                            <img src="wallets/Myetherwallet-logo-square-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6199c8bc elementor-widget elementor-widget-heading" data-id="6199c8bc" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">MyEtherWallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-291b310c elementor-widget elementor-widget-image" data-id="291b310c" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/argent.php">
                                            <img src="wallets/argent-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-389f7cfd elementor-widget elementor-widget-heading" data-id="389f7cfd" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Argent</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-291b310c elementor-widget elementor-widget-image" data-id="291b310c" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/coinbase.php">
                                            <img src="wallets/RfNaWcy-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-389f7cfd elementor-widget elementor-widget-heading" data-id="389f7cfd" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Coinbase</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7968a013 elementor-widget elementor-widget-image" data-id="7968a013" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/bitkeep.php">
                                            <img src="wallets/42d72b6b34411dfacdf5364c027979908f971fc60251a817622b7bdb44a03106-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4e19b6b2 elementor-widget elementor-widget-heading" data-id="4e19b6b2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">BitKeep</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1abf008a elementor-widget elementor-widget-image" data-id="1abf008a" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/mykey.php">
                                            <img src="wallets/61f6e716826ae8455ad16abc5ec31e4fd5d6d2675f0ce2dee3336335431f720e-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2801c259 elementor-widget elementor-widget-heading" data-id="2801c259" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">MyKey</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4947f938 elementor-widget elementor-widget-image" data-id="4947f938" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/walletio.php">
                                            <img src="wallets/176b83d9268d77438e32aa44770fb37b40d6448740b6a05a97b175323356bd1b-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6cd85595 elementor-widget elementor-widget-heading" data-id="6cd85595" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Wallet.io</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-584c126b elementor-widget elementor-widget-image" data-id="584c126b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/coolwallet.php">
                                            <img src="wallets/1f69170bf7a9bdcf89403ec012659b7124e158f925cdd4a2be49274c24cf5e5d-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-155dcb17 elementor-widget elementor-widget-heading" data-id="155dcb17" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Cool Wallet S</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-555ff69b elementor-widget elementor-widget-image" data-id="555ff69b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/eidoo.php">
                                            <img src="wallets/efba9ae0a9e0fdd9e3e055ddf3c8e75f294babb8aea3499456eff27f771fda61-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c643930 elementor-widget elementor-widget-heading" data-id="c643930" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Eidoo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4b2b3e0b elementor-widget elementor-widget-image" data-id="4b2b3e0b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/bridge.php">
                                            <img src="wallets/881946407ff22a32ec0e42b2cd31ea5dab52242dc3648d777b511a0440d59efb-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6c75701 elementor-widget elementor-widget-heading" data-id="6c75701" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Bridge Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4346d332 elementor-widget elementor-widget-image" data-id="4346d332" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/tokenary.php">
                                            <img src="wallets/c889f5add667a8c69d147d613c7f18a4bd97c2e47c946cabfdd13ec1d596e4a0-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b398268 elementor-widget elementor-widget-heading" data-id="b398268" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Tokenary</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-226feb08 elementor-widget elementor-widget-image" data-id="226feb08" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/at.php">
                                            <img src="wallets/3d56ed42374504f1bb2ba368094269eaea461c075ab796d504f354baac213dc5-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-64de39a2 elementor-widget elementor-widget-heading" data-id="64de39a2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">AT.Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-65411531 elementor-widget elementor-widget-image" data-id="65411531" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/harmony.php">
                                            <img src="wallets/nEmaX3p-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5f5f5f01 elementor-widget elementor-widget-heading" data-id="5f5f5f01" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Harmony</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6cc9172 elementor-widget elementor-widget-image" data-id="6cc9172" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/stellar.php">
                                            <img src="wallets/IDFef99-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-283a7ed6 elementor-widget elementor-widget-heading" data-id="283a7ed6" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Stellar</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-39a3ec25 elementor-widget elementor-widget-image" data-id="39a3ec25" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/alice.php">
                                            <img src="wallets/beea4e71c2ffbb48b59b21e33fb0049ef6522585aa9c8a33a97d3e1c81f16693-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2c0de9ae elementor-widget elementor-widget-heading" data-id="2c0de9ae" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Alice</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3599bc0b elementor-widget elementor-widget-image" data-id="3599bc0b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/gnosis.php">
                                            <img src="wallets/gnosis-safe-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-42f51bd1 elementor-widget elementor-widget-heading" data-id="42f51bd1" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Gnosis Safe</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-eb6557 elementor-widget elementor-widget-image" data-id="eb6557" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/solana.php">
                                            <img src="wallets/xdTTF08-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2edcfbb3 elementor-widget elementor-widget-heading" data-id="2edcfbb3" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Solana</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2a6b9967 elementor-widget elementor-widget-image" data-id="2a6b9967" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/oxen.php">
                                            <img src="wallets/6a1JUkC-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3ff644ff elementor-widget elementor-widget-heading" data-id="3ff644ff" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Oxen</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2563f917 elementor-widget elementor-widget-image" data-id="2563f917" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/guard.php">
                                            <img src="wallets/c04ae532094873c054a6c9339746c39c9ba5839c4d5bb2a1d9db51f9e5e77266-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-710e09fc elementor-widget elementor-widget-heading" data-id="710e09fc" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Guard</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5d7eb6ed elementor-widget elementor-widget-image" data-id="5d7eb6ed" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/trustvault.php">
                                            <img src="wallets/6bb4596640ce9f8c02fbaa83e3685425455a0917d025608b4abc53bfe55887c6-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4e203ef9 elementor-widget elementor-widget-heading" data-id="4e203ef9" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">TrustVault</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2e1409bc elementor-widget elementor-widget-image" data-id="2e1409bc" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/tezos.php">
                                            <img src="wallets/D9Aog3V-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7145bd16 elementor-widget elementor-widget-heading" data-id="7145bd16" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Tezos</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-472fd40b elementor-widget elementor-widget-image" data-id="472fd40b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/digitex.php">
                                            <img src="wallets/GaW0bMm-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9df5d elementor-widget elementor-widget-heading" data-id="9df5d" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">DigiTex</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/thundertoken.php">
                                            <img src="wallets/sWzuT4u-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Thundertoken</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/bitpay.php">
                                            <img src="wallets/ccb714920401f7d008dbe11281ae70e3a4bfb621763b187b9e4a3ce1ab8faa3b-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Bitpay</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/trustee.php">
                                            <img src="wallets/1ce6dae0fea7114846382391d946784d95d9032460a857bb23b55bd9807259d1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Trustee Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-487cae36 elementor-widget elementor-widget-image" data-id="487cae36" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/sumcoin.php">
                                            <img src="wallets/vsZwKGL-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5eb707e0 elementor-widget elementor-widget-heading" data-id="5eb707e0" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">SumCoin</h2>
                                    </div>

                                </div>
                            </div>
                        </div>

                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/viawallet.php">
                                            <img width="150" height="130" src="wallets/ca86f48760bf5f84dcd6b1daca0fd55e2aa073ecf46453ba8a1db0b2e8e85ac1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">ViaWallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/electrum.php">
                                            <img src="wallets/electrum.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Electrum </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/bitbuy.php">
                                            <img width="150" style="height: 70px" src="wallets/bitbuy.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Bitbuy </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-487cae36 elementor-widget elementor-widget-image" data-id="487cae36" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/mycelium.php">
                                            <img src="wallets/mycelium.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5eb707e0 elementor-widget elementor-widget-heading" data-id="5eb707e0" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Mycelium</h2>
                                    </div>

                                </div>
                            </div>
                        </div>

                
                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/exodus.php">
                                            <img src="wallets/exodus.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Exodus</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/trezor.php">
                                            <img width="150" style="height: 80px" src="wallets/trezor.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Trezor </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22069330 elementor-widget elementor-widget-image" data-id="22069330" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="imp/edge.php">
                                            <img width="150" style="height: 80px" src="wallets/edge.png" class="attachment-thumbnail size-thumbnail" alt="" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-523f49ca elementor-widget elementor-widget-heading" data-id="523f49ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Edge Wallet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    </div>
    </div>
    </section>












    </div>
    </div>
    </div>
    </section>


    <?php
    require_once "../assets/dash-footer.php";
    ?>
    </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
    <script src="../assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="../assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
    <script src="../assets/templates/bit_gold//js/vendor/slick.min.js"></script>
    <script src="../assets/templates/bit_gold//js/vendor/wow.min.js"></script>
    <!-- dashboard custom js -->
    <script src="../assets/templates/bit_gold//js/app.js"></script>


    <link rel="stylesheet" href="../assets/templates/bit_gold/css/iziToast.min.css">
    <script src="../assets/templates/bit_gold/js/iziToast.min.js"></script>


    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>




    <script>
        (function() {
            "use strict";
            $(document).on("change", ".langSel", function() {
                window.location.href = "../change/" + $(this).val();
            });
        })();
    </script>


</body>

</html>

</body>

</html>