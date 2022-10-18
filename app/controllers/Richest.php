<?php
class Richest extends Controller
{
  private $peopleModel;

  public function __construct()
  {
    $this->peopleModel = $this->model('RichestPeople');
  }



  public function delete($id)
  {
    $result = $this->peopleModel->deleteRichestPerson($id);

    if ($result) {
      echo "Het record is verwijderd uit de database";
      header("Refresh: 3; URL=" . URLROOT . "/homepages/index");
    } else {
      echo "Internal servererror, het record is niet verwijderd";
      header("Refresh: 3; URL=" . URLROOT . "/homepages/index");
    }
  }
}
