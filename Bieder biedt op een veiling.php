<?php
/**
 * Created by PhpStorm.
 * User: Gilles
 * Date: 09-May-17
 * Time: 10:19 AM
 */
require "global.php";
require "header.php";
?>

<head>
    <link rel="stylesheet" href="test css.css">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="product-pictures">
            <div class="preview-pic tab-content">
                <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>

            </div>
            <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>

            </ul>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
                <li><a data-toggle="tab" href="#menu1">Meer informatie</a></li>
                <li><a data-toggle="tab" href="#menu2">Over de verkoper</a></li>
            </ul>


            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Alterum significari idem, ut si diceretur, officia media omnia aut pleraque servantem vivere. Satisne ergo pudori consulat, si quis sine teste libidini pareat? Idem iste, inquam, de voluptate quid sentit? An haec ab eo non dicuntur? Et non ex maxima parte de tota iudicabis? Duo Reges: constructio interrete. Duarum enim vitarum nobis erunt instituta capienda. Quamquam te quidem video minime esse deterritum. Nam et complectitur verbis, quod vult, et dicit plane, quod intellegam; </p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <p>Some content in menu 2.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>22:24:21</h3>
            <div class="btn-lg">
                <button class="btn-lg" type="button">Bied Nu!</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>Jan</td>
                        <td>$25</td>
                    </tr>
                    <tr>
                        <td>Henk</td>
                        <td>$23</td>
                    </tr>
                    <tr>
                        <td>Truus</td>
                        <td>$20</td>
                    </tr>
                    <tr>
                        <td>Betsie</td>
                        <td>$17</td>
                    </tr>
                    <tr>
                        <td>Greetje</td>
                        <td>$16</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>


<?php

require "footer.php";

?>



