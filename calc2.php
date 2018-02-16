<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery UI range slider to show and hide blocks of content</title>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap-theme.css">
<link rel="stylesheet" href="dist/css/bootstrap-slider.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Franklin-normal-500">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="dist/bootstrap-slider.js"></script>

<style>
@font-face { 
  font-family: 'franklin';
  src: url('fonts/franklin-normal-300.woff');
  font-weight: 400;
  font-style: normal;
} 
body{
    background: #f7f7f7;
    font-family: "franklin",arial,helvetica,sans-serif;
    font-weight: 600;
}
h4{
    font-size: 15px;
    font-weight: 600;
}
.calc-2{
    margin-top: 50px;
    border: 1px solid #ccc;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    background: #fff;
    padding-top: 20px;
}
.slider.slider-horizontal {
  width: 100%;
  height: 20px;
}
.slider-tick-label{
  font-family: cursive;
}
.result{
  text-align: center;
  display: block;
  margin: 0 auto;
  padding: 5px;
  margin-bottom: 20px;
  background: rgba(204, 204, 204, 0.45);
  color: #333;
  font-weight: 300;
  font-size: 18px;
  border-radius: 2px;
}
.result p{
    margin-bottom: 0px;
    color: #023699;
    letter-spacing: 1px;
    text-shadow: 2px 1px 0px rgb(255, 255, 255);
    font-weight: 600;
}
.slider1{
  margin-top: 12px;
}
.slider2{
  margin-top: 12px;
}
.slider3{
  margin-top: 12px;
}
.slider4{
  margin-top: 12px;
}
.send-data{
  width: 100%;
  height: 36px;
  background: #A3BF26;
  border: none;
  color: #fff;
  font-size: 20px;
  box-shadow: 4px 4px 5px rgba(0,0,0,0.5);
}
.send-data:hover{
  background: #93a92d;
}
.send-data:focus {
    outline: none;
}
.percent{
    background: rgba(204, 204, 204, 0.43);
    width: 100%;
    display: block;
    text-align: center;
    height: 36px;
    border-radius: 3px;
    font-size: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-weight: 300;
}
.percent-res{
    margin-top: 10px;
    color: #333;
    letter-spacing: 1px;
    font-weight: 300;
}
.total-mortage{
  margin-top: 30px;
}
.total-mortage{
  background: rgba(86, 173, 194, 0.25);
}
.percent-total{
    font-size: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    height: 40px;
    color: #333;
    letter-spacing: 1px;
    font-weight: 300;
}
.asking{
    text-align: center;
}
.value-manualy{
        width: 100%;
    border: none;
    background: rgba(204, 204, 204, 0);
    text-align: left;
    color: #333;
    letter-spacing: 1px;
    font-weight: 300;
    font-size: 22px;
}
.result span{
    color: #777;
    letter-spacing: 1px;
    font-weight: 300;
    font-size: 22px;
}
.align-number{
    width: 80%;
    display: inline-block;
}
.align-number-rate{
    width: 50%;
    display: inline-block;
}
.value-manualy:focus {
    outline: none;
}
.tooltip{
    display: none;
}
.rate{
    margin-top: 50px;
}
.years{
    margin-top: 10px;
    border: none;
}
.years:focus {
    outline: none;
}
.amortization{
    margin-top: 20px;
}
.slider5{
    margin-top: 10px;
}
</style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10 calc-2">
                        <div class="row">
                            <h3 class="asking">Asking Price:</h3>
                            <div class="col-lg-3">
                                <div class="result">
                                    <span id="ex1CurrentSliderValLabel" class="">$</span>
                                    <div class="align-number">
                                        <input class="value-manualy" type="text" id="ex1SliderVal" maxlength="9" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 slider1">
                                <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000000" data-slider-step="1" data-slider-value="0"/>
                            </div>
                            <div class="col-lg-2">
                                <span class="percent">5%</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="result">
                                    <span id="ex2CurrentSliderValLabel" class="">$</span>
                                    <div class="align-number">
                                        <input class="value-manualy" type="text" id="ex2SliderVal" maxlength="9" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 slider2">
                                <input id="ex2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000000" data-slider-step="1" data-slider-value="0"/>
                            </div>
                            <div class="col-lg-2">
                                <span class="percent">10%</span>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="result">
                                    <span id="ex3CurrentSliderValLabel" class="">$</span>
                                    <div class="align-number">
                                        <input class="value-manualy" type="text" id="ex3SliderVal" maxlength="9" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 slider3">
                                <input id="ex3" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000000" data-slider-step="1" data-slider-value="0"/>
                            </div>
                            <div class="col-lg-2">
                                <span class="percent">15%</span>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="result">
                                    <span id="ex4CurrentSliderValLabel" class="">$</span>
                                    <div class="align-number">
                                        <input class="value-manualy" type="text" id="ex4SliderVal" maxlength="9" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 slider4">
                                <input id="ex4" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000000" data-slider-step="1" data-slider-value="0"/>
                            </div>
                            <div class="col-lg-2">
                                <span class="percent">20%</span>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="button" class="send-data" value="Go">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-lg-4">
                            <h4>Down payment:</h4>
                        </div>
                        <div class="col-lg-2">
                            <span class="percent">5%</span>
                            <span id="five-percent" class="percent percent-res"></span>
                        </div>
                        <div class="col-lg-2">
                            <span class="percent">10%</span>
                            <span id="ten-percent" class="percent percent-res"></span>
                        </div>
                        <div class="col-lg-2">
                            <span class="percent">15%</span>
                            <span id="fifteen-percent" class="percent percent-res"></span>
                        </div>
                        <div class="col-lg-2">
                            <span class="percent">20%</span>
                            <span id="twenty-percent" class="percent percent-res"></span>
                        </div>
                        </div>
                        <div class="row total-mortage">
                            <div class="col-lg-4">
                                <h4>Total Mortgage Required</h4>
                            </div>
                            <div class="col-lg-2">
                                <span id="five-percent-total" class="percent-total"></span>
                            </div>
                            <div class="col-lg-2">
                                <span id="ten-percent-total" class="percent-total"></span>
                            </div>
                            <div class="col-lg-2">
                                <span id="fifteen-percent-total" class="percent-total"></span>
                            </div>
                            <div class="col-lg-2">
                                <span id="twenty-percent-total" class="percent-total"></span>
                            </div>
                        </div>
                        <div class="row amortization">
                          <div class="col-lg-4">
                            <h4>Amortization period</h4>
                        </div>
                        <div class="col-lg-2">
                            <select class="percent years" name="" id="">
                                <option value="5" selected>5 years</option>
                                <option value="10">10 years</option>
                                <option value="15">15 years</option>
                                <option value="20">20 years</option>
                                <option value="25">25 years</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <select class="percent years" name="" id="">
                                <option value="5" selected>5 years</option>
                                <option value="10">10 years</option>
                                <option value="15">15 years</option>
                                <option value="20">20 years</option>
                                <option value="25">25 years</option>
                            </select>    </div>
                        <div class="col-lg-2">
                            <select class="percent years" name="" id="">
                                <option value="5" selected>5 years</option>
                                <option value="10">10 years</option>
                                <option value="15">15 years</option>
                                <option value="20">20 years</option>
                                <option value="25">25 years</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <select class="percent years" name="" id="">
                                <option value="5" selected>5 years</option>
                                <option value="10">10 years</option>
                                <option value="15">15 years</option>
                                <option value="20">20 years</option>
                                <option value="25">25 years</option>
                            </select>
                        </div>
                        </div>
                        <div class="row rate">
                            <div class="col-lg-12s">
                                <div class="col-lg-7 slider5">
                                    <input id="interest" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="9.00" data-slider-step="0.01" data-slider-value="0"/>
                                </div>
                                <div class="col-lg-2">
                                <div class="result">
                                    <div class="align-number-rate">
                                        <input class="value-manualy" type="text" id="ex5SliderVal" maxlength="4" value="0.00">
                                    </div>
                                    <span id="ex1CurrentSliderValLabel" class="">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
// With JQuery
//Shifters
$('#ex1').slider({
  formatter: function(value) {
    return '$ ' + value;
}
});
$('#ex2').slider({
  formatter: function(value) {
    return '$ ' + value;
}
});
$('#ex3').slider({
  formatter: function(value) {
    return '$ ' + value;
}
});
$('#ex4').slider({
  formatter: function(value) {
    return '$ ' + value;
}
});
$('#interest').slider({
  formatter: function(value) {
    return '$ ' + value;
}
});
//
$("#ex1").on("change", function(slideEvt) {
  var el = document.querySelector('.slider1 .round').getAttribute('aria-valuenow');
  document.querySelector('#ex1SliderVal').value = fun_group_price(el);
});
$("#ex2").on("change", function(slideEvt) {
  var el2 = document.querySelector('.slider2 .round').getAttribute('aria-valuenow');
  document.querySelector('#ex2SliderVal').value = fun_group_price(el2);
});
$("#ex3").on("change", function(slideEvt) {
  var el3 = document.querySelector('.slider3 .round').getAttribute('aria-valuenow');
  document.querySelector('#ex3SliderVal').value = fun_group_price(el3);
});
$("#ex4").on("change", function(slideEvt) {
  var el4 = document.querySelector('.slider4 .round').getAttribute('aria-valuenow');
  document.querySelector('#ex4SliderVal').value = fun_group_price(el4);
});
$("#interest").on("change", function(slideEvt) {
  var el5 = document.querySelector('.slider5 .round').getAttribute('aria-valuenow');
  document.querySelector('#ex5SliderVal').value = el5;
});

$("#ex1SliderVal").keyup(function() {
    var elm = $(this).val();
    var resnum = elm.replace(/\s/g, '');
    $(".slider1 .min-slider-handle").attr('aria-valuenow', resnum);
    $(this).val(fun_group_price(resnum));
});
$("#ex2SliderVal").keyup(function() {
    var elm = $(this).val();
    var resnum = elm.replace(/\s/g, '');
    $(".slider2 .min-slider-handle").attr('aria-valuenow', resnum);
    $(this).val(fun_group_price(resnum));
});
$("#ex3SliderVal").keyup(function() {
    var elm = $(this).val();
    var resnum = elm.replace(/\s/g, '');
    $(".slider3 .min-slider-handle").attr('aria-valuenow', resnum);
    $(this).val(fun_group_price(resnum));
});
$("#ex4SliderVal").keyup(function() {
    var elm = $(this).val();
    var resnum = elm.replace(/\s/g, '');
    $(".slider4 .min-slider-handle").attr('aria-valuenow', resnum);
    $(this).val(fun_group_price(resnum));
});

//Групировка цифр по разрядам
function fun_group_price(intprice){

  var result_total = String(intprice);

  var lenstr = result_total.length;

  switch(lenstr){
    case 4:{
      groupprice = result_total.substring(0,1)+","+result_total.substring(1,4);
      break;
  }

  case 5:{
      groupprice = result_total.substring(0,2)+","+result_total.substring(2,5);
      break;
  }

  case 6:{
      groupprice = result_total.substring(0,3)+","+result_total.substring(3,6); 
      break;
  }

  case 7:{
      groupprice = result_total.substring(0,1)+","+result_total.substring(1,4)+","+result_total.substring(4,7); 
      break;
  }

  default:{
      groupprice = result_total;  
  }
}

return groupprice;
}

$('.send-data').on('click', function(){
  var percents = parseInt(document.querySelector('.slider1 .round').getAttribute('aria-valuenow'));
  var percents2 = parseInt(document.querySelector('.slider2 .round').getAttribute('aria-valuenow'));
  var percents3 = parseInt(document.querySelector('.slider3 .round').getAttribute('aria-valuenow'));
  var percents4 = parseInt(document.querySelector('.slider4 .round').getAttribute('aria-valuenow'));
  
  var five = document.querySelector('#five-percent').innerHTML = Math.ceil((percents*5)/100);
  var ten = document.querySelector('#ten-percent').innerHTML = Math.ceil((percents2*10)/100);
  var fifteen = document.querySelector('#fifteen-percent').innerHTML = Math.ceil((percents3*15)/100);
  var twenty = document.querySelector('#twenty-percent').innerHTML = Math.ceil((percents4*20)/100);

  //Total Mortage Amount

  document.querySelector('#five-percent-total').innerHTML = Math.ceil(((percents-five)*4)/100 + (percents-five));
  document.querySelector('#ten-percent-total').innerHTML = Math.ceil(((percents-ten)*3.1)/100 + (percents-ten));
  document.querySelector('#fifteen-percent-total').innerHTML = Math.ceil(((percents-fifteen)*2.8)/100 + (percents-fifteen));
  document.querySelector('#twenty-percent-total').innerHTML = Math.ceil(percents-twenty + (percents-twenty));
});
</script>
</body>
</html>
