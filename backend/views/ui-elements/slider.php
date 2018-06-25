<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-22
 * Time: 下午2:24
 */
?>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Iron Slider
                <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
            </header>
            <div class="panel-body">

                <table class="table slider-table">
                    <tr>
                        <td>
                            <input id="range_1" type="text" name="range_1" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="range_2" type="text" name="range_2" value="1000;100000" data-type="double" data-step="500" data-postfix=" &euro;" data-from="30000" data-to="90000" data-hasgrid="true" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="range_5" type="text" name="range_5" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="range_6" type="text" name="range_6" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="range_4" type="text" name="range_4" value="10000;100000" />
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center ">
                            <input id="range_3" type="text" name="range_3" value="1000000;100000000" />
                            <button class="btn btn-info btn-sm mtop10" id="updateLast">Update this slider</button>
                        </td>
                    </tr>
                </table>


            </div>
        </section>
    </div>
</div>

<?php
$js = <<<JS
$(document).ready(function(){
        $("#range_1").ionRangeSlider({
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            prettify: false,
            hasGrid: true
        });
        $("#range_2").ionRangeSlider();

        $("#range_5").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " mm",
            prettify: false,
            hasGrid: true
        });
        $("#range_6").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            type: 'single',
            step: 1,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#range_4").ionRangeSlider({
            type: "single",
            step: 100,
            postfix: " light years",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });
        $("#range_3").ionRangeSlider({
            type: "double",
            postfix: " miles",
            step: 10000,
            from: 25000000,
            to: 35000000,
            onChange: function(obj){
                var t = "";
                for(var prop in obj) {
                    t += prop + ": " + obj[prop] + "\r\n";
                }
                $("#result").html(t);
            },
            onLoad: function(obj) {
                //
            }
        });

        $("#updateLast").on("click", function(){

            $("#range_3").ionRangeSlider("update", {
                min: Math.round(10000 + Math.random() * 40000),
                max: Math.round(200000 + Math.random() * 100000),
                step: 1,
                from: Math.round(40000 + Math.random() * 40000),
                to: Math.round(150000 + Math.random() * 80000)
            });

        });
    });
JS;
$this->registerJs($js);
?>

