<?php
/* This class defines a blog post for posting on a website. */

    class Post {
        //Variable declarations.
        private $title;
        private $dateCreated;
        private $dateUpdated;
        private $body;
        private $tags;

        /* Constructor for the post.  Takes two arguments: one for the date the post was
        * created and one for the date the post was updated.
        */
        function __construct($arg1, $arg2) {
            $this->title = "untitled";
            $this->body = "";
            $this->tags = [];
            date_default_timezone_set("America/Phoenix");
            $this->dateCreated = new DateTime($arg1);
            $this->dateUpdated = new DateTime($arg2);
        }

        //Getter and setter for the title of the post.
        function getTitle() {
            return $this->title;
        }

        function setTitle($arg) {
            $this->title = $arg;
        }

        //Getter and setter for the body of the post.
        function getBody() {
            return $this->body;
        }

        function setBody($arg) {
            $this->body = $arg;
        }
        
        //Append text to the body of the post.
        function appendToBody($arg) {
            $this->setBody($this->getBody() . $arg);
        }

        //Getter and setter for the date created of the post.
        function getDateCreated() {
            return $this->dateCreated;
        }

        function setDateCreated($arg) {
            $this->dateCreated->modify($arg);
        }

        //Getter and setter for the date updated of the post.
        function getDateUpdated() {
            return $this->dateUpdated;
        }

        function setDateUpdated($arg) {
            $this->dateUpdated->modify($arg);
        }

        //Getter and setter for the tags.
        function setTags($arg) {
            foreach($this->tags as $key=>$value) {
                unset($this->tags[$key]);
            }
            foreach($arg as $value) {
                $this->tags[] = $value;
            }
        }

        function getTags() {
            return $this->tags;
        }
    }
?>
