<?php

/* VostreCentralBundle:Central:indexAdmin.html.twig */
class __TwigTemplate_dfdb96f977549a34f29aae4d197417a1a7fe01c4be68b2c2a81de00c5f49021b extends Twig_Template
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
        echo "<div class=\"container-fluid\" style=\"min-height: 100%;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4>Ol&aacute;, ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nome", array()), "html", null, true);
        echo "!</h4>
            <p>Seja bem vindo &agrave; central do administrador <strong>Vostr&egrave;</strong>!</p>
            <p>Aqui voc&ecirc; pode enviar avisos, verificar 
                chamados abertos, al&eacute;m de ler sugest&otilde;es de melhorias, 
                atrav&eacute;s de mensagens de nossos clientes e, claro, gerenciar os dados dos m&oacute;dulos.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center\">
            <h4>Universais</h4>
        </div>
    </div>
    <div class=\"row text-center v-links-administracao\">
        <div class=\"col-md-12\">
            <div class=\"btn-group\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_paises");
        echo "\" class=\"btn btn-primary\">Gerenciar Pa&iacute;ses</a>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_estados");
        echo "\" class=\"btn btn-primary\">Gerenciar Estados</a>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_locais");
        echo "\" class=\"btn btn-primary\">Gerenciar Locais</a>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_bairros");
        echo "\" class=\"btn btn-primary\">Gerenciar Bairros</a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center\">
            <h4>Vostr&egrave; Circular</h4>
        </div>
    </div>
    <div class=\"row text-center v-links-administracao\">
        <div class=\"col-md-12\">
            <div class=\"btn-group\">
";
        // line 35
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_paradas");
        echo "\" class=\"btn btn-primary\">Gerenciar Paradas</a>
                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_empresas");
        echo "\" class=\"btn btn-primary\">Gerenciar Empresas</a>
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_itinerarios");
        echo "\" class=\"btn btn-primary\">Gerenciar Itiner&aacute;rios</a>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_horarios_itinerarios");
        echo "\" class=\"btn btn-primary\">Gerenciar Hor&aacute;rios Itiner&aacute;rios</a>
                <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_mensagens");
        echo "\" class=\"btn btn-primary\">Gerenciar Mensagens</a>
                ";
        // line 41
        echo "            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-1\">
            <h4 class=\"text-center\">&Uacute;ltimos Acessos</h4>
            <table class=\"table table-striped table-hover text-center\">
                <thead>
                    <tr>
                        <td>Cont.</td>
                        <td>Token</td>
                        <td>Identificador &Uacute;nico</td>
                        <td>Data</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acessos"]) ? $context["acessos"] : $this->getContext($context, "acessos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["acesso"]) {
            // line 58
            echo "                        <tr>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["acesso"], "puroTexto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["acesso"], "identificadorUnico", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["acesso"], "dataCriacao", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acesso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                </tbody>
            </table>
        </div>
        <div class=\"col-md-5 col-md-offset-1\">
            <h4 class=\"text-center\">&Uacute;ltimas Mensagens Recebidas</h4>
            <table class=\"table table-striped table-hover text-center\">
                <thead>
                    <tr>
                        <td>Cont.</td>
                        <td>T&iacute;tulo</td>
                        <td>Email</td>
                        <td>Data</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contatos"]) ? $context["contatos"] : $this->getContext($context, "contatos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contato"]) {
            // line 82
            echo "                        <tr class=\"linha-clicavel\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "id", array()), "html", null, true);
            echo "\">
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "titulo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contato"], "dataCadastro", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                            <td><a class=\"link-excluir-contato\" href=\"#";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "id", array()), "html", null, true);
            echo "\">Excluir</a></td>
                        </tr>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"form-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-lable\" 
     aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"modal-lable\">Mensagem</h4>
            </div>
            <div class=\"modal-body\" id=\"conteudo-modal\">

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
            </div>
        </div>
    </div>
</div>
<script>

    function carregaContato(id) {
        
        var caminho = '";
        // line 118
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_contato_carrega");
        echo "';
        
        \$.ajax({
            url: caminho+\"/\"+id,
            method: 'GET',
            success: function (response, status, xhr, form) {
                \$('#conteudo-modal').html(response);
                \$('.modal').modal('show');
            }
        });
    }

    function excluiContato(id) {
        
        var caminho = '";
        // line 132
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_contato_exclui");
        echo "';
        
        \$.ajax({
            url: caminho+\"/\"+id,
            method: 'POST',
            success: function (response, status, xhr, form) {
                alert(response);
                window.location.reload();
            }
        });
    }

    \$(document).ready(function () {
        
        \$('.linha-clicavel').click(function(){
            var id = \$(this).data('id');
            
            carregaContato(id);
            
        });

        \$('.link-excluir-contato').click(function () {

            var id = \$(this).attr('href').replace('#', '');

            excluiContato(id);

            return false;
        });

    });
</script>";
    }

    public function getTemplateName()
    {
        return "VostreCentralBundle:Central:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 132,  260 => 118,  230 => 90,  213 => 87,  209 => 86,  205 => 85,  201 => 84,  197 => 83,  192 => 82,  175 => 81,  157 => 65,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  125 => 58,  108 => 57,  90 => 41,  86 => 39,  82 => 38,  78 => 37,  74 => 36,  69 => 35,  54 => 22,  50 => 21,  46 => 20,  42 => 19,  24 => 4,  19 => 1,);
    }
}
