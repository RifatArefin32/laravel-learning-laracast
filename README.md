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

# Day-3: Create layout files using laravel components
Laravel components provide a convenient way to create reusable pieces of UI, making it easier to build layouts and encapsulate small pieces of your application's views into self-contained components.

- Create a component directory `./resources/views/components`
- Create a component file `./resources/views/components/layout.blade.php`
- Use this `layout` component at any view file using `<x-layout> some slot value </x-layout>`
- The main content for the layout component is accessed as `$slot` variable
- We can pass some value of the variables in the layout using `<x-slot:variable_name> value </x-slot:variable_name>`
- Components access the attributes of an HTML element as `$attributes` variable

# Day-4: Make a Pretty Layout Using TailwindCSS
Add Play CDN script inside the layout and add a layout design from tailwind.css
```bash
 <script src="https://cdn.tailwindcss.com"></script>
```

# Day-5: Props and Blade Directives

| **Feature** | **Description** | **Syntax Example** |
|-------------|-----------------|--------------------|
| **Props** | Data passed from parent to child Blade components | `<x-alert type="success" message="Operation successful!" />` |
| **@props** | Declares which data a component expects when using inline Blade components. | `@props(['type' => 'info', 'message'])` |
| **@foreach, @for**| Loop directives for iterating over data in Blade views. | `@foreach($items as $item) <li>{{ $item }}</li> @endforeach` |
| **@if, @else, @elseif** | Conditional directives for adding logic to Blade views. | `@if($user) <p>Hello, {{ $user }}</p> @else <p>Guest</p> @endif` |

### Notes
- **Props** in Laravel Blade are mainly used to pass data to Blade components.
- **Blade Directives** provide a set of predefined syntaxes for common programming structures and templating needs in Blade views.

# Day-6: View Data Items and Route Wildcards
Laravel routes often use wildcards to capture dynamic segments of the URL. These wildcards are defined using curly braces { }. For example: 
```
Route::get('/jobs/{id}', function($id) {
    // do something
}
```

# Day-7: Autoloading, Namespaces and Models in Laravel
### Autoloading
Autoloading in Laravel is managed through `Composer`. It automatically loads PHP classes from predefined directories when they are needed, following the **PSR-4** standard. By default, the app directory is autoloaded, so you can use any class within it without requiring manual inclusion.
- Configured in: `composer.json` (autoload section).
- Example: Class `App\Models\User` will be autoloaded when you reference `User` in your code.

### Namespaces
Namespaces in Laravel help organize code and prevent class name conflicts. They map to directory structures and are used to group related classes. Laravel uses namespaces to differentiate between different parts of the application, such as models, controllers, and custom libraries.

### Models
Models in Laravel represent database tables and allow you to interact with the data. They are typically stored in the `app/Models` directory and extend the `Illuminate\Database\Eloquent\Model` class, providing an Active Record implementation for database operations.
- Location: `app/Models` (default).
- Example: `User::all()` retrieves all records from the users table.
