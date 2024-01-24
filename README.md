Pizzahouse Laravel app
built from youtube to learn Laravel

# Get into mysql
mysql -u root -p 

# migrations
php artisan make:migration create_users_table 
# run the migrations:
php artisan migrate
# reset and re-runs all migration
php artisan migrate:refresh
php artisan migrate:rollback

# create model
php artisan make:model Pizza

