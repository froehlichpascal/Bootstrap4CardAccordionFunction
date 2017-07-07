<?php
// Only thing you need to change
$accordionContent = array(
    "Title" => "content",
    "Second Title" => "second content",

);


function collapseCard($arr)
{
    echo '<div id="accordion" role="tablist" aria-multiselectable="true">';
    $i = 1;
    foreach ($arr as $x => $x_value) {

        echo '<div class="card">
            <div class="card-header" role="tab" id="heading' . $i . '">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $i . '" aria-expanded="true" aria-controls="collapse' . $i . '">
                        ' . $x . '
                    </a>
                </h5>
            </div>

            <div id="collapse' . $i . '" class="collapse" role="tabpanel" aria-labelledby="heading' . $i . '">
                <div class="card-block">
                    ' . $x_value . '
                </div>
            </div>
        </div>';
        $i++;
    }
    echo '</div>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <?php collapseCard($accordionContent); ?>
    </div>
</div>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/app.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>