<?php
    $no_stpdkb = $stpdkbinfoInfo['NO_STPDKB'] ? $stpdkbinfoInfo['NO_STPDKB'] : '';
    $no_formulir = $stpdkbinfoInfo['NO_FORMULIR'] ? $stpdkbinfoInfo['NO_FORMULIR'] : '';    
    $kode_obyek = $stpdkbinfoInfo['KODE_OBYEK'] ? $stpdkbinfoInfo['KODE_OBYEK'] : '';
    $tgl_penetapan = $stpdkbinfoInfo['TGL_PENETAPAN'] ? $stpdkbinfoInfo['TGL_PENETAPAN'] : '';
    $pokok_pajak = $stpdkbinfoInfo['POKOK_PAJAK'] ? $stpdkbinfoInfo['POKOK_PAJAK'] : '';
    $sanksi = $stpdkbinfoInfo['SANKSI'] ? $stpdkbinfoInfo['SANKSI'] : '';
    $bunga = $stpdkbinfoInfo['BUNGA'] ? $stpdkbinfoInfo['BUNGA'] : '';
    $sanksi_persen = $stpdkbinfoInfo['SANKSI_PERSEN'] ? $stpdkbinfoInfo['SANKSI_PERSEN'] : '';
    $bunga_persen = $stpdkbinfoInfo['BUNGA_PERSEN'] ? $stpdkbinfoInfo['BUNGA_PERSEN'] : '';
    $total_pajak = $stpdkbinfoInfo['TOTAL_PAJAK'] ? $stpdkbinfoInfo['TOTAL_PAJAK'] : '';
    $keterangan = $stpdkbinfoInfo['KETERANGAN'] ? $stpdkbinfoInfo['KETERANGAN'] : '';
    $username = $stpdkbinfoInfo['USERNAME'] ? $stpdkbinfoInfo['USERNAME'] : '';
    $tgl_entry_edit = $stpdkbinfoInfo['TGL_ENTRY_EDIT'] ? $stpdkbinfoInfo['TGL_ENTRY_EDIT'] : '';
?>
<input type="hidden" name="no_stpdkb" value="<?php print $no_stpdkb; ?>">
<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="NO_FORMULIR" class="form-control input-staff-firstname" id="NO_FORMULIR" placeholder="Name" value="<?php print $no_formulir; ?>">
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="KODE_OBYEK" class="form-control input-staff-email" id="KODE_OBYEK" placeholder="Email" value="<?php print $kode_obyek; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="TGL_PENETAPAN" class="form-control input-staff-address" id="TGL_PENETAPAN" placeholder="Address" value="<?php print $tgl_penetapan; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="POKOK_PAJAK" class="form-control input-staff-mobile" id="POKOK_PAJAK" placeholder="mobile No" value="<?php print $pokok_pajak; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="SANKSI" class="form-control input-staff-salary" id="SANKSI" placeholder="Salary" value="<?php print $sanksi; ?>">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="BUNGA" class="form-control input-staff-salary" id="BUNGA" placeholder="Salary" value="<?php print $bunga; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="SANKSI_PERSEN" class="form-control input-staff-salary" id="SANKSI_PERSEN" placeholder="Salary" value="<?php print $sanksi_persen; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="BUNGA_PERSEN" class="form-control input-staff-salary" id="BUNGA_PERSEN" placeholder="Salary" value="<?php print $bunga_persen; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="TOTAL_PAJAK" class="form-control input-staff-salary" id="TOTAL_PAJAK" placeholder="Salary" value="<?php print $total_pajak; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="KETERANGAN" class="form-control input-staff-salary" id="KETERANGAN" placeholder="Salary" value="<?php print $keterangan; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="USERNAME" class="form-control input-staff-salary" id="USERNAME" placeholder="Salary" value="<?php print $username; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="TGL_ENTRY_EDIT" class="form-control input-staff-salary" id="TGL_ENTRY_EDIT" placeholder="Salary" value="<?php print $tgl_entry_edit; ?>">
            </div>
        </div>

    </div>