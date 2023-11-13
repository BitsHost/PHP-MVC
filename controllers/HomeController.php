<?php
include('models/HomeModel.php');
include('views/HomeView.php');
class HomeController {
    public function invoke() {
        $model = new HomeModel();
        $view = new HomeView($model);
        $view->render();
    }
}
