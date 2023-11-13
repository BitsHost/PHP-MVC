<?php
class ContactView {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function render() {
        $data = $this->model->getData();
        echo "<h1>$data</h1>";
        // Other HTML content or formatting specific to the view can be added here
  
    }
}
