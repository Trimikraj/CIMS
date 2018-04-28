## Startup
For running the project, use the following commands in a terminal.
```
git clone https://github.com/Trimikraj/CIMS.git
cd CIMS 
composer install
php artisan serve
```

## Custom Utility Class
To work with CSV file a utility class ClientCsv was created.
This helped to read all data and write single row of data to CSV file.

#### To use the utility class ClientCsv
*Path should be absolute path*

*Filename has to be with .csv extension*

```php
use App\Utility\ClientCsv;

$csv = new ClientCsv(path, filename);
```