<?php
    class Article{
        public $imagehref;
        public $image;
        public $heading;
        public $text;
        public $buttonlink;

        function __construct($imagehref, $image, $heading, $text, $buttonlink ){
            $this->$imagehref = $imagehref;
            $this->image = $image;
            $this->heading = $heading; 
            $this->text = $text;
            $this->buttonlink = $buttonlink;
        }

        function get_html(){
            $imagehref = $this->imagehref;
            $image = $this->image;
            $heading = $this->heading;
            $text = $this->text; 
            $buttonlink = $this->buttonlink;
            return <<<__ARTICLE
                
                <article>
                    <a href="$imagehref" class="image"
                    ><img src="$image" alt="Article image"
                    /></a>
                    <h3>$heading</h3>
                    <p>
                        $text
                    </p>
                    <ul class="actions">
                    <li><a href="$buttonlink" class="button">More</a></li>
                    </ul>
                </article>
            __ARTICLE;
        }
    }



?>