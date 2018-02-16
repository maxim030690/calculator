<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mortgage Calculator</title>
    <link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="dist/css/bootstrap-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
    <script src="dist/bootstrap-slider.js"></script>

</head>

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
    /*background: rgba(204, 204, 204, 0.45);*/
    background: #f7f7f7;
    color: #333;
    font-weight: 300;
    font-size: 18px;
    border-radius: 2px;
}
.active-input {
    background: #FFFFFF;
    border: 1px solid #f7f7f7;
    border-radius: 3px;
}
.result p{
    margin-bottom: 0px;
    color: #023699;
    letter-spacing: 1px;
    text-shadow: 2px 1px 0px rgb(255, 255, 255);
    font-weight: 600;
}
.slider1{
    margin-top: 47px;
}
.slider2{
    margin-top: 45px;
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
.amortization-select-holder {
    position: relative;
}
.amortization-select-arrow {
    position: absolute;
    top: 30%;
    left: 90%;
}
.percent{
    background-color: #f7f7f7;
    background-image: url(/images/arrow.png);
    background-repeat: no-repeat;
    background-position: 95% 50%;
    width: 100%;
    display: block;
    text-align: center;
    padding-left: 25px;
    height: 36px;
    border-radius: 3px;
    font-size: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-weight: 300;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
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
    text-align: left;
}
.value-manualy{
    width: 100%;
    border: none;
    background: inherit;
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
.property-result-holder {
    width: 85%;
}
.value-manualy:focus {
    outline: none;
}
.rate{
    margin-top: 20px;
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
    margin-top: 46px;
}
.first-column{
    margin-top: 10px;
    margin-bottom: 10px;
    position: relative;
}
.error-message {
    display: none;
    position: absolute;
    right: 0;
    top: -23px;
    color: red;
}
.active-error-message {
    display: block;
}
.first-column input{
    border: 1px solid #CDD6D9;
    padding: 5px 10px;
    border-radius: 3px;
    background: #EDF6F8;
    width: 100%;
}
.first-column select{
    border: 1px solid #CDD6D9;
    padding: 5px 10px;
    border-radius: 3px;
    background: #EDF6F8;
    width: 100%;
}
.payments-title {
    font-size: 32px;
    font-weight: 600;
    font-style: normal;
    font-family: "franklin",arial,helvetica,sans-serif;
}
.total-mortage-block{
    font-size: 52px;
    line-height: 52px;
    font-weight: 300;
    font-style: normal;
    font-family: "franklin",arial,helvetica,sans-serif;
    display: block;
    border-radius: 2px;
    padding: 6px;
    text-align: center;
    color: #FF6600;
}
.modal-dialog {
    width: 800px;
}
.get-rate-button{
    margin-top: 30px;
    margin-left: 15px;
    background: #A3BF26;
    border: none;
    font-weight: 600;
}
.get-rate-button:hover{
    background: #91a72b;
}
.get-rate-button:focus{
    background: #91a72b;
}
.success-mail{
    float: left;
    font-size: 22px;
    color: #27b427;
}
.down-dollars-mar{
    margin-top: 36px;
}
.property{
    width: 49%;
    display: inline-block;
}
.align-input{
    text-align: left;
    float: left;
    padding-left: 20px;
    width: 25%;
}
.interest-span{
    display: block;
    text-align: left;
}
.down-result{
    width: 49%;
    display: inline-block;
}
.pie-chart-wrapper{
    position: relative;
}
.hidden-chart-hover {
    position: absolute;
    width: 100%;
    height: 100%;
}
.down-percent {
    width: 39%;
}
.down-payment {
    width: 59%;
}
@media (min-width: 768px) {
    .container {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }
    .calc-2 {
        margin-top: 0;
    }
    h4 {
        font-size: 38px;
    }
    .value-manualy {
        font-size: 42px;
    }
    span.dollars-percent {
        font-size: 46px;
    }
    .payments-title {
        font-size: 50px;
    }
    .total-mortage-block {
        font-size: 130px;
        display: block;
        line-height: normal;
    }
    .percent {
        height: 78px;
        font-size: 42px;
    }
    .slider-handle {
        top: -22px;
        width: 60px;
        height: 60px;
    }
    #ex1Slider {
        margin-bottom: 55px;
    }
    .slider.slider-horizontal .slider-track {
        height: 8px;
    }
    .get-rate {
        text-align: center;
    }
    .get-rate-button {
        width: 50%;
        font-size: 70px;
        margin-bottom: 15px;
    }
}
@media (min-width: 992px) {
    .container {
        width: 970px;
        margin-top: 50px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    h4 {
        font-size: 38px;
    }
    .value-manualy {
        font-size: 42px;
    }
    span.dollars-percent {
        font-size: 46px;
    }
    .payments-title {
        font-size: 50px;
    }
    .total-mortage-block {
        font-size: 130px;
        display: block;
    }
    .percent {
        height: 78px;
        font-size: 42px;
    }
    .slider-handle {
        top: -22px;
        width: 60px;
        height: 60px;
    }
    #ex1Slider {
        margin-bottom: 55px;
    }
    .slider.slider-horizontal .slider-track {
        height: 8px;
    }
    .get-rate-button {
        width: 50%;
        font-size: 70px;
        margin-bottom: 15px;
    }
}
@media (min-width: 1200px) {
    .container {
        width: 1170px;
        margin-top: 50px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    h4 {
        font-size: 15px;
    }
    .value-manualy {
        font-size: 22px;
    }
    span.dollars-percent {
        font-size: 22px;
    }
    .payments-title {
        font-size: 32px;
    }
    .total-mortage-block {
        font-size: 52px;
    }
    .percent {
        height: 36px;
        font-size: 20px;
    }
    .slider-handle {
        top: -3px;
        width: 20px;
        height: 20px;
    }
    .slider.slider-horizontal .slider-track {
        height: 4px;
    }
    .get-rate {
        text-align: left;
    }
    .get-rate-button {
        width: inherit;
        font-size: 18px;
    }

}

</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 calc-2">
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="asking">Asking Price:</h4>
                    <div class="result">
                        <span id="ex1CurrentSliderValLabel" class="dollars-percent">$</span>
                        <div class="align-number">
                            <input class="value-manualy" type="text" id="ex1SliderVal" maxlength="11" value="450,000">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 slider1">
                    <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000000" data-slider-step="1" data-slider-value="450000"/>
                </div>
                <div class="col-lg-4">
                    <h2 class="payments-title">Your payments will be</h2>
                    <div class=" total-mortage-block">
                        <span>$</span>
                        <span id="total-mortage">1,985</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <h4>Down payment:</h4>
                    <div class="result down-result down-percent">
                        <div class="align-number-rate">
                            <input class="value-manualy" type="text" id="ex2SliderVal" maxlength="4" value="20">
                        </div>
                        <span id="ex1CurrentSliderValLabel" class="dollars-percent">%</span>
                    </div>
                    <div class="result down-result down-payment">
                        <span id="" class="dollars-percent">$</span>
                        <div class="align-number">
                            <input class="value-manualy" type="text" id="down-dollars" maxlength="9" value="90,000">
                        </div>
                    </div>
                    <h4>Mortgage Insurance</h4>
                    <div class="result">
                        <span id="" class="dollars-percent">$</span>
                        <div class="align-number">
                            <input class="value-manualy" type="text" id="mortgage-dollars" maxlength="9" value="0" disabled>
                        </div>
                    </div>
                    <h4>Total Mortgage Required</h4>
                    <div class="result">
                        <span id="" class="dollars-percent">$</span>
                        <div class="align-number">
                            <input class="value-manualy" type="text" id="result-dollars" maxlength="9" value="360,000" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 slider2">
                    <input id="ex2" data-slider-id='ex1Slider' type="text" data-slider-min="5" data-slider-max="100" data-slider-step="1" data-slider-value="20"/>
                </div>
                <div class="col-lg-4 pie-chart-wrapper">
<!--                    <div class="hidden-chart-hover"></div>-->
                    <div>
                        <canvas id="myChart" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="row mortgage-insurance">
                <div class="col-lg-4">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">

                </div>
            </div>
            <hr>
            <div class="row rate">
                <div class="col-lg-4">
                    <h4>Interest Rate</h4>
                    <div class="result">
                        <div class="align-number-rate align-input">
                            <input class="value-manualy" type="text" id="ex5SliderVal" maxlength="4" value="3">
                        </div>
                        <span id="ex3CurrentSliderValLabel" class="interest-span dollars-percent">%</span>
                    </div>
                </div>
                <div class="col-lg-4 slider5">
                    <input id="interest" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="9.00" data-slider-step="0.01" data-slider-value="3"/>
                </div>
            </div>
            <div class="row amortization">
                <div class="col-lg-4">
                    <h4>Amortization period</h4>
                    <div class="amortization-select-holder">
                        <select class="percent years" name="amortization-years" id="amortization-select">
                            <option value="5">5 years</option>
                            <option value="10">10 years</option>
                            <option value="15">15 years</option>
                            <option value="20">20 years</option>
                            <option value="25" selected>25 years</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rate">
                <div class="col-lg-4">
                    <h4>Property Tax / year</h4>
                    <div class="result property">
                        <div class="align-number-rate">
                            <input class="value-manualy" type="text" id="property-percent" maxlength="4" value="0.75">
                        </div>
                        <span id="" class="dollars-percent">%</span>
                    </div>
                    <div class="result property">
                        <span id="" class="dollars-percent">$</span>
                        <div class="align-number-rate property-result-holder">
                            <input class="value-manualy" type="text" id="property-result" maxlength="6" value="3,375" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rate">
                <div class="col-lg-4">
                    <h4>Home Insurance / Year</h4>
                    <div class="result">
                        <span id="" class="dollars-percent">$</span>
                        <div class="align-number">
                            <input class="value-manualy" type="text" id="insuranse" maxlength="4" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rate">
                <div class="col-lg-4">
                    <h4>Common (Strata) Fees / Month</h4>
                    <div class="result">
                        <span id="" class="dollars-percent">$</span>
                        <div class="align-number">
                            <input class="value-manualy" type="text" id="fees" maxlength="4" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">

                </div>

                <div class="col-lg-6">

                </div>
            </div>
            <div class="row get-rate">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Contact form</h4>
                            </div>
                            <form id="mail">
                                <div class="modal-body">
                                    <div class="row">
                                        <form action="send_mail.php" method="post">
                                            <div class="col-lg-5">
                                                <div class="col-lg-12 first-column">
                                                    <div class="col-lg-3">
                                                        <span>Name: </span>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input id="name" type="text" name="name" placeholder="Name">
                                                    </div>
                                                    <span class="error-message">The name must be only from letters</span>
                                                </div>
                                                <div class="col-lg-12 first-column">
                                                    <div class="col-lg-3">
                                                        <span>Phone: </span>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input id="phone" type="text" name="phone" placeholder="Phone" required>
                                                    </div>
                                                    <span class="error-message">The phone must be only from numbers</span>
                                                </div>
                                                <div class="col-lg-12 first-column">
                                                    <div class="col-lg-3">
                                                        <span>Email: </span>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input id="email" type="email" name="email" placeholder="Email" required>
                                                    </div>
                                                    <span class="error-message">The email must be like "box@mail.com"</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="col-lg-12 first-column">
                                                    <div class="col-lg-5">
                                                        <span>Location:</span>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input id="location" type="text" name="location" placeholder="Location" required>
                                                    </div>
                                                    <span class="error-message">The location must be only from letters</span>
                                                </div>
                                                <div class="col-lg-12 first-column">
                                                    <div class="col-lg-5">
                                                        <span>I am looking for:</span>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <select name="looking" id="looking-for" required>
                                                            <option  value="" selected disabled>Please select</option>
                                                            <option value="purchase">Purchase</option>
                                                            <option value="renewal">Renewal</option>
                                                            <option value="refinance">Refinance</option>
                                                            <option value="access">Access equity</option>
                                                            <option value="not">Not sure</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 first-column">
                                                    <div class="col-lg-5">
                                                        <span>Approximate mortgage amount:</span>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <select name="approximate" id="mortgage" required>
                                                            <option value="" selected disabled>Please select</option>
                                                            <option value="less-100">Less than $100,000</option>
                                                            <option value="100-150">$100,000-$150,000</option>
                                                            <option value="150-200">$150,000-$200,000</option>
                                                            <option value="200-250">$200,000-$250,000</option>
                                                            <option value="250-300">$250,000-$300,000</option>
                                                            <option value="300-350">$300,000-$350,000</option>
                                                            <option value="350-400">$350,000-$400,000</option>
                                                            <option value="450-500">$450,000-$500,000</option>
                                                            <option value="500-550">$500,000-$550,000</option>
                                                            <option value="550-600">$550,000-$600,000</option>
                                                            <option value="600-650">$600,000-$650,000</option>
                                                            <option value="650-700">$650,000-$700,000</option>
                                                            <option value="750-800">$750,000-$800,000</option>
                                                            <option value="800-850">$800,000-$850,000</option>
                                                            <option value="850-900">$850,000-$900,000</option>
                                                            <option value="900-950">$900,000-$950,000</option>
                                                            <option value="950-1000">$950,000-$1,000,000</option>
                                                            <option value="more-1000">More than $1,000,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <span class="success-mail"></span>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg get-rate-button" data-toggle="modal" data-target="#myModal">Get rate</button>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script>
    $(function () {

        // With JQuery
        //Shifters

        $('#ex1').slider({
            formatter: function(value) {
                return '$ ' + fun_group_price(value);
            }
        });
        $('#ex2').slider({
            formatter: function(value) {
                return value+' %';
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
                return value+' %';
            }
        });
        //Add value and comma to inputs
        $("#ex1").on("change", function(slideEvt) {
            var el = document.querySelector('.slider1 .round').getAttribute('aria-valuenow');
            document.querySelector('#ex1SliderVal').value = fun_group_price(el);
        });
        $("#ex2").on("change", function(slideEvt) {
            var el2 = document.querySelector('.slider2 .round').getAttribute('aria-valuenow');
            document.querySelector('#ex2SliderVal').value = fun_group_price(el2);
        });
        $("#interest").on("change", function(slideEvt) {
            var el5 = document.querySelector('.slider5 .round').getAttribute('aria-valuenow');
            document.querySelector('#ex5SliderVal').value = el5;
        });


        //Change data in inputs and sliders
        $("#ex1SliderVal").keyup(function(slideEvt) {
            var dolars_string = $(this).val();
            var dolars = dolars_string.replace(/[^\d]+/g, '');

            var total_sum = dolars;
            total_sum = total_sum.replace(",", "");
            total_sum = parseInt(total_sum);
            var total_sum_rest;
            var down_payment = total_sum*0.05;
            var down_payment_rest;
            var down_percent = 5;
            if (total_sum > 500000 && total_sum <= 1000000) {
                total_sum_rest = total_sum-500000;
                down_payment_rest = total_sum_rest*0.1;
                down_payment = down_payment_rest+25000;
                down_percent = down_payment/(total_sum/100);
                down_percent = down_percent.toFixed(1);
            }
            if(total_sum > 1000000) {
                down_payment = total_sum*0.2;
                down_percent = 20;
            }


            $("#ex1").slider('setValue', dolars);
            $("#ex2").slider('setValue', down_percent);
            $("#ex2SliderVal").val(down_percent);
            $("#down-dollars").val(fun_group_price(down_payment.toFixed(0)));
            if(isNaN(down_payment)){
                $('#down-dollars').val(0);
            }


            var am_percent = document.querySelector('#ex5SliderVal').value;
            var percent_down = down_percent;
            var years = document.querySelector('.years').value;

//        if(dolars != ''){
//            calculate(dolars, percent_down, years, am_percent, null);
//        }
            var property_percent = $("#property-percent").val();

            var property_result = parseInt(dolars*(property_percent/100));
            $("#property-result").val(fun_group_price(property_result));

            var property_chart = parseInt(dolars*(property_percent/100));

            var insuranse = parseInt($("#insuranse").val());
            var payment = $('#total-mortage').html();
            var payment = payment.replace(",", "");
            var strata_fees = parseInt($("#fees").val());

            if(dolars != ''){
                calculate(dolars, percent_down, years, am_percent, null);
            }
        }).keydown(function () {
            $(this).keyup();
        });

        $("#ex2SliderVal").keyup(function() {
            var dolars_string = $("#ex1SliderVal").val();
            var dolars = dolars_string.replace(/[^\d]+/g, '');
            var am_percent = document.querySelector('#ex5SliderVal').value;
            var percent_down = document.querySelector('#ex2SliderVal').value;
            var years = document.querySelector('.years').value;
            var down_payment_value_bar = parseFloat($(this).val());

            var to_replace = $(this).val();
            var replaced = to_replace.replace(/[a-z]/g, '');

            $("#ex2SliderVal").val(replaced);

            if($(this).val().slice(-1) == ','){
                $('#ex2SliderVal').val($(this).val().replace(',', '.'));
            }

//        if($(this).val().charAt(2) == '.'){
//            $('#ex2SliderVal').val($(this).val().slice(0, -1));
//        }

            if($(this).val() > 100) {
                $('#ex2SliderVal').val(5);
                return;
            }

            $(this).focusout(function () {
                if($(this).val() < 5 && $(this).val() !== '') {
                    $("#ex2SliderVal").val(5);
                    alert("Down payment, can not be less than 5%");
                }
                if($(this).val() == '') {
                    $("#ex2SliderVal").val(5);
                }
            });
            $("#ex2").slider("setValue", down_payment_value_bar);
            var down_dollars = dolars*(percent_down/100);
            down_dollars = down_dollars.toFixed(0);

            if($(this).val().slice(-1) !== '.' && $(this).val() > 5){
                $("#down-dollars").val(fun_group_price(down_dollars));
            }
            percent_down = $(this).val();

            if(dolars != ''){
                calculate(dolars, percent_down, years, am_percent, null);
            }
        });

        $("#ex2").on("change", function() {
            var dolars_string = document.querySelector('#ex1SliderVal').value;
            var dolars = dolars_string.replace(/[^\d]+/g, '');
            var am_percent = document.querySelector('#ex5SliderVal').value;
            var percent_down = document.querySelector('#ex2SliderVal').value;
            var years = document.querySelector('.years').value;
//        if(dolars != ''){
//            calculate(dolars, percent_down, years, am_percent, null);
//        }

            var down_dollars = parseInt(dolars*(percent_down/100));
            $("#down-dollars").val(fun_group_price(down_dollars));

            var down_percent = parseInt($(this).val());

            var property_percent = $("#property-percent").val();
            var property_chart = parseInt(dolars*(property_percent/100));
            var insuranse = parseInt($("#insuranse").val());
            var payment = parseFloat($("#total-mortage").html());
            var strata_fees = parseInt($("#fees").val());
            if(dolars != ''){
                calculate(dolars, percent_down, years, am_percent, null);
            }
        });

        $("#down-dollars").keyup(function () {
            var dolars_string = $("#ex1SliderVal").val();
            var dolars = dolars_string.replace(/[^\d]+/g, '');
            dolars = parseInt(dolars);
            var percent_down = 5;
            var years = document.querySelector('.years').value;
            var am_percent = document.querySelector('#ex5SliderVal').value;

            var down_payment = $(this).val();
            down_payment = down_payment.replace(/,/g, '');
            down_payment = parseInt(down_payment);
            percent_down = down_payment/(dolars/100);
            if(percent_down < 5) {
                percent_down = 5.0;
            }
            if(percent_down > 100) {
                percent_down = 100.0;
            }
            percent_down = percent_down.toFixed(1);
            var val_with_comma = fun_group_price(down_payment);
            $(this).val(val_with_comma);

            if(down_payment > dolars) {
                $(this).val(fun_group_price(dolars));
            }

            $('#ex2SliderVal').val(percent_down);
            if(dolars > 500000 && dolars <= 1000000) {
                percent_down = down_payment/(dolars/100);
                percent_down = percent_down.toFixed(1);
                if(percent_down < 5) {
                    percent_down = 5;
                }
                $("#ex2SliderVal").val(percent_down);
            }

            if(dolars > 1000000) {
                percent_down = down_payment/(dolars/100);
                percent_down = percent_down.toFixed(1);
                if(percent_down < 20) {
                    percent_down = 20;
                }
                $("#ex2SliderVal").val(percent_down);
            }

            var set_down_payment = $(this).val();
            set_down_payment = set_down_payment.replace(/,/g, '');
            set_down_payment = parseInt(set_down_payment);
            if(isNaN(set_down_payment)) {
                $(this).val('');
                $('#ex2SliderVal').val(5);
            }
            if(dolars != '' && !isNaN(set_down_payment)){
                calculate(dolars, percent_down, years, am_percent, set_down_payment);
            }
            if(!isNaN(percent_down)) {
                $('#ex2').slider('setValue', percent_down);
            }
        }).keydown(function () {
            $(this).keyup();
        });

        $('#down-dollars').focusout(function () {
            var dolars_string = $("#ex1SliderVal").val();
            var dolars = dolars_string.replace(/[^\d]+/g, '');
            dolars = parseInt(dolars);
            var down_payment = $(this).val();
            down_payment = down_payment.replace(/,/g, '');
            down_payment = parseInt(down_payment);
            var needed_down_percent;
            var needed_down_payment;
            var calc_down_percent;

            if(dolars <= 500000) {
                needed_down_percent = 5;
                calc_down_percent = down_payment/(dolars/100);
                if(calc_down_percent < needed_down_percent) {
                    needed_down_payment = dolars*(needed_down_percent/100);
                    $(this).val(fun_group_price(needed_down_payment));
                    alert("Down payment, can not be less than $ " + fun_group_price(needed_down_payment));
                }
            }
            if (dolars > 500000 && dolars <= 1000000) {
                calc_down_percent = down_payment/(dolars/100);

                var dolars_rest = dolars-500000;
                var down_payment_rest = dolars_rest*0.1;
                var needed_down_payment = down_payment_rest+25000;
                needed_down_percent = needed_down_payment/(dolars/100);

                if(calc_down_percent < needed_down_percent) {
                    $(this).val(fun_group_price(needed_down_payment));
                    alert("Down payment, can not be less than $ " + fun_group_price(needed_down_payment));
                }
            }
            if(dolars > 1000000) {
                needed_down_percent = 20;
                calc_down_percent = down_payment/(dolars/100);
                if(calc_down_percent < needed_down_percent) {
                    needed_down_payment = dolars*(needed_down_percent/100);
                    $(this).val(fun_group_price(needed_down_payment));
                    alert("Down payment, can not be less than $ " + fun_group_price(needed_down_payment));
                }
            }

            $(this).keyup();
        });

        $("#insuranse, #fees").keyup(function() {
            var dolars_string = document.querySelector('.slider1 .round').getAttribute('aria-valuenow');
            var dolars = dolars_string.replace(/[^\d]+/g, '');
            var property_percent = $("#property-percent").val();
            var property_chart = parseInt(dolars*(property_percent/100));
            var insuranse = parseInt($("#insuranse").val());
            var payment = parseFloat($("#total-mortage").html());
            var strata_fees = parseInt($("#fees").val());

            if($(this).val() == '.' || $(this).val() == ',') {
                $(this).val(1);
            }

            if($(this).val().charAt(0) == '0' && $(this).val().charAt(1) == '0') {
                $(this).val(1);
            }

            if($(this).val().slice(-1) == '.' || $(this).val().slice(-1) == ',') {
                $(this).val($(this).val().slice(0, -1));
            }

            if($(this).val().length == 4) {
                var add_comma = parseInt($(this).val());
                var val_with_comma = fun_group_price(add_comma);
                $(this).val(val_with_comma);
            }

            var am_percent = document.querySelector('#ex5SliderVal').value;
            var percent_down = document.querySelector('#ex2SliderVal').value;
            var years = document.querySelector('.years').value;

            if(dolars != ''){
                calculate(dolars, percent_down, years, am_percent, null);
            }
        }).keydown(function () {
            $(this).keyup();
        });

        $("#insuranse, #fees").focusout(function () {
           if($(this).val() == '') {
               $(this).val(0);
           }
           $(this).keyup();
        });

        $("#ex1").on("change", function() {
            var dolars_string = $(this).val();
            var dolars = dolars_string.replace(/[^\d]+/g, '');

            var total_sum = $(this).val();
            total_sum = total_sum.replace(",", "");
            var total_sum_rest;
            var down_payment = total_sum*0.05;
            var down_payment_rest;
            var down_percent = 5;
            if (total_sum > 500000 && total_sum <= 1000000) {
                total_sum_rest = total_sum-500000;
                down_payment_rest = total_sum_rest*0.1;
                down_payment = down_payment_rest+25000;
                down_percent = down_payment/(total_sum/100);
                down_percent = down_percent.toFixed(1);
            }
            if(total_sum >= 1000000) {
                down_percent = 20;
            }
            $("#ex1").slider('setValue', dolars);
            $("#ex2").slider('setValue', down_percent);
            $("#ex2SliderVal").val(down_percent);
            $("#down-dollars").val(fun_group_price(down_payment.toFixed(0)));

            var am_percent = document.querySelector('#ex5SliderVal').value;
            var percent_down = down_percent;
            var years = document.querySelector('.years').value;

            var property_percent = $("#property-percent").val();

            var property_chart = parseInt(dolars*(property_percent/100));
            var insuranse = parseInt($("#insuranse").val());
            var payment = $('#total-mortage').html();
            var payment = payment.replace(",", "");
            var strata_fees = parseInt($("#fees").val());

            var property_result = parseInt(dolars*(property_percent/100));
            $("#property-result").val(fun_group_price(property_result));

            if(dolars != ''){
                calculate(dolars, percent_down, years, am_percent, null);
            }
        });

        $("#property-percent").keyup(function() {
            var dolars_string = $("#ex1SliderVal").val();
            var dolars = dolars_string.replace(/[^\d]+/g, '');
            var property_percent = $("#property-percent").val();

            var am_percent = document.querySelector('#ex5SliderVal').value;
            var percent_down = document.querySelector('#ex2SliderVal').value;
            var years = document.querySelector('.years').value;

            var to_replace = $(this).val();
            var replaced = to_replace.replace(/[a-z]/g, '');

            $("#property-percent").val(replaced);

            if($(this).val() == '.' || $(this).val() == ',') {
                $(this).val('0.');
            }

            if($(this).val().slice(-1) == ','){
                $('#property-percent').val($(this).val().replace(',', '.'));
            }

            if($(this).val().charAt(2) == '.'){
                $('#property-percent').val($(this).val().slice(0, -1));
            }

            if (property_percent > 9 || property_percent < 0) {
                alert("error! Property Tax must be from 0% to 9%");
                $("#property-percent").val(1);
            }

            var property_result = parseInt(dolars*(property_percent/100));
            if($(this).val().slice(-1) !== '.'){
                $("#property-result").val(fun_group_price(property_result));
            }
//            am_percent = $(this).val();
            if(dolars != ''){
                calculate(dolars, percent_down, years, am_percent, null);
            }

        });

        $('#property-percent').focusout(function () {
            if($(this).val() == ''){
                $(this).val(1);
            }
            $(this).keyup();
        });

        //Calculate for each percents
        function calculate(dolars, percent_down, years, am_percent, set_down_payment){
            var am_percent_int = parseFloat(am_percent);
            var years_int = parseFloat(years);
            var dolars_int = parseFloat(dolars);
            var percent_int = parseInt(percent_down);
            switch(percent_int){
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:{
                    if(set_down_payment == null){
                        var down_payment = Math.ceil(dolars_int - (dolars_int*5)/100);
                    } else {
                        var down_payment = Math.ceil(dolars_int - set_down_payment);
                    }
                    var final_result = Math.ceil(down_payment + (down_payment * 0.04));
                    var total_mortgage = fun_group_price(final_result);
                    var mortgage_dollars = parseInt(down_payment * 0.04);
                    $("#mortgage-dollars").val(fun_group_price(mortgage_dollars));
                    $("#result-dollars").attr('value', total_mortgage);
                    total_mortgage_payment(dolars_int, years_int, am_percent_int);
                    break;
                }
                case 10:
                case 11:
                case 12:
                case 13:
                case 14:{
                    if(set_down_payment == null){
                        var down_payment = Math.ceil(dolars_int - (dolars_int*10)/100);
                    } else {
                        var down_payment = Math.ceil(dolars_int - set_down_payment);
                    }
                    var final_result = Math.ceil(down_payment + (down_payment * 0.031));
                    var total_mortgage = fun_group_price(final_result);
                    var mortgage_dollars = parseInt(down_payment * 0.04);
                    $("#mortgage-dollars").val(fun_group_price(mortgage_dollars));
                    $("#result-dollars").attr('value', total_mortgage);
                    total_mortgage_payment(dolars_int, years_int, am_percent_int);
                    break;
                }
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:{
                    if(set_down_payment == null){
                        var down_payment = Math.ceil(dolars_int - (dolars_int*15)/100);
                    } else {
                        var down_payment = Math.ceil(dolars_int - set_down_payment);
                    }
                    var final_result = Math.ceil(down_payment + (down_payment * 0.028));
                    var total_mortgage = fun_group_price(final_result);
                    var mortgage_dollars = parseInt(down_payment * 0.04);
                    $("#mortgage-dollars").val(fun_group_price(mortgage_dollars));
                    $("#result-dollars").attr('value', total_mortgage);
                    total_mortgage_payment(dolars_int, years_int, am_percent_int);
                    break;
                }
                case 20:{
                    if(set_down_payment == null){
                        var down_payment = Math.ceil(dolars_int - (dolars_int*20)/100);
                    } else {
                        var down_payment = Math.ceil(dolars_int - set_down_payment);
                    }
                    var final_result = Math.ceil(down_payment);
                    var total_mortgage = fun_group_price(final_result);
                    var mortgage_dollars = 0;
                    $("#mortgage-dollars").val(fun_group_price(mortgage_dollars));
                    $("#result-dollars").attr('value', total_mortgage);
                    total_mortgage_payment(dolars_int, years_int, am_percent_int);
                    break;
                }
                case percent_int:{
                    if(set_down_payment == null){
                        var down_payment = Math.ceil(dolars_int - (dolars_int*percent_int)/100);
                    } else {
                        var down_payment = Math.ceil(dolars_int - set_down_payment);
                    }
                    var final_result = Math.ceil(down_payment);
                    var total_mortgage = fun_group_price(final_result);
                    var mortgage_dollars = 0;
                    $("#mortgage-dollars").val(fun_group_price(mortgage_dollars));
                    $("#result-dollars").attr('value', total_mortgage);
                    total_mortgage_payment(dolars_int, years_int, am_percent_int);
                    break;
                }
                default:{

                }
            }
        }


        function total_mortgage_payment(sum_dollars, years, interest_rate){
            var property_taxes = $("#property-result").val();
            property_taxes = property_taxes.replace(/,/g, "");
            property_taxes = property_taxes/12;
            var insuranse = $("#insuranse").val();
            insuranse = insuranse.replace(/,/g, '');
            insuranse = insuranse/12;
            var fees = $("#fees").val();
            fees = fees.replace(/,/g, '');
            fees = parseFloat(fees);
            ////
            interest_rate = interest_rate/100;
            var rate = Math.pow((interest_rate/2+1), 1/6)-1;
            var nper = years*12;
            var pv = parseFloat($('#result-dollars').val().replace(/,/g, ""));

            function pmt(interest, months, loan) {
                months = months;
                interest = interest;
                amount = interest * -loan * Math.pow((1 + interest), months) / (1 - Math.pow((1 + interest), months));
                return amount;
            }

            var pmt_result = pmt(rate,nper,pv);

            var a = pmt_result+property_taxes+insuranse+fees;
            ////

            property_taxes = property_taxes.toFixed(0);

            var mortgage_insurance = $('#mortgage-dollars').val();
            mortgage_insurance = mortgage_insurance.replace(/,/, "");
            mortgage_insurance = parseFloat(mortgage_insurance);
            mortgage_insurance = mortgage_insurance/nper;
            mortgage_insurance = mortgage_insurance.toFixed(0);

            var payment_pmt = pmt_result.toFixed(0);
            payment_pmt = payment_pmt-mortgage_insurance;

            fees = fees.toFixed(0);

            insuranse = insuranse.toFixed(0);

            pie_chart(property_taxes, payment_pmt, mortgage_insurance, fees, insuranse);
            document.querySelector('#total-mortage').innerHTML = fun_group_price(parseFloat(a).toFixed(0));

        }

        $("#ex1SliderVal").keyup(function() {
            var elm = $(this).val();
            var resnum = elm.replace(/[^\d]+/g, '');
            $(".slider1 .min-slider-handle").attr('aria-valuenow', resnum);
            $(this).val(fun_group_price(resnum));
        });

        $("#ex5SliderVal").keyup(function() {
            var am_percent = parseFloat($(this).val());

            var to_replace = $(this).val();
            var replaced = to_replace.replace(/[a-z]/g, '');

            $("#ex5SliderVal").val(replaced);

            if($(this).val().slice(-1) == ','){
                $('#ex5SliderVal').val($(this).val().replace(',', '.'));
            }

            if($(this).val().charAt(2) == '.'){
                $('#ex5SliderVal').val($(this).val().slice(0, -1));
            }

            if (am_percent > 9 || am_percent < 1) {
                alert("error! Interest rate must be from 1% to 9%");
                $("#ex5SliderVal").val(1);
            }

            $("#interest").slider('setValue', am_percent);
            var sum_dollars = document.querySelector('#ex1SliderVal').value;
            var sum_dollars_int = parseInt(sum_dollars.replace(/[^\d]+/g, ''));
            var years = parseInt(document.querySelector('.years').value);

            if(!isNaN(am_percent)){
                total_mortgage_payment(sum_dollars_int, years, am_percent);
            }

            var property_percent = $("#property-percent").val();
            var property_chart = parseInt(sum_dollars_int*(property_percent/100));
            var insuranse = parseInt($("#insuranse").val());
            var payment = parseFloat($("#total-mortage").html());
            var strata_fees = parseInt($("#fees").val());



        });

        $(".years").on("change", function() {
            var years = parseFloat($(this).val());
            var am_percent = parseFloat(document.querySelector('#ex5SliderVal').value);
            var sum_dollars = document.querySelector('#ex1SliderVal').value;
            var sum_dollars_int = parseInt(sum_dollars.replace(/[^\d]+/g, ''));

            if(!isNaN(am_percent)){
                total_mortgage_payment(sum_dollars_int, years, am_percent);
            }

            var property_percent = $("#property-percent").val();
            var property_chart = parseInt(sum_dollars_int*(property_percent/100));
            var insuranse = parseInt($("#insuranse").val());
            var payment = parseFloat($("#total-mortage").html());
            var strata_fees = parseInt($("#fees").val());


        });
        //Change interest rate percent
        $("#interest").on("change", function() {
            var am_percent = parseFloat($(this).val());
            var years = parseInt(document.querySelector('.years').value);
            var sum_dollars = document.querySelector('#ex1SliderVal').value;
            var sum_dollars_int = parseInt(sum_dollars.replace(/[^\d]+/g, ''));

            if(!isNaN(am_percent)){
                total_mortgage_payment(sum_dollars_int, years, am_percent);
            }

            var property_percent = $("#property-percent").val();
            var property_chart = parseInt(sum_dollars_int*(property_percent/100));
            var insuranse = parseInt($("#insuranse").val());
            var payment = parseFloat($("#total-mortage").html());
            var strata_fees = parseInt($("#fees").val());



        });

        //Grouping numbers by digits
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

                case 8:{
                    groupprice = result_total.substring(0,2)+","+result_total.substring(2,5)+","+result_total.substring(5,8);
                    break;
                }

                case 9:{
                    groupprice = result_total.substring(0,3)+","+result_total.substring(3,6)+","+result_total.substring(6,9);
                    break;
                }

                case 10:{
                    groupprice = result_total.substring(0,4)+","+result_total.substring(4,7)+","+result_total.substring(7,9);
                    break;
                }

                default:{
                    groupprice = result_total;
                }
            }
            return groupprice;
        }

        $("#mail").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "/send_mail.php",
                data: data,
                success: function (data) {
                    document.querySelector('.success-mail').innerHTML = data;
                }
            });

        });

        var myChart;
        function pie_chart(property_tax, payment, mortgage, strata, insuranse){

            if(myChart) {
                myChart.data.datasets[0].data = [payment, property_tax, mortgage, strata, insuranse];
                myChart.update();
                return;
            }


            var font_size_pie_chart;

            if(window.screen.width > 992) {
                font_size_pie_chart = 15;
            }
            if(window.screen.width < 992) {
                font_size_pie_chart = 32;
            }

            var ctx = document.getElementById("myChart").getContext('2d');
            myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Payment", "Property Tax", "Mortgage Insurance", "Strata Fees", "Insurance"],
                    datasets: [{
                        backgroundColor: [
                            "#3488ce",
                            "#f36f6d",
                            "#cd75b9",
                            "#d1e3a3",
                            "#ffc20b"
                        ],
                        data: [payment, property_tax, mortgage, strata, insuranse]
                    }]
                },
                options: {
                    animation: {
                        duration: 300,
                        easing: 'linear',
                    },
                    legend: {
                        labels: {
                            fontColor: '#333',
                            fontFamily: 'arial',
                            fontSize: font_size_pie_chart,
                        }
                    },
                    tooltips: {
                        titleFontSize: font_size_pie_chart,
                        bodyFontSize: font_size_pie_chart,
                        callbacks: {
                            title: function(tooltipItem, data) {
                                return data['labels'][tooltipItem[0]['index']] + ':';
                            },
                            label: function(tooltipItem, data) {
                                return '$' + data['datasets'][0]['data'][tooltipItem['index']] + '/month';
                            },
                        },
                    },

                }

            });
        }

        //call default total_mortgage_payment and inner pie chart

        $(document).ready(function () {
            var dollars;
            var years = parseFloat($(".years").val());
            var interest_rate = parseFloat($("#ex5SliderVal").val());
            total_mortgage_payment(dollars, years, interest_rate);

        });

        $(".value-manualy").focus(function () {
            $(this).parents("div.result").addClass("active-input");
        });

        $(".value-manualy").focusout(function () {
            $(".result").removeClass("active-input");
        });


        $("#name").keyup(function () {
            var val = $(this).val();
            var message = $(this).parent().next();
            var reg = /^[A-Za-z]+$/;

            message.removeClass('active-error-message');

            if(!reg.test(val)) {
                message.addClass('active-error-message');
            }
        });

        $("#phone").keyup(function () {
            var val = $(this).val();
            var message = $(this).parent().next();
            var reg = /[\d]+$/;

            message.removeClass('active-error-message');

            if(!reg.test(val)) {
                message.addClass('active-error-message');
            }
        });

        $("#email").keyup(function () {
            var val = $(this).val();
            var message = $(this).parent().next();
            var reg = /^[a-z0-9_\-\.]{2,}@[a-z0-9_\-\.]{2,}\.[a-z]{2,}$/i;

            message.removeClass('active-error-message');

            if(!reg.test(val)) {
                message.addClass('active-error-message');
            }
        });

        $("#location").keyup(function () {
            var val = $(this).val();
            var message = $(this).parent().next();
            var reg = /^[A-Za-z]+$/;

            message.removeClass('active-error-message');

            if(!reg.test(val)) {
                message.addClass('active-error-message');
            }
        });
    })
</script>
</body>
</html>