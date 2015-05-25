<?php

/* CircularSiteBundle:Parada:detalhes.html.twig */
class __TwigTemplate_0cbdf0452fe4bfc46fffda13d10460f23d29bff5c283a90366e99c11e8316e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div id=\"conteudo-detalhe\">
        <h4 id=\"detalhe-parada\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parada"]) ? $context["parada"] : $this->getContext($context, "parada")), "referencia", array()), "html", null, true);
        echo "</h4>
        <p id=\"detalhe-bairro\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parada"]) ? $context["parada"] : $this->getContext($context, "parada")), "bairro", array()), "html", null, true);
        echo "</p>
        <br />
        <p>Pr&oacute;ximos Hor&aacute;rios</p>
        <br />
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["itinerario"]) {
            // line 8
            echo "        
        <script type=\"text/javascript\">
            \$('#mapa').gmap3({
                getdistance:{
                    options:{
                        origins:[new google.maps.LatLng(";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")), 0, array()), "latitude_partida", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")), 0, array()), "longitude_partida", array()), "html", null, true);
            echo ")],
                        destinations:[new google.maps.LatLng(";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")), 0, array()), "latitude_parada", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")), 0, array()), "longitude_parada", array()), "html", null, true);
            echo ")],
                        travelMode: google.maps.TravelMode.DRIVING
                    },
                    callback: function(results, status){
                        var result = \"\";
                        console.log(results);
                        if(results){
                            qtdResultados = results.rows.length;
                            for(var i = 0; i < qtdResultados; i++){
                                var elements = results.rows[i].elements;
                                
                                var qtdElementos = elements.length;
                                
                                for(var j = 0; j < qtdElementos; j++){
                                    switch(elements[j].status){
                                        case 'OK':
                                            result = elements[j].duration.value / 60;
                                    }
                                }
                            }
                        }
                        
                        if(result.toFixed(0) != 0){
                            \$('#hora";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "id_itinerario", array()), "html", null, true);
            echo "').html(\"+ \"+result.toFixed(2)+\" min\");
                        console.log(\"Mais \"+result.toFixed(2)+\" minutos!\");
                        }
                        
                    }
                }
            });
        </script>
        
        <div class=\"detalhe-horario-itinerario\">
            <span class=\"detalhe-itinerario\">
                <a onclick=\"recuperaDados(this.href, ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parada"]) ? $context["parada"] : $this->getContext($context, "parada")), "id", array()), "html", null, true);
            echo ");return false;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_lista_paradas_itinerario", array("id_itinerario" => $this->getAttribute(            // line 49
$context["itinerario"], "id_itinerario", array()))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/onibus-mini-verde.png"), "html", null, true);
            echo "\" /></a>
                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "bairro_partida", array()), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "bairro_destino", array()), "html", null, true);
            echo "</span>
            <span class=\"hora\">
                ";
            // line 53
            $context["hora"] = twig_date_format_filter($this->env, "now", "H:i", "America/Sao_Paulo");
            // line 54
            echo "                ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("CircularSiteBundle:Itinerario:proximoHorario", array("itinerario" => $this->getAttribute(            // line 55
$context["itinerario"], "id_itinerario", array()), "hora" => (isset($context["hora"]) ? $context["hora"] : $this->getContext($context, "hora")))), array());
            // line 56
            echo "            </span>
            <span class=\"hora-aproximada\" id=\"hora";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "id_itinerario", array()), "html", null, true);
            echo "\"></span>
            <p class=\"detalhe-todos-horarios\">
                <a class=\"lista-todos-horarios\" id=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "id_itinerario", array()), "html", null, true);
            echo "\" href=\"#\">Todos os Hor&aacute;rios</a>
            </p>
        </div>
        <div id=\"retorno-ajax\"></div>
        <div id=\"retorno-todos-horarios\"></div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "        <p>Nenhum resultado encontrado.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        <script type=\"text/javascript\">
            
            \$(\"#retorno-todos-horarios\").dialog({
                    autoOpen: false,
                    width: '35%',
                    title: false,
                    resizable: false,
                    draggable: true,
                    modal: false,
                    show: 'fade',
                    hide: 'fade',
                    closeText: 'Fechar'
                });
            
            function recuperaDados(\$url, \$idParada){
                
                \$.ajax({
                        type: 'GET',
                        url: \$url,
                        cache: 'false',
                        dataType: 'text',
                        success: function(data){
                            eval(\$('#retorno-ajax').html(data));
                            
                            detalheAberto = true;
                            
";
        // line 94
        echo "                            
                            qtdParadas = paradas.length;
                            
                            for(i = 0; i < qtdParadas; i++){
                                
                                var myMarker = \$(\"#mapa\").gmap3({
                                    get:{
                                        name: 'marker', tag: paradas[i].id
                                    }
                                });
                                
                                myMarker.setIcon(new google.maps.
                        MarkerImage('";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/marker-selecionado.png"), "html", null, true);
        echo "'));
                                 
                                ";
        // line 115
        echo "                                
                                \$(\"#mapa\").gmap3({
                                    overlay:{
                                        latLng: myMarker.getPosition(),
                                        options:{
                                            content: '<div class=\"infowindow-ordem\"><div class=\"info-conteudo\">'
                                                    +(i+1)+'</div></div>',
                                            offset: {
                                                x: -10,
                                                y: -80
                                            }
                                        }
                                    }
                                  });
                                  
                                 ";
        // line 131
        echo "                                
                            }
                            
                            var markerDetalhe = \$(\"#mapa\").gmap3({
                                    get:{
                                        name: 'marker', tag: \$idParada
                                    }
                                });
                                
                                markerDetalhe.setIcon(new google.maps.
                        MarkerImage('";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/marker-selecionado-detalhe.png"), "html", null, true);
        echo "'));
                            
                        }
                    }); 
                
                return false;
            }
            
            function recuperaTodosHorarios(\$idItinerario, \$hora){
            
                    \$url = '";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_itinerario_todos_horarios", array("id_itinerario" =>  -1, "hora" =>  -2)), "html", null, true);
        // line 152
        echo "';
                    \$url = \$url.replace('-1', \$idItinerario);
                    
                    \$url = \$url.replace('-2', \$hora);
            
                    \$.ajax({
                        type: 'GET',
                        url: \$url,
                        success: function(data){
                            \$('#retorno-todos-horarios').html(data);
                            \$('#retorno-todos-horarios').dialog('open');
                        }
                    });                
            }
            
            \$('.lista-todos-horarios').each(function(){
                    \$(this).click(function(){
                        
                        \$hora = \$(this).parent().parent().children('.hora').text();
                        
                        \$hora = \$hora.trim();
                        
                        recuperaTodosHorarios(\$(this).attr('id'), \$hora);
                    });
                });
            
        </script>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Parada:detalhes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 152,  232 => 151,  219 => 141,  207 => 131,  190 => 115,  185 => 106,  171 => 94,  143 => 67,  136 => 65,  125 => 59,  120 => 57,  117 => 56,  115 => 55,  113 => 54,  111 => 53,  104 => 51,  100 => 50,  96 => 49,  93 => 48,  79 => 37,  51 => 14,  45 => 13,  38 => 8,  33 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
