<?php
$data = "2015-04-28 23:55:00";

$horas = array();

while ($data < '2015-04-29 23:55:00') {
    $date = strtotime('+5 minutes', strtotime($data));
    $data = date("Y-m-d H:i:s", $date);
    //echo $data."<br />";
    $horas[] = date("H:i", $date);
}

$qtd = count($horas);

?>
<!DOCTYPE html>
<html lang="en" style="width: 100%; height: 100%;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <style>
            .v-label-horario{
                width: 100%;
                text-align: left;
            }
        </style>
        
    </head>
    <body style="width: 100%; height: 100%;">
        <div class="container-fluid">
            <div class="row">
                <!--<div class="col-md-12">-->
                <form action="processa-botao.php" method="POST">
                    <?php
                    for ($i = 0; $i < $qtd; $i++) {
                        ?>
                    <div class="col-md-1">
                        <div class="btn-group v-btn-manha" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary dropdown-toggle v-btn-horario">
                                <input type="checkbox" class="v-check-horario" name="chk-horario[]" 
                                       id="chk-horario" value="<?php echo $horas[$i]; ?>" /><?php echo $horas[$i]; ?>
                            </label>
<!--                            <button type="button" 
                                    class="btn btn-sm btn-primary dropdown-toggle v-btn-horario">
                                        <?php echo $horas[$i]; ?></button>-->
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle v-btn-horario" 
                                    aria-expanded="false">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li class="text-center">
                                    Selecione os Dias
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][0]" />Domingo
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][1]" />Segunda
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][2]" />Ter&ccedil;a
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][3]" />Quarta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][4]" />Quinta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][5]" />Sexta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-xs btn-primary v-label-horario">
                                        <input type="checkbox" value="-1" name="chk-dia[<?php echo $horas[$i]; ?>][6]" />S&aacute;bado
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                        <?php
                        if(($i+1) % 12 == 0){
                            ?>
                            </div>
                            <div class="row">
                            <?php
                        }
                        if($i+1 == $qtd){
                            ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <input type="submit" value="Enviar" class="btn btn-info" />
                    </form>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $('.v-btn-horario').on('click', function (event) {
                    
                    console.log($(this).parent().children('.dropdown-menu').children().children().children('input'));
                    
                    if(!$(this).children('.v-check-horario').is(':checked')){
                        $(this).parent().toggleClass('open');
                    } else{
                        $input = $(this).parent().children('.dropdown-menu').children()
                                .children().children('input');
                        $input.attr('checked', false);
                        $input.parent().removeClass('active');
                    } 
                    
                });

                $('body').on('click', function (e) {
                    
                    if (!$('.v-btn-horario').is(e.target)
                            && $('.dropdown-menu').has(e.target).length === 0
                            && $('.open').has(e.target).length === 0
                            ) {
                        $('.v-btn-horario').parent().removeClass('open');
                    }
                    
                });

            });
        </script>
    </body>
</html>