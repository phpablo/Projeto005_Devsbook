<?php

namespace src\models;

use core\Model;

class User extends Model {
  public $id;
  public $name;
  public $email;
  public $avatar;
  public $city;
  public $work;
  public $birthdate;
  public $cover;
  public $followers;
  public $following;
  public $photos;
  public $ageYears;
}
