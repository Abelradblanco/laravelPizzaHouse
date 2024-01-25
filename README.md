### Pizzahouse Laravel app  ###
Pizza Ordering System created using laravel and laravel/ui for proper authentication



### Some side notes for me to note: ###

# Get into mysql
mysql -u root -p 

MYSQL Database connected with PHPMyAdmin

# migrations
php artisan make:migration create_users_table 
# run the migrations:
php artisan migrate
# reset and re-runs all migration
php artisan migrate:refresh
php artisan migrate:rollback

# create model
php artisan make:model Pizza

# NodeJs is needed
You need nodejs to use npm to be able run scripts like SASS files
npm install

# instal webpack.mix
npm install laravel-mix --save-dev

# create the webpack.mix
touch webpack.mix.js

I had to fix some dependencies on my webpack.mix.js and also had to add extra ones: npm install sass-loader@^12.1.0 sass resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps

# we dont need to run 'npm run dev' everytime to convert sass to css, we can just:
npm run watch

### To use Auth we can instal UI packages ###
# instal UI package with composer
composer require laravel/ui
# We will use Vue 
php artisan ui vue --auth