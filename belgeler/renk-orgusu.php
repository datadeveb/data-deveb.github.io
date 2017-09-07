<?php include '../toprak/head.html';?>
<?php include '../toprak/header.html';?>
<div class="kaplama" data-gnl="3p" data-ufk="3p">

  <div class="" data-gnl="3">
    <h1>Renk Örgüsü</h1>
  </div>
  <div class="" data-gnl="3">
    <h2>Tanımlamalar</h2>
  </div>
  <div class="" data-gnl="1" style="font-size:13px;">
    <p><b>Renklendirme Alanları:</b><br> metin - data-arka - kenar<br>
    Belirtilen 3 alana renklendirmeler yapabilirsiniz.<br><br>
    <b>Kullanım tipi:</b><br>( data-metin=" " data-arka=" " data-kenar=" " )<br> ( class="metin- data-arka- kenar-" )<br><br></p>
  </div>
  <div class="" data-gnl="1" style="font-size:13px;">
    <p><b>Renk Grubu:</b><br>
      <span data-arka="ana" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0; margin-right:3px;"></span>ana -
      <span data-arka="ara" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>ara -
      <span data-arka="birincil" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>birincil -
      <span data-arka="ikincil" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>ikincil<br>

    <b>Durum Renkleri:</b><br>
      <span data-arka="dikkat" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>dikkat -
      <span data-arka="tehlike" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>tehlike -
      <span data-arka="bilgi" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>bilgi -
      <span data-arka="olumlu" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>olumlu -
      <span data-arka="olumsuz" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>olumsuz<br>
    <b>Diğer Renkler:</b><br>
      <span data-arka="siyah" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>siyah -
      <span data-arka="gri" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:0;margin-right:3px;"></span>gri -
      <span data-arka="beyaz" style="display:inline-block; height:10px; width:10px; border-radius:50%; border-width:1px; border-style:solid;margin-right:3px;"></span>beyaz<br>
    <b>Kullanım tipi:</b><br>< metin="birincil" data-arka="ikincil" kenar="tam siyah" ><br> < class="metin-birincil data-arka-ikincil kenar-tam-siyah" ><br><br></p>
  </div>
  <div class="" data-gnl="1" style="font-size:13px;">
    <p><b>Renk Tonları:</b><br>100 - 200 - 300 - 400 - 500 - 600 - 700 - 800 - 900<br>
      <b>Renk Aydınlığı:</b><br>soluk - parlak<br>
    <b>Kullanım tipi:</b><br>( data-metin="birincil 300 soluk" data-arka="ikincil 600 parlak" data-kenar="tam siyah 800" )<br> ( class="metin-birincil metin-300 metin-soluk data-arka-ikincil data-arka-600 data-arka-parlak kenar-tam-siyah kenar-800" )<br><br></p>
  </div>
  <div class="" data-gnl="3">
    <h2>Örnek</h2>
  </div>
  <div class="" data-gnl="1 2p">
    <iframe data-gnl="2" height="300" src="//jsfiddle.net/deveb/yzfd5edf/embedded/html/" allowfullscreen="allowfullscreen" style="border:0 solid red;"></iframe>
  </div>
  <div class="" data-gnl="1 2p">
    <iframe data-gnl="2" height="300" src="//jsfiddle.net/deveb/yzfd5edf/embedded/result/" allowfullscreen="allowfullscreen" style="border:0 solid red;"></iframe>
  </div>
</div>
<?php include '../toprak/foot0.html';?>
