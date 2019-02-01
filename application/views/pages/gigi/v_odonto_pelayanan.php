
<div class="row">
  <div class="col-sm-6" style="padding: 11px;text-align: right;">
    <?php $j=18;$index = 1;
      for($i=1;$i <= 8;$i++){ ?>
          <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
          <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
            <style type="text/css">
              .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
            </style>
            <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
            </svg>
            <br>
            <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j-- ?></h6>
          </div>
      <?php }
     ?>
  </div>
  <div class="col-sm-6" id="b2" style="padding: 11px;">
    <?php $j=21;
      for($i=1;$i <= 8;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j++ ?></h6>
      </div>
      <?php }
     ?>
  </div>
</div>
<div class="row" style="text-align: center;">
  <div class="col-sm-6" style="padding: 11px;text-align: right;">
    <?php $j=55;
      for($i=1;$i <= 5;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j-- ?></h6>
      </div>
      <?php }
     ?>
  </div>
  <div class="col-sm-6" style="padding: 11px;text-align: left;">
    <?php $j=61;
      for($i=1;$i <= 5;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j++ ?></h6>
      </div>
      <?php }
     ?>
  </div>
</div>
<div class="row" style="text-align: center;">
  <div class="col-sm-6" style="padding: 11px;text-align: right;">
    <?php $j=85;
      for($i=1;$i <= 5;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j-- ?></h6>
      </div>
      <?php }
     ?>
  </div>
  <div class="col-sm-6" style="padding: 11px;text-align: left;">
    <?php $j=71;
      for($i=1;$i <= 5;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j++ ?></h6>
      </div>
      <?php }
     ?>
  </div>
</div>
<div class="row" style="text-align: center;">
  <div class="col-sm-6" style="padding: 11px;text-align: right;">
    <?php $j=48;
      for($i=1;$i <= 8;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j-- ?></h6>
      </div>
      <?php }
     ?>
  </div>
  <div class="col-sm-6" style="padding: 11px;text-align: left;">
    <?php $j=31;
      for($i=1;$i <= 8;$i++){ ?>
      <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <div class="float-left" style="display: inline-block;padding: 0;margin:0;box-sizing: border-box;text-align: center;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;width: 40px;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
        </style>
        <polygon class="st0" id="P<?php echo $j ?>T" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'T') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,8.5 90.5,8.5 72.5,26.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>L" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'L') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="7.5,8.5 8.5,90.5 26.5,71.5 26.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>R" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'R') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="90.5,8.5 90.5,90.5 72.5,71.5 72.5,26.5 "/>
            <polygon class="st0" id="P<?php echo $j ?>B" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'B') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index ?>" points="8.5,90.5 90.5,90.5 72.5,71.5 26.5,71.5 "/>
            <rect x="26.5" y="26.5" class="st0" id="P<?php echo $j ?>M" <?php foreach ($odonto as $od) {
              if ($od->p_gigi == 'P'.$j.'M') { echo 'style="fill:'.$od->kode_warna.';"';echo 'chose="'.$od->id_kg.'"'; }  
            }?> pdata="<?php echo $index++ ?>" width="46" height="45"/>
        </svg>
        <br>
        <h6 style="display: inline-block;padding: 0;margin:0;"><?php echo $j++ ?></h6>
      </div>
      <?php }
     ?>
  </div>
</div>
