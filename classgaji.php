<?php

abstract class pegawai
{
    protected $nama;
    protected $nip;
    protected $alamat;

    function __construct($nama, $nip, $alamat)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
    }

    function getNama()
    {
        return $this->nama;
    }

    function getNip()
    {
        return $this->nip;
    }

    function getAlamat()
    {
        return $this->alamat;
    }
}

class dosen extends pegawai
{
    private $totaldosen;

    function gajidosen($sks)
    {
        $this->totaldosen = 1500000 * $sks;
    }

    function getTotaldosen()
    {
        return $this->totaldosen;
    }
}

class staff extends pegawai
{
    private $totalstaff;

    function gajistaff($hari)
    {
        $this->totalstaff = 1500000 * $hari;
    }

    function getTotalstaff()
    {
        return $this->totalstaff;
    }
}

$dosen = new dosen("risa", "19226", "akehgfaifv");
$staff = new staff("hahh", "101981", "jhjhjhv");

$hari = $_POST['hari'];
$sks = $_POST['sks'];

/*echo $gaji.$sks;*/
$dosen->gajidosen($sks);
$staff->gajistaff($hari);

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="sks" placeholder="sks">
        <input type="submit" name="">
        <input type="text" name="" value="<?php echo $dosen->getTotaldosen(); ?>" readonly="readonly">
    </form>

    <form action="" method="post">
        <input type="text" name="hari" placeholder="hari">
        <input type="submit" name="">
        <input type="text" name="" value="<?php echo $staff->getTotalstaff(); ?>" readonly="readonly">
    </form>
</body>

</html>