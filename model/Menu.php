<?php
    class Menu{
        public $menu;
        public $page;
        function __construct( $page="index", $user_role=2){
            $this->page = $page;
        }

        function get_html(){
            if ($this->page == 'index'){
                $view = './view';
                $index = '.';
                $login = './login';
            }
            else if($this->page == 'lifestyle'){
                $view = '.';
                $index = '..';
                $login = '../login';
            }
            return <<<__MENU
                <div id="sidebar">
                <div class="inner">
                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>
        
                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                    <h2>Menu</h2>
                    </header>
                    <ul>
                    <li><a href="$index/index.php">Home</a></li>
                    <li>
                        <span class="opener">Topics</span>
                        <ul>
                        <li><a href="$view/finance.php">Finance</a></li>
                        <li><a href="$view/tech.php">Tech</a></li>
                        <li><a href="$view/lifestyle.php">Lifestyle</a></li>
                        </ul>
                    </li>
                    <li><a href="$login/login.html">Log In</a></li>
                    <li><a href="$login/signup.html">Sign Up</a></li>
                    <li><a href="$view/elements.html">Elements</a></li>
                    </ul>
                </nav>
        
                <!-- Section -->
                <section>
                    <header class="major">
                    <h2>Get in touch</h2>
                    </header>
                    <p>
                    Sed varius enim lorem ullamcorper dolore aliquam aenean ornare
                    velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed
                    aliquam facilisis ante interdum. Sed nulla amet lorem feugiat
                    tempus aliquam.
                    </p>
                    <ul class="contact">
                    <li class="icon solid fa-envelope">
                        <a href="#">information@untitled.tld</a>
                    </li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">
                        1234 Somewhere Road #8254<br />
                        Nashville, TN 00000-0000
                    </li>
                    </ul>
                </section>
        
                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">
                    &copy; Untitled. All rights reserved. Demo Images:
                    <a href="https://unsplash.com">Unsplash</a>. Design:
                    <a href="https://html5up.net">HTML5 UP</a>.
                    </p>
                </footer>
                </div>
            </div>

            __MENU;
        }
    }

?>