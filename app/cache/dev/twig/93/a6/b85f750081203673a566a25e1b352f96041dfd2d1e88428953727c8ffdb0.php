<?php

/* CircularSiteBundle:Admin/Parada:indexParada.html.twig */
class __TwigTemplate_93a6b85f750081203673a566a25e1b352f96041dfd2d1e88428953727c8ffdb0 extends Twig_Template
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
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
src=\"http://maps.google.com/maps/api/js?sensor=false&amp;language=pt_BR\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gmap3.js"), "html", null, true);
        echo "\"></script>
<script>
    
    var paradas = [];
    
    function mostraForm(\$lat, \$lng, \$id){

        \$('#circular_sitebundle_parada_latitude').val(\$lat);
        \$('#circular_sitebundle_parada_longitude').val(\$lng);

        \$('#modal-form').modal(\"show\");              
    }
    
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paradas"]) ? $context["paradas"] : $this->getContext($context, "paradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["parada"]) {
            // line 23
            echo "        var umaParada = {
            lat: '";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "latitude", array()), "html", null, true);
            echo "',
            lng: '";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "longitude", array()), "html", null, true);
            echo "',
            data:{
                nome: '";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "referencia", array()), "html", null, true);
            echo "',
                id: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "id", array()), "html", null, true);
            echo ",
                idBairro: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parada"], "bairro", array()), "id", array()), "html", null, true);
            echo ",
                bairro: '";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "bairro", array()), "html", null, true);
            echo "'
            },
            tag: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "id", array()), "html", null, true);
            echo ",
            options:{
                          icon: new google.maps.MarkerImage('";
            // line 34
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
        // line 40
        echo "    
    \$(document).ready(function() {
        \$('#mapa').gmap3({
            map: {
                options: {
                    center: [-22.470904, -43.824914],
                    zoom: 16,
                    mapTypeControl: false,
                    mapTypeId: \"circular\"
                },
                events:{
                    click: function(map, event){
                        \$('#mapa').gmap3({
                            clear:{
                                tag: -1
                            }
                        });
                        \$('#mapa').gmap3({
                            marker:{
                                latLng: event.latLng,
                                options:{
                                    draggable: true
                                },
                                tag: -1,
                                events:{
                                    dragend: function(marker){
                                        var \$lng = marker.position.D;
                                        var \$lat = marker.position.k;

                                        mostraForm(\$lat, \$lng, -1);
                                    }
                                }
                            }
                        });

                        var \$lng = event.latLng.D;
                        var \$lat = event.latLng.k;

                        mostraForm(\$lat, \$lng, -1);
                    }
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
                values: paradas
            }
        });
    });
</script>
        ";
    }

    // line 107
    public function block_css($context, array $blocks = array())
    {
        // line 108
        echo "                ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        // line 112
        echo "        ";
        // line 113
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 116
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 206
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        echo "    
";
    }

    // line 113
    public function block_menu($context, array $blocks = array())
    {
        echo " 
            ";
        // line 114
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 116
    public function block_conteudo($context, array $blocks = array())
    {
        // line 117
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"text-center\">Gerenciamento de Paradas<br /><small>Clique no mapa para adicionar uma parada</small></h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 130
        echo "            <div id=\"mapa\" style=\"width: 100%; height: 400px;\">
                mapa
            </div>

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover table-striped table-responsive text-center\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Refer&ecirc;ncia</td>
                        <td>Latitude</td>
                        <td>Longitude</td>
                        <td>Bairro</td>
                        <td>Cidade</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paradas"]) ? $context["paradas"] : $this->getContext($context, "paradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["parada"]) {
            // line 153
            echo "                    <tr>
                        <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "referencia", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "latitude", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "longitude", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parada"], "bairro", array()), "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["parada"], "bairro", array()), "local", array()), "nome", array()), "html", null, true);
            echo "</td>
                        <td>
                                ";
            // line 161
            if (($this->getAttribute($context["parada"], "status", array()) == 0)) {
                // line 162
                echo "                            Ativo
                                ";
            } else {
                // line 164
                echo "                            Inativo
                                ";
            }
            // line 166
            echo "                        </td>
                        <td>
                            <a href=\"#\">Editar</a> | 
                            <a href=\"#\">";
            // line 169
            if (($this->getAttribute($context["parada"], "status", array()) == 0)) {
                // line 170
                echo "                                Inativar
                                ";
            } else {
                // line 172
                echo "                                Ativar
                                ";
            }
            // line 173
            echo "</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
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
        <h4 class=\"modal-title\">Cadastrar Parada</h4>
      </div>
      <div class=\"modal-body\">
        <form name=\"form-parada\" id=\"form-parada\" method=\"POST\" 
              action=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_paradas_cadastra", array("id_parada" =>  -1)), "html", null, true);
        echo "\">
            ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formParada"]) ? $context["formParada"] : $this->getContext($context, "formParada")), 'widget');
        echo "
            <input type=\"submit\" value=\"Cadastrar\" class=\"btn btn-primary\" />
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
        <button type=\"button\" class=\"btn btn-primary\">Cadastrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        ";
    }

    // line 206
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin/Parada:indexParada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 206,  362 => 193,  358 => 192,  341 => 177,  332 => 173,  328 => 172,  324 => 170,  322 => 169,  317 => 166,  313 => 164,  309 => 162,  307 => 161,  302 => 159,  298 => 158,  294 => 157,  290 => 156,  286 => 155,  282 => 154,  279 => 153,  275 => 152,  251 => 130,  241 => 117,  238 => 116,  232 => 114,  227 => 113,  220 => 206,  217 => 116,  214 => 113,  212 => 112,  209 => 111,  203 => 109,  198 => 108,  195 => 107,  125 => 40,  113 => 34,  108 => 32,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  86 => 25,  82 => 24,  79 => 23,  75 => 22,  59 => 9,  53 => 6,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
