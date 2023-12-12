# Laravel Product CRUD Application

This is a simple Laravel application for managing products with CRUD (Create, Read, Update, Delete) functionality.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- [PHP](https://www.php.net/manual/en/install.php)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download/) (for Laravel Mix)
- [MySQL](https://dev.mysql.com/downloads/) or any other relational database

### Installation

1. **Clone the repository:**


    git clone https://github.com/asfarkhan9595/ProductCrud.git


2. **Navigate to the project directory:**

  
    cd ProductCrud
   

3. **Install PHP dependencies:**

  
    composer install
   


5. **Update the `.env` file with your database configuration:**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. **Generate the application key:**

   
    php artisan key:generate
    

7. **Run database migrations:**

    
    php artisan migrate
    

8. **Seed the database with dummy data:**

    
    php artisan db:seed --class=ProductsTableSeeder
    

9. **Install JavaScript dependencies:**

    
    npm install
    

10. **Compile assets:**

    
    npm run dev
   

### Usage

1. **Run the development server:**

   
    php artisan serve
   

2. **Visit [http://localhost:8000/products](http://localhost:8000/products) in your browser to access the product list.**

### Contributing

Feel free to contribute by opening issues or creating pull requests.

### License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
