<?php

require_once 'lat1.php';

$io = new bio('queen','BDG','mancing','SMK');
echo "namanya...".$io->get_nama().'<br>';
echo "tempat lahir...".$io->get_alamat().'<br>';
echo "kelas...".$io->get_hoby().'<br>';
echo "status...".$io->get_sekolah().'<br>';


?>