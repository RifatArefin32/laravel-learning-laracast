# Laravel Learning from Laracast
**Course Name :** [30 Days to Learn Laravel](https://laracasts.com/series/30-days-to-learn-laravel-11) 

# Contents
- [01. Project setup](#day-1-project-setup)
- [02. Routes and views](#day-2-routes-and-views)
- [03. Create layout file using laravel components](#day-3-create-layout-files-using-laravel-components)
- [04. Make a pretty layout using tailwind-css](#day-4-make-a-pretty-layout-using-tailwindcss)
- [05. Props and blade directives](#day-5-props-and-blade-directives)
- [06. View data items and route wildcards](#day-6-view-data-items-and-route-wildcards)
- [07. Autoloading namespaces and models](#day-7-autoloading-namespaces-and-models)
- [08. Introduction with migration](#day-8-introduction-with-migration)
- [09. Eloquent in laravel](#day-9-eloquent-in-laravel)
- [10. Model factories](#day-10-model-factories)
- [11. Two key eloquent models relationship](#)

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

# Day-7: Autoloading, Namespaces and Models
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

# Day-8: Introduction with Migration
Create a database for the project in MySQL and configure the database at `.env` file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD="your_password"
```

### Useful Laravel Migration Commands

| **Command** | **Description** | **Example Usage** |
|-------------|-----------------|-------------------|
| `php artisan make:migration` | Creates a new migration file. | `php artisan make:migration create_users_table` |
| `php artisan migrate` | Runs all pending migrations in the `database/migrations` directory. | `php artisan migrate` |
| `php artisan migrate:rollback` | Rolls back the last batch of migrations. | `php artisan migrate:rollback` |
| `php artisan migrate:reset` | Rolls back all migrations. | `php artisan migrate:reset` |
| `php artisan migrate:refresh` | Rolls back all migrations and re-runs them. | `php artisan migrate:refresh` |
| `php artisan migrate:fresh` | Drops all tables and re-runs all migrations from scratch. | `php artisan migrate:fresh` |
| `php artisan migrate:status` | Shows the status of each migration (whether it has been run or not). | `php artisan migrate:status` |
| `php artisan migrate:rollback --step={number}` | Rolls back the last `{number}` batches of migrations. | `php artisan migrate:rollback --step=2` |
| `php artisan migrate --path={path}` | Runs migrations from a specific path. | `php artisan migrate --path=/database/migrations/special` |
| `php artisan migrate --seed` | Runs migrations and seeds the database. | `php artisan migrate --seed` |
| `php artisan migrate:refresh --seed` | Refreshes migrations and seeds the database. | `php artisan migrate:refresh --seed` |
| `php artisan migrate:fresh --seed` | Drops all tables, runs migrations, and seeds the database. | `php artisan migrate:fresh --seed` |
| `php artisan migrate:install` | Creates the `migrations` table in the database (tracks migration status). | `php artisan migrate:install` |

- Run a migration command `php artisan migrate` 
- Create a migration file for `job_items` table
- Setup the table schema and run migration command

### Common Migration Methods  in Laravel

| **Type Method** | **Description** | **Example** |
|------------|-----------------|-------------------|
| `string($column, $length = 255)` | Creates a VARCHAR equivalent column (default length is 255). | `$table->string('name');`|
| `text($column)`| Creates a TEXT equivalent column.| `$table->text('description');`|
| `integer($column)`| Creates an INTEGER equivalent column.| `$table->integer('age');`|
| `bigInteger($column)`| Creates a BIGINT equivalent column.| `$table->bigInteger('views');`|
| `smallInteger($column)`| Creates a SMALLINT equivalent column.| `$table->smallInteger('rank');`|
| `tinyInteger($column)`| Creates a TINYINT equivalent column.| `$table->tinyInteger('status');`|
| `float($column, $precision = 8, $scale = 2)` | Creates a FLOAT equivalent column with precision.|`$table->float('price', 8, 2);`|
| `double($column, $precision = 15, $scale = 8)`| Creates a DOUBLE equivalent column with precision.|`$table->double('amount', 15, 8);`|
| `decimal($column, $precision, $scale)`| Creates a DECIMAL equivalent column with precision. | `$table->decimal('total', 10, 2);`|
| `boolean($column)`         | Creates a BOOLEAN equivalent column. | `$table->boolean('is_active');`|
| `date($column)`            | Creates a DATE equivalent column. | `$table->date('birthdate');`|
| `dateTime($column)`        | Creates a DATETIME equivalent column. | `$table->dateTime('created_at');`|
| `timestamp($column)`       | Creates a TIMESTAMP equivalent column. | `$table->timestamp('updated_at');`|
| `enum($column, array $values)` | Creates an ENUM equivalent column. | `$table->enum('role', ['admin', 'user']);` |
| `json($column)`            | Creates a JSON equivalent column. | `$table->json('options');`                |

| **Constraint Method** | **Description** | **Example** |
|------------|-----------------|-------------------|
| `nullable()`               | Makes the column nullable. | `$table->string('email')->nullable();`   |
| `unique()`                 | Adds a unique constraint to the column. | `$table->string('username')->unique();`   |
| `default($value)`          | Sets a default value for the column. | `$table->integer('score')->default(0);`  |
| `after($column)`           | Places the new column after an existing column. | `$table->string('nickname')->after('name');` |
| `first()`                  | Places the new column at the beginning of the table. | `$table->string('id_number')->first();`|

# Day-9: Eloquent in laravel

Eloquent is Laravel's Object-Relational Mapping (ORM) tool. 
- It that simplifies database interactions by allowing developers to interact with database tables as if they were PHP objects, 
- It makes database operations more intuitive and reducing the need for complex SQL queries.

### Key Features of Eloquent
- **Active Record Implementation:** Each model in Eloquent represents a single table in the database. Operations like CRUD records are done directly on these models.
- **Fluent Query Builder:** Eloquent provides a fluent, chainable interface to construct database queries using PHP syntax.
- **Relationships:** Eloquent supports defining relationships between different models such as one-to-one, one-to-many, and many-to-many, making it easy to handle complex data associations.
- **Eager Loading:** Eloquent allows for eager loading of relationships, minimizing the number of queries executed and improving performance.
- **Mass Assignment Protection:** Eloquent protects against mass assignment vulnerabilities, allowing you to specify which attributes should be mass-assignable.
- **Timestamps:** Eloquent automatically manages created_at and updated_at columns, simplifying record tracking.
- **Soft Deletes:** Eloquent allows for "soft deleting" records, where a record is marked as deleted without actually being removed from the database.

### Basic example of Eloquent
```php
use App\Models\User;

// 1. Retrieve all users
$users = User::all();   

// 2. Create a new user
$newUser = User::create([
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'password' => bcrypt('password'),
]);

// 3. Find a user by ID
$user = User::find(1);  

// 4. Update a user
$user->name = 'Jane Doe';
$user->save();

// 5. Delete a user
$user->delete();    

```

### Step-By-Step in this day
- Rename `Job` class into `StaticJob`
- Create a model named `Job` using `php artisan make:model Job`
- Specifity `job_items` table for `Job` class as laravel by default has `jobs` table
- Add fillable properties
- `php artisan tinker` to enter into eloquent terminal, create some records and show them

# Day-10: Model Factories

In Laravel, factories are a convenient way to generate new model instances for testing or seeding the database. Factories allow you to create instances of the model with fake or random data. Factory definitions are stored in `database/factories` and define how the model's attributes should be populated with data. 

Create a factory data for User model
```bash
App\Models\User::factory()->create()
```

Create 3 factory fake data for User model
```bash
App\Models\User::factory(3)->create()
```
Create factory with `admin()` function defined in the class file
```bash
App\Models\User::factory()->admin()->create()
```
Create a factory class `JobFactory` for `Job` model
```bash
php artisan make:factory JobFactory -m Job
```
 - Create an `Employer` model
 - Create `EmployerFactory` class
 - Create a migration table for `Employer`
 - Add `employer_id` as the foreign key for `job_items` table
 - Change the `JobFactory` class to add foreign key

# Day-10: Two Key Eloquent Models Relationship

# Eloquent Model Relationships in Laravel

In Laravel, Eloquent ORM allows you to define relationships between models to work with related data efficiently. Below is a table summarizing the types of Eloquent relationships, their descriptions, and when to use them, followed by examples for each.

## Eloquent Relationship Types

| Relationship Type | Description | When to Use |
|-------------------|-------------|-------------|
| **One-to-One** | A single record in one table is associated with a single record in another table. | When a user has a single profile or a company has a single address. |
| **One-to-Many** | A single record in one table is associated with multiple records in another table. | When a post has many comments, or a category has many products. |
| **Many-to-Many** | Multiple records in one table are related to multiple records in another table via a pivot table.| When users belong to multiple roles or products belong to multiple tags. |
| **Has Many Through** | Provides a way to access a distant one-to-many relationship through an intermediate model. | When a country has many posts through users, or a mechanic has many car owners through cars. |
| **Polymorphic One-to-One** | A single model can belong to multiple other models on a single association. | When a photo can be associated with either a user or a product (a single polymorphic table). |
| **Polymorphic One-to-Many**  | A model can belong to multiple other models via a polymorphic association. | When multiple models can have many comments, like posts and videos having comments using a single comments table. |
| **Polymorphic Many-to-Many** | Multiple models can be associated with other models of different types via a pivot table. | When multiple models can have tags, like posts, videos, and users having tags using a single tags and taggables table. |

## Examples of Eloquent Relationships

### 1. One-to-One Relationship
**Example:** A `User` has one `Profile`.

```php
// User Model
public function profile() {
    return $this->hasOne(Profile::class);
}

// Profile Model
public function user() {
    return $this->belongsTo(User::class);
}
```

### When to Use hasOne()
- The `hasOne()` method is used in the model that "owns" the other model. 
- It indicates that a single instance of the current model is related to a single instance of another model.
- Example: If a User "has one" Profile, you would use `hasOne()` in the User model because the User is the parent or owner of the Profile.

### When to use belongsTo()
- The `belongsTo()` method is used in the model that "belongs to" another model. 
- It indicates that the current model contains the foreign key and is associated with a single instance of the related model.
- Example: The Profile "belongs to" a User, so you would use `belongsTo()` in the Profile model because it references the User model.


### 2. Example of One to Many Relationship 
**Example:** A `Post` has many `Comments`.
```php
// Post Model
public function comments() {
    return $this->hasMany(Comment::class);
}

// Comment Model
public function post() {
    return $this->belongsTo(Post::class);
}

```

### 3. Many-to-Many Relationship
**Example:** A **User** belongs to many **Roles**.
```php
// User Model
public function roles() {
    return $this->belongsToMany(Role::class);
}

// Role Model
public function users() {
    return $this->belongsToMany(User::class);
}

```

### Eager loading
```php
$users = User::with('profile')->get();  // Eager load user profiles to minimize queries
```

