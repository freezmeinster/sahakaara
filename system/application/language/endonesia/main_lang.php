<?php
$lang['site'] = "Manajer Penyimpanan Berkelompok";
$lang['link_home'] = "Beranda";
$lang['link_node'] = "Penyumbang";
$lang['link_disk'] = "Penyimpanan";
$lang['link_about'] = "Tentang saya";

$lang['content_about'] = "<p>Sahakaara adalah control panel berbasis web yang membantu menajemen Storage Clustering. Sahakaara dapat menambahkan dan menghapus Komputer dari daftar Host. Dengan Sahakaara kita dapat dengan mudah membuat sebuah Storage Clustering dari beberapa komputer yang sudah tidak terpakai lagi. </p><p>
Untuk masing-masing Server penyimpanan data, Sahakaara tidak membutuhkan adanya system operasi terinstall kerena Sahakaara menggunakan PXELINUX  server untuk memuatkan system operasi ke masing-masing Chunk server.
Dengan tidak adanya system operasi yang terinstall maka harddisk yang bisa digunakan untuk membentuk Storege Clustering semakin besar kapasitasnya. </p><p>Sahakaara menggunakan teknologi <a href=\"http://nbd.sourceforge.net/\" target=\"blank\">Network Block Device</a> dan digabungkan dengan <a href=\"http://neil.brown.name/blog/mdadm\" target=\"blank\">RAID berbasis Software</a> sebagai backend untuk menciptakan sebuah Storage Cluster yang handal dan berperforma maksimal.
Sahakaara dibangun menggunakan teknologi Opensource, menggunakan <a href=\"http://php.net/\" target=\"blank\">PHP</a> dan <a href=\"http://apache.org/\" target=\"blank\">Apache</a> untuk menyajikan tampilan ke pengguna dan memanfaatkan bash script untuk mengendalikan setiap chunk server. Sahakaara dikembangkan diatas Distribusi GNU/Linux Fedora 13.</p><p>
Sahakaara diambil dari bahasa sansekerta yang artinya Gotong royong. Setiap Chunk server Bergotong royong untuk membentuk sebuah media penyimpanan yang Lebih besar dan lebih baik
</p>";
$lang['content_about_skema'] = "Skema Penggunaan Sahakaara";


$lang['content_home'] = "Informasi Tentang Storage CLuster";
$lang['content_home_system_mem_total'] = "Memory terpasang: ";
$lang['content_home_system_mem_free'] = "Memory bebas: ";
$lang['content_home_system_mem_usage'] = "Memory digunakan: ";

$lang['content_disk_header'] = "";

$lang['content_node_header'] = "";

$lang['content_cluster_header'] = "Pada halaman ini akan disajikan data tentang Media penyimpanan yang telah disatukan :";
?>
