<?php
include('models/ContactModel.php');
include('views/ContactView.php');
class ContactController {
    public function invoke() {
        $model = new ContactModel();
        $view = new ContactView($model);
        $view->render();
    }
}
