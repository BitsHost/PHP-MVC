# PHP-MVC

---

# Simple PHP MVC Router

This project is a basic demonstration of a PHP MVC (Model-View-Controller) structure implementing a router for managing routes and views. It's designed to showcase a simple MVC pattern for a web application.

## Structure

The project is organized into several directories:

### `router/`

Contains the Router class responsible for handling routing logic.

### `controllers/`

Holds controller classes, each managing the application's logic for a specific route.

### `views/`

Contains view classes, responsible for rendering HTML content using data obtained from models.

### `models/`

Holds model classes, dealing with data retrieval and manipulation for each specific view.

## Usage

To use the project:

1. Clone the repository.
2. Set up your local server to point to the project directory.
3. Access the application via your web browser.

The entry point is `index.php`, which initiates the router and dispatches to the appropriate controller based on the URL.

## Code Example

### HomeController.php (Controller)

```php
class HomeController {
    public function invoke() {
        $model = new HomeModel();
        $view = new HomeView($model);
        $view->render();
    }
}
```

The `HomeController` demonstrates how the controller interacts with the model to retrieve data and then passes it to the view for rendering.

### HomeView.php (View)

```php
class HomeView {
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
```

The `HomeView` class illustrates the view's responsibility of rendering the HTML content, using data obtained from the model.

---

This README offers a brief overview of the project's structure, usage instructions, and code snippets to showcase the MVC architecture's components. Feel free to expand on it with installation instructions, dependencies, or any additional features you might have in your project!
