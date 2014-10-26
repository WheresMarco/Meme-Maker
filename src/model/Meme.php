<?php
  namespace model;

  class Meme {
	  private $id;
	  private $userID;
	  private $likes;
    private $topText;
    private $bottomText;
    private $image;
    private $base64;

    public function __construct($image, $topText, $bottomText) {
      // TODO Validation
      
      $this->image = $image;
      $this->topText = $topText;
      $this->bottomText = $bottomText;
    }

		public function setID($id) {
			$this->id = $id;
		}
		
		public function getID() {
			return $this->id;
		}
		
		public function setUserID($userID) {
			$this->userID = $userID;
		}
		
		public function getUserID() {
			return $this->userID;
		}
		
		public function setLikes($likes) {
			$this->likes = $likes;
		}
		
		public function getLikes() {
			return $this->likes;
		}

    public function getTopText() {
      return $this->topText;
    }

    public function getBottomText() {
      return $this->bottomText;
    }


    public function getImage() {
      return $this->image;
    }

    public function setBase64($data) {
      $this->base64 = $data;
    }

    public function getBase64() {
      return $this->base64;
    }
  }
