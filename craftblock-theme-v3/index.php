<!DOCTYPE html>
<?php include('functions.php'); ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
        <title>Craftblock - Survive, Craft, Build.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/modernizr.js"></script>

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <header>
        <div class="logo-container"><img class="logo" src="img/craftblock-logo.png" alt=""></div>
        <nav>
            <ul>
                <li>
                    <a>Home <span>Go Back</span> </a>
                </li>
                <li>
                    <a>Forum <span>Join The Community</span> </a>
                    <ul class="subnav">
                        <li><a href="">View latest news.</a></li>
                        <li><a href="">Sign-up</a></li>
                        <li><a href="">Apply for a rank</a></li>
                        <li><a href="">Ban Appeal</a></li>
                        <li><a href="">Help &amp; Support</a></li>
                    </ul>
                </li>
                <li>
                    <a>Wiki <span>Learn about our server &amp; ranks</span> </a>

                </li>
                <li>
                    <a>Store <span>Purchase ranks &amp; more</span> </a>
                </li>
            </ul>
        </nav>
    </header>
    
    <div id="main-content">

        <section class="cb-description">
            Full of open world adventures, CraftBlock is a network of servers that focuses on the Survival and Creative aspect of Minecraft.  Bring your friends and join our amazing community.
        </section>

        <section class="servers">
            <ul>
                <li>
                    <div class="server-container">
                        <img src="img/cbserver-icon.png" alt="" class="server-icon" width="110px" height="113px">
                        <div class="server-description">
                        <h3>Craftblock <span>Connect: mc.craftblock.me</span></h3>
                            CraftBlock - The server that started it all. We enhance the survival experince with features like Towns, Markets, Fun building events, and tons of other things you can do.
                        </div>
                    </div>
                    <div class="server-info">
                        <span>Status: <?php echo getStatus($server['craftblock']); ?></span>
                        <?php echo getVersion($server['chocoblock']); ?>
                        <span>Apply for Whitelist</span>
                        <?php echo getPlayerCount($server['chocoblock']); ?>
                        <div class="players-online">
                            <?php getPlayers($server['craftblock']); ?>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="server-container">
                        <img src="img/nanoserver-icon.png" alt="" class="server-icon" width="110px" height="113px">
                        <div class="server-description">
                            <h3>Nanoblock <span>Connect: nano.craftblock.me</span></h3>
                            Craftblock’s modded server.  Where you can build with the finest tools using Nano’s own custom modpack.  Check out the modpack and find out how to get started!
                        </div>
                    </div>
                    <div class="server-info">
                        <span>Status: <?php echo getStatus($server['nanoblock']); ?></span>
                        <span><a href="">Modpack &amp; How to connect</a></span>
                        <?php echo getVersion($server['chocoblock']); ?>
                        <?php echo getPlayerCount($server['chocoblock']); ?>
                        <div class="players-online">
                            <?php getPlayers($server['nanoblock']); ?>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="server-container">
                        <img src="img/chocoserver-icon.png" alt="" class="server-icon" width="110px" height="113px">
                        <div class="server-description">
                            <h3>Chocoblock <span>Connect: vanilla.craftblock.me</span></h3>
                            A whitelist, vanilla, and strictly survival server. Apply to join if you want the pureist of Minecraft. You must be a member of our other two servers to get a chance to join here.
                        </div>
                    </div>
                    <div class="server-info">
                        <span>Status: <?php echo getStatus($server['chocoblock']) ?></span>
                        <?php echo getVersion($server['chocoblock']); ?>
                        <span>Apply for Whitelist</span>
                        <?php echo getPlayerCount($server['chocoblock']); ?>
                        <div class="players-online">
                            <?php getPlayers($server['chocoblock']); ?>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

    </div><!-- /.main-content -->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation.tooltip.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!--
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
   
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setaccount','Ua-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        -->
    </body>
</html>
