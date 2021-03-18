# MielPei

Une market place de vente de miel dans le cadre d'une formation.
### instalation

-> composer install  

-> composer required laravel/ui  

-> php artisan ui bootstrap  

-> php artisan ui bootstrap --auth  

-> composer require "darryldecode/cart"

-> npm install  

-> npm run dev  

### suite

-> dupliquer le fichier .env.exemple en .env   

-> remplacer les information de connection à la bdd   

-> php artisan migrate

-> php artisan db:seeders

-> php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider" --tag="config"

