<?php

/* CircularSiteBundle:Admin:Itinerario/indexItinerario.html.twig */
class __TwigTemplate_0957390c902aa549d85a8762e5423a2b09382d96ce6a8c5d037d0bb8ba74aa0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("VostreCentralBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'conteudo' => array($this, 'block_conteudo'),
            'rodape' => array($this, 'block_rodape'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VostreCentralBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
src=\"http://maps.google.com/maps/api/js?sensor=false&amp;language=pt_BR\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gmap3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
<script>

    var paradas = [];
    var marcadores = new Array();
    var \$marcadoresOrdenados;

    function findMarcadorIndex(array, attr, value) {

        for (var i = 0; i < array.length; i += 1) {
            if (array[i][attr] === value) {
                return i;
            }
        }
    }

    function checaExistenciaMarcador(array, attr, value) {

        index = findMarcadorIndex(array, attr, value);

        if (index > -1) {
            return true;
        } else {
            return false;
        }
    }

    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paradas"]) ? $context["paradas"] : $this->getContext($context, "paradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["parada"]) {
            // line 39
            echo "    var umaParada = {
        lat: '";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "latitude", array()), "html", null, true);
            echo "',
        lng: '";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "longitude", array()), "html", null, true);
            echo "',
        data: {
            nome: '";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "referencia", array()), "html", null, true);
            echo "',
            id: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "id", array()), "html", null, true);
            echo ",
            idBairro: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parada"], "bairro", array()), "id", array()), "html", null, true);
            echo ",
            bairro: '";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "bairro", array()), "html", null, true);
            echo "'
        },
        tag: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "id", array()), "html", null, true);
            echo ",
        options: {
            icon: new google.maps.MarkerImage('";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/circular/marker.png"), "html", null, true);
            echo "')
        }
    };

    paradas.push(umaParada);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    \$(document).ready(function() {

        \$('#caixa-lista-itinerario').niceScroll({
            cursorcolor: '#D00'
        });

        \$('#btn-form-parada-submit').click(function() {
            \$idPartida = \$('#circular_sitebundle_itinerario_partida').val();
            \$idDestino = \$('#circular_sitebundle_itinerario_destino').val();
            \$valor = \$('#circular_sitebundle_itinerario_valor').val();
            \$distancia = \$('#circular_sitebundle_itinerario_distancia').val();
            \$idEmpresa = \$('#circular_sitebundle_itinerario_empresa').val();
            \$status = \$('#circular_sitebundle_itinerario_status').val();
            \$observacao = \$('#circular_sitebundle_itinerario_observacao').val();

            \$valor = \$valor.replace('.', '');
            \$valor = \$valor.replace(',', '.');

            \$.ajax({
                type: 'POST',
                url: '";
        // line 77
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_itinerarios_cadastra");
        echo "',
                data: {
                    idPartida: \$idPartida,
                    idDestino: \$idDestino,
                    valor: \$valor,
                    status: \$status,
                    distancia: \$distancia,
                    idEmpresa: \$idEmpresa,
                    observacao: \$observacao,
                    paradas: \$marcadoresOrdenados
                }
            });

        });

        \$('#lista-itinerario').sortable();

        \$('#botao-cadastra-itinerario').click(function() {

            \$marcadoresOrdenados = new Array();

            \$('#lista-itinerario li').each(function() {

                \$idParadaOrdenada = \$(this).children('span.parada-id').text();
                \$idBairroParadaOrdenada = \$(this).children('span.parada-bairro-id').text();
                \$isPrincipalOrdenada = \$(this).children('input').is(':checked') ? -1 : 0;

                \$umaParadaOrdenada = {
                    id: \$idParadaOrdenada,
                    idBairro: \$idBairroParadaOrdenada,
                    isPrincipal: \$isPrincipalOrdenada
                };

                \$marcadoresOrdenados.push(\$umaParadaOrdenada);

                console.log(\$isPrincipalOrdenada);
            });

            \$paradaInicial = \$marcadoresOrdenados[0].idBairro;
            \$paradaFinal = \$marcadoresOrdenados[\$marcadoresOrdenados.length - 1].idBairro;

            \$('#circular_sitebundle_itinerario_partida').val(\$paradaInicial);
            \$('#circular_sitebundle_itinerario_destino').val(\$paradaFinal);

            \$('#paradas').val(\$marcadoresOrdenados);

            \$('#modal-form').modal('show');
        });

        \$('#mapa').gmap3({
            map: {
                options: {
                    center: [-22.470904, -43.824914],
                    zoom: 16,
                    mapTypeControl: false,
                    mapTypeId: \"circular\"
                }
            },
            styledmaptype: {
                id: \"circular\",
                options: {
                    name: \"Circular\"
                },
                styles: [
                    {
                        featureType: \"poi\",
                        elementType: \"poi\",
                        stylers: [
                            {hue: \"#ff0022\"},
                            {saturation: 60},
                            {lightness: -20},
                            {visibility: \"off\"}
                        ]
                    }
                ]
            },
            marker: {
                values: paradas,
                events: {
                    mouseover: function(marker, event, context) {
                        \$(this).gmap3({
                            clear: {
                                name: 'overlay'
                            },
                            overlay: {
                                latLng: marker.getPosition(),
                                options: {
                                    content: '<div class=\"v-infowindow\"><div class=\"v-info-conteudo\">'
                                            + context.data.nome + '<br /><br />'
                                            + context.data.bairro + '</div></div>',
                                    offset: {
                                        x: 0,
                                        y: -105
                                    }
                                }
                            }
                        });
                    },
                    mouseout: function() {
                        \$(\".v-infowindow\").fadeOut(1000);
                    },
                    click: function(marker, event, context) {
                        if (!checaExistenciaMarcador(marcadores, 'id', context.data.id)) {
                            \$li = \$(\"<li />\")
                                    .append(\$(\"<div class='parada-nome' />\").text(context.data.nome))
                                    .append(\$(\"<span class='parada-id hide' />\").text(context.data.id))
                                    .append(\$(\"<span class='parada-bairro-id hide' />\").text(context.data.idBairro))
                                    .append(\"Principal? \")
                                    .append(\$(\"<input type='checkbox' name='parada-principal' value='-1' />\"))
                                    .append(\$(\"<span class='v-icone-exclui' />\").append(\$(\"<a href='#' />\").text('X')))
                                    ;
                            \$('#lista-itinerario').append(\$li);
                            \$('#lista-itinerario').sortable('refresh');

                            umaParada = {
                                id: context.data.id,
                                idBairro: context.data.idBairro
                            };

                            marcadores.push(umaParada);

                        } else {
                            alert(\"Ja existe!!!\");
                        }
                    }
                }
            }
        });

        \$('body').on('click', '.v-icone-exclui', function() {
            console.log(\$(this).parent().children('.parada-id').html());

            id = parseInt(\$(this).parent().children('.parada-id').html());

            index = findMarcadorIndex(marcadores, 'id', id);

            if (index > -1) {

                \$(this).parent().fadeOut(1000);

                setTimeout(function() {
                    \$(this).parent().remove();
                }, 1000);

                marcadores.splice(index, 1);
                \$(this).parent().remove();
            }

        });

    });
</script>
        ";
    }

    // line 230
    public function block_css($context, array $blocks = array())
    {
        // line 231
        echo "                ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/circular/jquery-ui.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 235
    public function block_body($context, array $blocks = array())
    {
        // line 236
        echo "        ";
        // line 237
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 240
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 338
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        echo "    
";
    }

    // line 237
    public function block_menu($context, array $blocks = array())
    {
        echo " 
            ";
        // line 238
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 240
    public function block_conteudo($context, array $blocks = array())
    {
        // line 241
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"text-center\">Gerenciamento de Itiner&aacute;rios<br />
                <small>Clique nos marcadores para adicionar &agrave; lista de paradas do itiner&aacute;rio</small></h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 255
        echo "            <div id=\"mapa\" style=\"width: 100%; height: 400px;\">
                mapa
            </div>

        </div>
        <div class=\"col-md-4\">
            <div id=\"caixa-itinerario\">
                <div id=\"caixa-lista-itinerario\">
                    <ul id=\"lista-itinerario\">

                    </ul>
                </div>
                <div id=\"caixa-itinerario-botoes\">
                    <input id=\"botao-cadastra-itinerario\" type=\"button\" value=\"Cadastrar\" />
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover table-striped table-responsive text-center\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Partida</td>
                        <td>Destino</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 286
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["itinerario"]) {
            // line 287
            echo "                    <tr>
                        <td>";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itinerario"], "partida", array()), "nome", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["itinerario"], "partida", array()), "local", array()), "nome", array()), "html", null, true);
            echo ")</td>
                        <td>";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["itinerario"], "destino", array()), "nome", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["itinerario"], "destino", array()), "local", array()), "nome", array()), "html", null, true);
            echo ")</td>
                        <td>
                                ";
            // line 292
            if (($this->getAttribute($context["itinerario"], "status", array()) == 0)) {
                // line 293
                echo "                            Ativo
                                ";
            } else {
                // line 295
                echo "                            Inativo
                                ";
            }
            // line 297
            echo "                        </td>
                        <td>
                            <a href=\"#\">Editar</a> | 
                            <a href=\"#\">";
            // line 300
            if (($this->getAttribute($context["itinerario"], "status", array()) == 0)) {
                // line 301
                echo "                                Inativar
                                ";
            } else {
                // line 303
                echo "                                Ativar
                                ";
            }
            // line 304
            echo "</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modal-form\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">Cadastrar Itiner&aacute;rio</h4>
            </div>
            <div class=\"modal-body\">
                <form name=\"form-parada\" id=\"form-parada\" method=\"POST\" 
                      action=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_itinerarios_cadastra", array("id_itinerario" =>  -1)), "html", null, true);
        echo "\">
            ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formItinerario"]) ? $context["formItinerario"] : $this->getContext($context, "formItinerario")), 'widget');
        echo "
                    <input type=\"hidden\" name=\"paradas\" />
";
        // line 327
        echo "                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn-form-parada-submit\">Cadastrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        ";
    }

    // line 338
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin:Itinerario/indexItinerario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 338,  505 => 327,  500 => 324,  496 => 323,  479 => 308,  470 => 304,  466 => 303,  462 => 301,  460 => 300,  455 => 297,  451 => 295,  447 => 293,  445 => 292,  438 => 290,  432 => 289,  428 => 288,  425 => 287,  421 => 286,  388 => 255,  377 => 241,  374 => 240,  368 => 238,  363 => 237,  356 => 338,  353 => 240,  350 => 237,  348 => 236,  345 => 235,  339 => 233,  335 => 232,  330 => 231,  327 => 230,  170 => 77,  147 => 56,  135 => 50,  130 => 48,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  108 => 41,  104 => 40,  101 => 39,  97 => 38,  67 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
