## Laravel Projesi Oluşturma

-   composer create-project laravel/laravel example-app

## Laravel Projesi Çalıştırma

-   php artisan serve

## Vite ile Vue Dahil Etme
- npm install --save-dev @vitejs/plugin-vue
- https://laravel.com/docs/11.x/vite#vue

docker compose up : Docker'a ymal dosyasını aktarır.


php artisan db:show komutu, Laravel'in bir veritabanı hakkında bilgi almanızı sağlayan bir komuttur. Ancak, Laravel'in temel kurulumunda böyle bir komut mevcut değildir. Bu komut, Laravel Debugbar veya Laravel Telescope gibi üçüncü taraf paketlerin sağladığı bir özellik olabilir.

## Migrate İşlemleri

##### Migration Oluşturma : php artisan make:migration create_users_table
##### Migration Yürütme : php artisan migrate
##### Migration Geri Al : php artisan migrate:rollback
##### Migration Geri Al Tümü : php artisan migrate:reset
##### Migration Yönetimi : php artisan migrate:status
##### Factory sınıfı oluşturma : php artisan make:factory <FactoryName>
Factory sınıfı, bir veri tabanı tablosu için örnek veri oluşturmak için kullanılan bir sınıftır.
##### Örnek veriler ile doldurmak için : php artisan db:seed
##### Migration Yönetimi : php artisan migrate:status
##### Controller Oluşturma php artisan make:controller --resource ListingController
