<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css?v=6" type="text/css" />
        <script src="/js/fa.js" data-auto-replace-svg="nest"></script>
    </head>
    <body>
        <div id="app" class="appgrad2">
            <div id="content">
                <section id="sidebar" class="">
                    <div>
                    <a href="" class="logolink">
                        <img class="logo" src="/img/logo.svg" alt="Heimdall Docker Manager" />
                        <div id="appname"><img class="logotext" src="/img/text.svg" alt="Heimdall Docker Manager" /> <span>Docker Manager</span></div>
                    </a>
                    <ul id="dockerlist">
                        <?php
                        $dockers = [
                            (object)[
                                'name' => 'Heimdall',
                                'url' => '',
                                'container' => 'linuxserver/heimdall:latest',
                                'image' => 'https://raw.githubusercontent.com/linuxserver/docker-templates/master/linuxserver.io/img/heimdall-icon.png',
                                'description' => 'Heimdall is a way to organise all those links to your most used web sites and web applications in a simple way.',
                                'active' => true
                            ],
                            (object)[
                                'name' => 'Plex',
                                'container' => 'linuxserver/plex:latest',
                                'url' => '',
                                'image' => 'https://raw.githubusercontent.com/linuxserver/docker-templates/master/linuxserver.io/img/plex-icon.png',
                                'description' => 'Plex organizes video, music and photos from personal media libraries and streams them to smart TVs, streaming boxes and mobile devices.',
                                'active' => true
                            ],
                            (object)[
                                'name' => 'Sabnzbd',
                                'container' => 'linuxserver/sabnzbd:latest',
                                'image' => 'http://i.imgur.com/GTfJONm.png',
                                'url' => '',
                                'description' => 'SABnzbd is an Open Source Binary Newsreader written in Python. SABnzbd makes Usenet as simple and streamlined as possible by automating',
                                'active' => true
                            ],
                            (object)[
                                'name' => 'Sonarr',
                                'container' => 'linuxserver/sonarr:latest',
                                'url' => '',
                                'image' => 'https://raw.githubusercontent.com/linuxserver/docker-templates/master/linuxserver.io/img/sonarr-icon.png',
                                'description' => 'Sonarr (formerly NZBdrone) is a PVR for usenet and bittorrent users. It can monitor multiple RSS feeds for new episodes of your favorite shows and will grab, sort and rename them. It can also be configured to automatically upgrade the quality of files already downloaded when a better quality format becomes available.',
                                'active' => false
                            ],
                        ]
                        ?>
                        @foreach($containers as $container)
                            @include('containers.pinned')
                        @endforeach
                    </ul>
                </div>
                    <nav id="appnav">
                        <ul>
                            <li>
                                <a class="add" href=""><span>Add</span></a>
                            </li>
                            <li>
                                <a href="">Settings</a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <main id="main">
                    <div class="mainsearch">
                        <input class="" type="text" name="search" value="" placeholder="Search for something to install..." />
                    </div>
                    <div class="spotlight-container">
                        @foreach($dockers as $docker)
                            @include('containers.spotlight')
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
