<?php

include('C:\xampp\htdocs\simpeg_diktiNEW\lib\config.php');
include('C:\xampp\htdocs\simpeg_diktiNEW\lib\functions.php');
//require_once("../classes/class_drop_down.php");

if(is_array($_REQUEST)) extract($_REQUEST,EXTR_OVERWRITE);

 if($nip)
 {
$sql="select *
,to_char(tgl_lahir,'dd-mm-yyyy') as tgl_lahir, 
to_char(tglsk_cpns,'dd-mm-yyyy') as tglsk_cpns,
to_char(tmt_cpns::date,'dd-mm-yyyy') as tmt_cpns,
to_char(tglbkn_cpns,'dd-mm-yyyy') as tglbkn_cpns,
to_char(tglsk_pns,'dd-mm-yyyy') as tglsk_pns,
to_char(tmt_pns::date,'dd-mm-yyyy') as tmt_pns,
to_char(tglsk_pangkat,'dd-mm-yyyy') as tglsk_pangkat,
to_char(tmt_pangkat,'dd-mm-yyyy') as tmt_pangkat,
to_char(tglsk_jabatan,'dd-mm-yyyy') as tglsk_jabatan,
to_char(tmt_jabatan,'dd-mm-yyyy') as tmt_jabatan, 
to_char(tglbkn_cpns,'dd-mm-yyyy') as nota_bakn_tgl,
to_char(skgaji_tgl,'dd-mm-yyyy') as skgaji_tgl,
to_char(tmt_kgb,'dd-mm-yyyy') as tmt_kgb,

to_char(tgl_lulus,'dd-mm-yyyy') as tgl_lulus,
to_char(skpelantikan_tgl,'dd-mm-yyyy') as skpelantikan_tgl,
to_char(ayah_tgl_lahir,'dd-mm-yyyy') as ayah_tgl_lahir2,
to_char(ibu_tgl_lahir,'dd-mm-yyyy') as ibu_tgl_lahir2,
to_char(pasangan_tgl_lahir,'dd-mm-yyyy') as pasangan_tgl_lahir2,
to_char(tgl_kawin,'dd-mm-yyyy') as tgl_kawin         
 from biodata b where nip='$nip' ";
//echo $sql_skpd1;
$result=pg_query($sql);
$rs_edit=pg_fetch_all($result);
//print_r($rw_skpd1);


$row1=pg_fetch_array($result);
$sql="select namaunitkerja
 from master_unitkerja where lokasi_bagian='".$row1['lokasi_bagian']."'";
// echo $sql;
$result=pg_query($sql);
$rs2=pg_fetch_array($result);
$unit_kerja=$rs2['namaunitkerja'];


$sql="select *,
to_char(tmtpangkat,'dd-mm-yyyy') as tmtpangkat2,

to_char(tglsurat,'dd-mm-yyyy') as tglsurat2
 from riwayatpangkat where nip='$nip' order by tmtpangkat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_pangkat=pg_fetch_all($result);


$sql="select *,
to_char(tmt,'dd-mm-yyyy') as tmt2,

to_char(tglsurat,'dd-mm-yyyy') as tglsurat2

 from riwayatjabatan where nip='$nip' order by tmt ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_jabatan=pg_fetch_all($result);

$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2

 from riwayatorganisasi where nip='$nip' order by tglmulai ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_organisasi=pg_fetch_all($result);


$sql="select *,
to_char(tglsk,'dd-mm-yyyy') as tglsk2
 from riwayatpenghargaan where nip='$nip' order by tahun ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_penghargaan=pg_fetch_all($result);


$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsk,'dd-mm-yyyy') as tglsk2

 from riwayatpenugasan where nip='$nip' order by tglmulai ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_penugasan=pg_fetch_all($result);

$sql="select * from riwayatbahasa where nip='$nip' order by kodeusulan ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_bahasa=pg_fetch_all($result);

$sql="select *,
to_char(tanggalijazah,'dd-mm-yyyy') as tanggalijazah2
	    from riwayatpendidikann where nip='$nip' order by tanggalijazah ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_pendidikan=pg_fetch_all($result);


$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsertifikat,'dd-mm-yyyy') as tglsertifikat2
 from riwayatdiklat where nip='$nip' and jenisdiklat ilike 'struktural' order by tglsertifikat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_diklat_struktural=pg_fetch_all($result);


$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsertifikat,'dd-mm-yyyy') as tglsertifikat2 from riwayatdiklat where nip='$nip' and jenisdiklat ilike 'fungsional' order by tglsertifikat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_diklat_fungsional=pg_fetch_all($result);


$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsertifikat,'dd-mm-yyyy') as tglsertifikat2 from riwayatdiklat where nip='$nip' and jenisdiklat ilike 'teknis' order by tglsertifikat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_diklat_teknis=pg_fetch_all($result);



$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsertifikat,'dd-mm-yyyy') as tglsertifikat2 from riwayatpenataran where nip='$nip' order by tglsertifikat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_penataran=pg_fetch_all($result);


$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsertifikat,'dd-mm-yyyy') as tglsertifikat2 from riwayatseminar where nip='$nip' order by tglsertifikat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_seminar=pg_fetch_all($result);


$sql="select *,
to_char(tglmulai,'dd-mm-yyyy') as tglmulai2,

to_char(tglselesai,'dd-mm-yyyy') as tglselesai2,

to_char(tglsertifikat,'dd-mm-yyyy') as tglsertifikat2 from riwayatkursus where nip='$nip' order by tglsertifikat ";
//echo $sql_skpd1;
$result=pg_query($sql);
$riwayat_kursus=pg_fetch_all($result);

$sql="select *,
to_char(tgllahiranak,'dd-mm-yyyy') as tgllahiranak2
 from dataanak where nip='$nip' order by tgllahiranak ";
//echo $sql_skpd1;
$result=pg_query($sql);
$data_anak=pg_fetch_all($result);


 }

require_once ('../libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../templates';
$smarty->compile_dir = '../templates_c';
$smarty->cache_dir = '../cache';
$smarty->config_dir = '../configs';

$smarty->assign('riwayat_pangkat',$riwayat_pangkat);
$smarty->assign('riwayat_jabatan',$riwayat_jabatan);
$smarty->assign('riwayat_organisasi',$riwayat_organisasi);
$smarty->assign('riwayat_diklat_struktural',$riwayat_diklat_struktural);
$smarty->assign('riwayat_diklat_fungsional',$riwayat_diklat_fungsional);
$smarty->assign('riwayat_diklat_teknis',$riwayat_diklat_teknis);

$smarty->assign('riwayat_penataran',$riwayat_penataran);
$smarty->assign('riwayat_seminar',$riwayat_seminar);
$smarty->assign('riwayat_kursus',$riwayat_kursus);

$smarty->assign('riwayat_pendidikan',$riwayat_pendidikan);
$smarty->assign('riwayat_penugasan',$riwayat_penugasan);
$smarty->assign('riwayat_bahasa',$riwayat_bahasa);
$smarty->assign('riwayat_penghargaan',$riwayat_penghargaan);
$smarty->assign('data_anak',$data_anak);
$smarty->assign('unit_kerja', strtoupper( $unit_kerja));
$smarty->assign('user_level',$_SESSION['user_level']);
$smarty->assign('ketUser',$_SESSION['ketUser']);

$smarty->assign('e',$rs_edit);
$smarty->display('admin_templates/formulir_print.html');
?>
