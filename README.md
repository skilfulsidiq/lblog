<p align="center">Laravel Blog</p>

## Set Up
Run composer update
1. Install Composer Dependencies
``` bash
    composer install
```
2. Install NPM Dependencies
``` bash
    npm install
```
or if you prefer yarn (as i do)
``` bash
    yarn install
```
3. Generate CSS Dependencies

 ``` bash
    npm run dev or yarn dev
```

4. Create a copy of your .env file

``` bash
cp .env.example .env
```
This will create a copy of the .env.example file in your project and name the copy simply .env.

5. Generate an app encryption key
``` bash
php artisan key:generate
```
6.  Create an empty database for the application
7. Add database connection information 
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD

8. Migrate the database
``` bash
php artisan migrate
```
9. Seed Database
``` bash
php artisan db:seed
```
Upon seeding, two users are created, admin and normal user
``` bash
Admin =>
    email: admin@test.com
    password: password
```
``` bash
user =>
    email: user@test.com
    password: password
```
## Explanation
 Grid Page: All users can access this pages and see list of all posts with pagination.
            A loggedin user can edit or delete his/her post.
            The grid list can be filter by title
            
 Form Page: This  page can only be accessed by loggedin users only.

 Admin Dashboard: This can only be accessed by the admin.
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
