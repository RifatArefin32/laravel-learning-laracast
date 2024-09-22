# Laravel Learning from Laracast
**Course Name :** [30 Days to Learn Laravel](https://laracasts.com/series/30-days-to-learn-laravel-11) 

# Day-1: Project setup
### Project Dependency
- Install PHP
- Install Composer
- Install MySQL (This project uses MySQL database)

To create a brand new laravel project, open the terminal and run the following command
```bash
composer create-project laravel/laravel your_project_name
```
To start our site, write the following command from terminal
```bash
php artisan serve
```
This command will start the site at `localhost:8000`

Create new github repository for your project and add the project to the repository
- Create a github repository without readme and licence
- Initiate git to the project
- Change the `master` branch into `main`
- Add the remote github repository to the local git
- Add all, commit them and push to the remote repository 

# Day-2: Routes and Views
### Routes
- `./routes/web.php` - for routes that handle web requests.
- `./routes/api.php` - for routes that handle API requests.
- `./routes/console.php` - for defining console commands.
- `./routes/channels.php` - for event broadcasting channels.

Basic Syntax of a route
```bash
Route::get('/example', function () {
    return 'Hello, World!';
});
```


### Views
In Laravel, a `view` is a way to separate our application’s logic from its presentation layer. 
- Views are used to represent the output or user interface of your application and typically contain HTML mixed with some **`Laravel Blade templating code`**. 
- Views are stored in the `./resources/views` directory.

