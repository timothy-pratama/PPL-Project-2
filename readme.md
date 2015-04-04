<h1> Cara Install </h1>
<ul>
<li>Clone repositori ini.</li>

<li>Buka Command Prompt, cd ke folder hasil clone (yang ada file artisan)</li>
<li>Jalankan command: <code>composer update</code></li>
<li>
Buat file .env (isinya copy paste dari file .env.example), edit bagian 
<ul>
<li>DB_HOST=localhost</li>
<li>DB_DATABASE=homestead (nama database di MySQL) </li>
<li>DB_USERNAME=root (username MySQL) </li>
<li>DB_PASSWORD= (password MySQL) </li>
</ul>
</li>
<li>Jalankan command: <code>php artisan migrate</code> untuk melakukan migrasi data</li>
<li>Jalankan command: <code>php artisan migrate:refresh --seed</code> untuk mengupdate database berdasarkan seed data </li>
</ul>
