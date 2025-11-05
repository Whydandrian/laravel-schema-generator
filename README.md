## Generator Schema di Laravel (Untuk swagger Darkaonline)

Package ini digunakan untuk generate schema otomatis dari table schema di Laravel.

### Instalasi

Install package via composer

```bash
composer require whydsee/schema-generator
```

### Penggunaan

    Generate api

    ```bash
    php artisan scribes:make --table={table_names} --api
    ```
    Ganti `{table_names}` dengan nama table yang ingin di generate.

### Catatan

- Package ini masih dalam tahap pengembangan, mungkin masih terdapat bug atau masalah.
- Silakan laporkan bug atau masalah di repository ini.