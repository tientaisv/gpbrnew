<?php 
/*
 Template Name: Page Map
*/

?>
<?php get_header(); ?>
<style>
#googleMap{
    margin-top:-20px;

}
.info-main{width: 550px;}
.info-main .img{
    float: left;
    width: 40%;
}
.info-main .img img{width: 100%;height: auto;}
.info-content{float: left;width: 59%;padding: 0px 10px;}
.info-content address{margin-bottom: 5px;}
.info-content h3{
      color:#C12C1E;
}
.info-content a{
    color:#C12C1E;
}
.mota {
    position: absolute;
    bottom: 0px;
    background: rgba(255, 255, 255, 0.8);
    padding: 5px 15px;
    font-size: 10pt;
    font-weight: bold;
}
.boxed-content-wrapper{
    position: relative;
}
</style>
       <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyB8vCEuslzeFrFW19Td8b5iauN3juU1nTo">
        </script>
        <script>
          //Khoi tao Map
          function initialize() {
            //Khai bao cac thuoc tinh
            var mapProp = {
              //Tam ban do, quy dinh boi kinh do va vi do
              center:new google.maps.LatLng(10.411380,107.136224),
              //set default zoom cua ban do khi duoc load
              zoom:12,
              //Dinh nghia type
              mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            //Truyen tham so cho cac thuoc tinh Map cho the div chua Map
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var chanhtoa=new google.maps.Marker({
              position: new google.maps.LatLng(10.496283,107.170120),
              icon: "/icon/chanhtoa.png",
              title: "Nhà Thờ Chánh Tòa Bà Rịa",
              //draggable: true,
              //animation:google.maps.Animation.BOUNCE,
              });

            chanhtoa.setMap(map);

            var infochanhtoa = new google.maps.InfoWindow({
              content:'<div class="info-main"><div class="img"><img src="https://www.giaophanbaria.org/wp-content/uploads/2012/12/chanhtoa.jpg"/></div><div class="info-content"><h3>Nhà Thờ Chánh Tòa Bà Rịa</h3><address>227 Cách Mạng Tháng Tám, Phường Phước Hiệp, Thành phố Bà Rịa, Tỉnh Bà Rịa Vũng Tàu. </address></div></div>'
              });
            //bắt sự kiện click marker
            google.maps.event.addListener(chanhtoa, 'click', function() {
              //mở infowindow
              infochanhtoa.open(map,chanhtoa);
              });
            // nha tho mo
             var mo=new google.maps.Marker({
              position: new google.maps.LatLng(10.498646,107.173975),
              icon: "/icon/mo.png",
              title: "Nhà Thờ Mồ",
              //draggable: true,
              //animation:google.maps.Animation.BOUNCE,
              });

            mo.setMap(map);

            var infomo = new google.maps.InfoWindow({
              content:'<div class="info-main"><div class="img"><img src="http://2.bp.blogspot.com/-eGOWwL6ysGI/VdAtNQxMH6I/AAAAAAAANwg/VYeka9pWASU/s1600/Nha-tho-mo-ba-ria.jpg"/></div><div class="info-content"><h3>Nhà thờ mồ các vị Tử đạo Bà Rịa</h3><address>Huỳnh Tấn Phát, Phước Hiệp, Bà Rịa, Bà Rịa - Vũng Tàu. </address><p><a href="/category/tin-hanh-huong/nha-tho-mo-tu-dao">Xem chi tiết...</a></p></div></div>'

              });
            //bắt sự kiện click marker
            google.maps.event.addListener(mo, 'click', function() {
              //mở infowindow
              infomo.open(map,mo);
              });
             // Kito Vua
             var kio=new google.maps.Marker({
              position: new google.maps.LatLng(10.326446,107.084534),
              icon: "/icon/kitovua.png",
              title: "Đài Chúa Kitô vua – Núi Tao Phùng",
              //draggable: true,
              //animation:google.maps.Animation.BOUNCE,
              });

            kio.setMap(map);

            var infokio = new google.maps.InfoWindow({
              content:'<div class="info-main"><div class="img"><img src="https://sites.google.com/site/hocaucagiaitri/_/rsrc/1524121889048/kham-pha/tuong-chua-dang-tay-diem-du-lich-o-vung-tau/vung-tau.JPG"/></div><div class="info-content"><h3>Đài Chúa Kitô vua – Núi Tao Phùng</h3><address>Thùy Vân, Phường 2, Thành phố Vũng Tầu, Bà Rịa - Vũng Tàu. </address><p><a href="/category/tin-hanh-huong/trung-tam-tao-phung">Xem chi tiết...</a></p></div></div>'

              });
            //bắt sự kiện click marker
            google.maps.event.addListener(kio, 'click', function() {
              //mở infowindow
              infokio.open(map,kio);
              });
            // Bãi Dâu
             var baidau=new google.maps.Marker({
              position: new google.maps.LatLng(10.370436,107.062368),
              icon: "/icon/baidau.png",
              title: "Đền Thánh Đức Mẹ Bãi Dâu",
              //draggable: true,
              //animation:google.maps.Animation.BOUNCE,
              });

            baidau.setMap(map);

            var infobaidau = new google.maps.InfoWindow({
              content:'<div class="info-main"><div class="img"><img src="https://www.giaophanbaria.org/wp-content/uploads/2012/12/Baria-26.jpg"/></div><div class="info-content"><h3>Đền Thánh Đức Mẹ Bãi Dâu</h3><address>140A đường Trần Phú, P.5, TP. Vũng Tàu, tỉnh Bà Rịa – Vũng Tàu. </address><p><a href="/category/tin-hanh-huong/den-thanh-bai-dau">Xem chi tiết...</a></p></div></div>'

              });
            //bắt sự kiện click marker
            google.maps.event.addListener(baidau, 'click', function() {
              //mở infowindow
              infobaidau.open(map,baidau);
              });
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
            <div id="googleMap" style="width:100%;height:63vh;max-height:100vh"></div>
            <div class="mota">Giáo Phận Bà Rịa <br>BẢN ĐỒ CÁC ĐIỂM HÀNH HƯƠNG</div>
<?php get_footer(); ?>
