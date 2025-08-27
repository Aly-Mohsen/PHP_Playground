# Demo PHP Framework

A lightweight PHP framework built from scratch (inspired by the Laracasts PHP course). This project serves as a learning playground for understanding core PHP concepts such as routing, controllers, autoloading, and testing.

## Features
- Custom Router with basic GET/POST support  
- Controllers under `Http/controllers`  
- Autoloading with PSR-4 (`Core\` and `Http\`)  
- Uses Illuminate Collections for convenience  
- Unit testing with Pest  
- Compatible with PHP 8.2  

## Requirements
- PHP ^8.2  
- [Composer](https://getcomposer.org/)  
- XAMPP (or any local server with Apache & MySQL for database support)  

## Installation
Clone this repository:
```bash
git clone https://github.com/your-username/demo.git
cd demo
```

Install dependencies:
```bash
composer install
```

## Running the Project
### Using XAMPP
1. Place the project inside `htdocs`, e.g. `C:\xampp\htdocs\laracasts_PHP_Course\demo`  
2. Start Apache from the XAMPP Control Panel  
3. Open in your browser:
```
http://localhost/laracasts_PHP_Course/demo/public
```

### Using PHP Built-in Server
```bash
php -S localhost:8000 -t public
```

## Testing
This project uses Pest for testing.

Initialize Pest (first time only):
```bash
./vendor/bin/pest --init
```

Run tests:
```bash
./vendor/bin/pest
```

## Project Structure
```
demo/
├── Core/ # Framework core (Router, etc.)
│ ├── Response.php
│ ├── Router.php
│ ├── Validator.php
│ └── functions.php
│
├── Http/
│ ├── controllers/ # Application controllers
│ │ ├── index.php
│ │ └── registration/
│ │ └── store.php
│ │
│ └── forms/ # Form validation classes
│ └── RegisterForm.php
│
├── public/ # Public entry point
│ └── index.php
│
├── tests/ # Pest tests
│ └── ExampleTest.php
│
├── composer.json
├── composer.lock
└── README.md
```

## Author
**Aly Mohsen**  
[aly.mohsen1000@gmail.com](mailto:aly.mohsen1000@gmail.com)

## License
This project is open-source and free to use for educational purposes.
