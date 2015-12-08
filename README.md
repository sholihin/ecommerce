# table
*m_produk
kode_produk
nama_produk
harga
stok
deskripsi
#crd

*t_order
id_transaksi
id_pelanggan
nama_pelanggan
no_telepon
email
kode_produk
qty

*t_pembelian
id_beli
kode_pelanggan
total

#rule
table_tmp_order menampilkan semua list belanja
{jika produk di tambah update stok, jika produk delete update stok}
ketika di proses insert total, kode pelanggan, id beli ke t_pembeli 

#for first step clone laravel
composer update

#for migrate db
php artisan migrate

#for running server
php artisan serve --host=0.0.0.0 --port=8080
