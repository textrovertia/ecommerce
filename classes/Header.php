<?php
    class Header{
        function __construct(){

        }

        function get_html(){
            return <<<__HEADER
                <header id="header">
                <a href="../index.html" class="logo"
                ><strong>Kaseɛbo</strong> by HTML5 UP</a
                >
                <ul class="icons">
                <li>
                    <a href="#" class="icon brands fa-twitter"
                    ><span class="label">Twitter</span></a
                    >
                </li>
                <li>
                    <a href="#" class="icon brands fa-facebook-f"
                    ><span class="label">Facebook</span></a
                    >
                </li>
                <li>
                    <a href="#" class="icon brands fa-snapchat-ghost"
                    ><span class="label">Snapchat</span></a
                    >
                </li>
                <li>
                    <a href="#" class="icon brands fa-instagram"
                    ><span class="label">Instagram</span></a
                    >
                </li>
                <li>
                    <a href="#" class="icon brands fa-medium-m"
                    ><span class="label">Medium</span></a
                    >
                </li>
                </ul>
                </header>

            __HEADER;
        }
    }

?>