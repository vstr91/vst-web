<?php

/* CircularSiteBundle:Admin/HorarioItinerario:carregaHorarioItinerario.html.twig */
class __TwigTemplate_4ff51aa002e4aae17077ac90b6f960a959b24b7a2fb1a23c6bc1346bb47a6701 extends Twig_Template
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
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    <style>
        .v-btn-horario.active{
            background-color: #FFFFFF !important;
            color: #c50000 !important;
        }
    </style>
";
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('.v-btn-horario').on('click', function (event) {

                console.log(\$(this).parent().children('.dropdown-menu').children().children().children('input'));

                if (!\$(this).children('.v-check-horario').is(':checked')) {
                    \$(this).parent().toggleClass('open');
                } else {
                    \$input = \$(this).parent().children('.dropdown-menu').children()
                            .children().children('input');
                    \$input.attr('checked', false);
                    \$input.parent().removeClass('active');
                }

            });

            \$('body').on('click', function (e) {

                if (!\$('.v-btn-horario').is(e.target)
                        && \$('.dropdown-menu').has(e.target).length === 0
                        && \$('.open').has(e.target).length === 0
                        ) {
                    \$('.v-btn-horario').parent().removeClass('open');
                }

            });
        });
    </script>
";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 52
        echo "    ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 332
        $this->displayBlock('rodape', $context, $blocks);
        echo "   
";
    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        echo " 
        ";
        // line 50
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 52
    public function block_conteudo($context, array $blocks = array())
    {
        // line 53
        echo "
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h4 class=\"text-center\">Gerenciamento de Hor&aacute;rios Itiner&aacute;rios</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <form name=\"form-horario-itinerario\" id=\"form-horario-itinerario\" method=\"POST\" 
                          class=\"form-horizontal\" 
                          action=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_horarios_itinerarios_edita");
        echo "\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHorarioItinerario"]) ? $context["formHorarioItinerario"] : null), 'widget');
        echo "
                        <div class=\"form-group\">

                            ";
        // line 68
        $context["processados"] = array();
        // line 69
        echo "
                            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 71
            echo "                                ";
            $context["horarioAtual"] =  -1;
            // line 72
            echo "                                <div class=\"col-md-1\">
                                    <div class=\"btn-group v-btn-manha\" data-toggle=\"buttons\">
                                        ";
            // line 74
            if ((twig_length_filter($this->env, (isset($context["horariosItinerario"]) ? $context["horariosItinerario"] : null)) > 0)) {
                // line 75
                echo "                                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["horariosItinerario"]) ? $context["horariosItinerario"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["horarioItinerario"]) {
                    // line 76
                    echo "                                        <script>
                                            console.log(\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horarioItinerario"], "horario", array()), "id", array()), "html", null, true);
                    echo " | ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                    echo " | ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "nome", array()), "H:i"), "html", null, true);
                    echo "\");
                                        </script>
                                                ";
                    // line 79
                    if ((!twig_in_filter($this->getAttribute($this->getAttribute($context["horarioItinerario"], "horario", array()), "id", array()), (isset($context["processados"]) ? $context["processados"] : null)) || (twig_length_filter($this->env, (isset($context["processados"]) ? $context["processados"] : null)) == twig_length_filter($this->env, (isset($context["horariosItinerario"]) ? $context["horariosItinerario"] : null))))) {
                        // line 80
                        echo "                                                    ";
                        if (($this->getAttribute($context["horario"], "id", array()) == $this->getAttribute($this->getAttribute($context["horarioItinerario"], "horario", array()), "id", array()))) {
                            // line 81
                            echo "                                                        <label class=\"btn btn-sm btn-primary dropdown-toggle v-btn-horario active\">
                                                            <input type=\"checkbox\" class=\"v-check-horario\" name=\"chk-horario[]\" checked=\"checked\"
                                                                   id=\"chk-horario\" value=\"";
                            // line 83
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "\" />";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "nome", array()), "H:i"), "html", null, true);
                            echo "
                                                        </label>
                                                        <button type=\"button\" class=\"btn btn-sm btn-primary dropdown-toggle v-btn-horario\" 
                                                                aria-expanded=\"false\">
                                                            <span class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                                            <li class=\"text-center\">
                                                                Selecione os Dias
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 96
                            echo ((($this->getAttribute($context["horarioItinerario"], "domingo", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 97
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][0]\" />Domingo
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 103
                            echo ((($this->getAttribute($context["horarioItinerario"], "segunda", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 104
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][1]\" />Segunda
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 110
                            echo ((($this->getAttribute($context["horarioItinerario"], "terca", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 111
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][2]\" />Ter&ccedil;a
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 117
                            echo ((($this->getAttribute($context["horarioItinerario"], "quarta", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 118
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][3]\" />Quarta
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 124
                            echo ((($this->getAttribute($context["horarioItinerario"], "quinta", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 125
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][4]\" />Quinta
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 131
                            echo ((($this->getAttribute($context["horarioItinerario"], "sexta", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 132
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][5]\" />Sexta
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           ";
                            // line 138
                            echo ((($this->getAttribute($context["horarioItinerario"], "sabado", array()) ==  -1)) ? ("checked") : (""));
                            echo "
                                                                           name=\"chk-dia[";
                            // line 139
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][6]\" />S&aacute;bado
                                                                </label>
                                                            </li>
                                                            ";
                            // line 148
                            echo "                                                        </ul>
                                                    </div>
";
                            // line 151
                            echo "                                                ";
                            $context["horarioAtual"] = $this->getAttribute($context["horario"], "id", array());
                            // line 152
                            echo "                                                ";
                            $context["processados"] = twig_array_merge((isset($context["processados"]) ? $context["processados"] : null), array($this->getAttribute($context["horario"], "id", array()) => $this->getAttribute($context["horario"], "id", array())));
                            // line 153
                            echo "                                            ";
                        } elseif (((isset($context["horarioAtual"]) ? $context["horarioAtual"] : null) != $this->getAttribute($context["horario"], "id", array()))) {
                            // line 154
                            echo "                                                <label class=\"btn btn-sm btn-primary dropdown-toggle v-btn-horario\">
                                                    <input type=\"checkbox\" class=\"v-check-horario\" name=\"chk-horario[]\" 
                                                           id=\"chk-horario\" value=\"";
                            // line 156
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "\" />";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "nome", array()), "H:i"), "html", null, true);
                            echo " ";
                            // line 157
                            echo "                                                </label>
                                                <button type=\"button\" class=\"btn btn-sm btn-primary dropdown-toggle v-btn-horario\" 
                                                        aria-expanded=\"false\">
                                                    <span class=\"caret\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li class=\"text-center\">
                                                        Selecione os Dias
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 169
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][0]\" />Domingo
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 175
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][1]\" />Segunda
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 181
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][2]\" />Ter&ccedil;a
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 187
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][3]\" />Quarta
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 193
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][4]\" />Quinta
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 199
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][5]\" />Sexta
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                            <input type=\"checkbox\" value=\"-1\"
                                                                   name=\"chk-dia[";
                            // line 205
                            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                            echo "][6]\" />S&aacute;bado
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
";
                            // line 211
                            echo "                                    ";
                            $context["horarioAtual"] = $this->getAttribute($context["horario"], "id", array());
                            // line 212
                            echo "                                ";
                        }
                        // line 213
                        echo "                            ";
                    }
                    // line 214
                    echo "

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horarioItinerario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "                        ";
            } else {
                // line 218
                echo "                            <label class=\"btn btn-sm btn-primary dropdown-toggle v-btn-horario\">
                                                            <input type=\"checkbox\" class=\"v-check-horario\" name=\"chk-horario[]\" 
                                                                   id=\"chk-horario\" value=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "nome", array()), "H:i"), "html", null, true);
                echo "
                                                        </label>
                                                        <button type=\"button\" class=\"btn btn-sm btn-primary dropdown-toggle v-btn-horario\" 
                                                                aria-expanded=\"false\">
                                                            <span class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                                            <li class=\"text-center\">
                                                                Selecione os Dias
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\" 
                                                                           name=\"chk-dia[";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][0]\" />Domingo
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\"
                                                                           name=\"chk-dia[";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][1]\" />Segunda
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\"
                                                                           name=\"chk-dia[";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][2]\" />Ter&ccedil;a
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\"
                                                                           name=\"chk-dia[";
                // line 251
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][3]\" />Quarta
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\"
                                                                           name=\"chk-dia[";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][4]\" />Quinta
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\"
                                                                           name=\"chk-dia[";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][5]\" />Sexta
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class=\"btn btn-xs btn-primary v-label-horario\">
                                                                    <input type=\"checkbox\" value=\"-1\"
                                                                           name=\"chk-dia[";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
                echo "][6]\" />S&aacute;bado
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
";
                // line 275
                echo "                    ";
            }
            // line 276
            echo "                </div>
                    ";
            // line 277
            if ((($this->getAttribute($context["loop"], "index", array()) % 12) == 0)) {
                // line 278
                echo "                    </div>
                    <div class=\"form-group\">
                    ";
            }
            // line 281
            echo "                    ";
            if ((($this->getAttribute($context["loop"], "index", array()) == $this->getAttribute($context["loop"], "length", array())) && (($this->getAttribute($context["loop"], "index", array()) % 12) != 0))) {
                // line 282
                echo "                    </div>
                ";
            }
            // line 284
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "            <br />
            <input type=\"submit\" value=\"Cadastrar\" class=\"btn btn-primary\" />
        </form>
                    <a href=\"";
        // line 288
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_horarios_itinerarios");
        echo "\" class=\"btn btn-primary pull-right\">Voltar</a>
    </div>
</div>
</div>
";
        // line 329
        echo "</div>

";
    }

    // line 332
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin/HorarioItinerario:carregaHorarioItinerario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 332,  573 => 329,  566 => 288,  561 => 285,  547 => 284,  543 => 282,  540 => 281,  535 => 278,  533 => 277,  530 => 276,  527 => 275,  519 => 269,  510 => 263,  501 => 257,  492 => 251,  483 => 245,  474 => 239,  465 => 233,  447 => 220,  443 => 218,  440 => 217,  432 => 214,  429 => 213,  426 => 212,  423 => 211,  415 => 205,  406 => 199,  397 => 193,  388 => 187,  379 => 181,  370 => 175,  361 => 169,  347 => 157,  342 => 156,  338 => 154,  335 => 153,  332 => 152,  329 => 151,  325 => 148,  319 => 139,  315 => 138,  306 => 132,  302 => 131,  293 => 125,  289 => 124,  280 => 118,  276 => 117,  267 => 111,  263 => 110,  254 => 104,  250 => 103,  241 => 97,  237 => 96,  219 => 83,  215 => 81,  212 => 80,  210 => 79,  201 => 77,  198 => 76,  193 => 75,  191 => 74,  187 => 72,  184 => 71,  167 => 70,  164 => 69,  162 => 68,  156 => 65,  152 => 64,  139 => 53,  136 => 52,  130 => 50,  125 => 49,  119 => 332,  116 => 52,  113 => 49,  111 => 48,  108 => 47,  73 => 16,  69 => 15,  64 => 14,  61 => 13,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
