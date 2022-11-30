<div class="buttomcontent">
    <div class="price">
        <strong>Rp<?php echo number_format($data_bukti->terbilang, 2, ',', '.') ?></strong>
    </div>
    <div class="ttd">
        <?php $d = strtotime($data_bukti->tgl_buat); ?>
        <p style="font:normal normal 18px Calibri; text-align: right; padding-right: 15px; line-height: 50%; float:inherit">Tangerang Selatan,
            <?= date("d F Y", $d) ?><br>
        </p>

        <p style="font: 18px Calibri; text-indent: 65px; text-align: right; padding-right: 65px; line-height: 50%;">Yang Menerima</p>
        <br><br>

        <p style="font: 18px Calibri; text-indent: 60px; text-align: right; padding-right: 60px; line-height: 50%;"><u><strong>(<?= $data_bukti->nama_lengkap ?>)</strong></u></p>
        <p style="font: 18px Calibri; text-indent: 65px; text-align: right; padding-right: 85px; line-height: 50%;"><?= $data_bukti->nama_jabatan ?></p>
    </div>
</div>
<style>
.bottomcontent{
    display: flex !important;
    flex-direction: row !important;
    justify-content: space-between !important;
}
.price{
    display: flex;
    justify-content: center;
    width: 50%;
}
.price p{
    padding: 5px;
    width: 50%;
    height: 30px;
}
.ttd{
    flex-direction: column !important;
    width: 50%;
}
.ttd p{
    font: normal normal 18px Calibri !important;
    text-align: right !important;
    padding-right: 15px !important;
    line-height: 50% !important;
    float: inherit !important;
}

</style>