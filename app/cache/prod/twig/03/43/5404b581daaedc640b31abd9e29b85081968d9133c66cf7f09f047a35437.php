<?php

/* VostreCentralBundle:Central:indexAdmin.html.twig */
class __TwigTemplate_03435404b581daaedc640b31abd9e29b85081968d9133c66cf7f09f047a35437 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4>Ol&aacute;, ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nome", array()), "html", null, true);
        echo "! ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "roles", array()), 0, array()), "html", null, true);
        echo "</h4>
            <p>Seja bem vindo &agrave; central do administrador <strong>Vostr&egrave;</strong>!</p>
            <p>Aqui voc&ecirc; pode enviar avisos, verificar 
                chamados abertos, al&eacute;m de ler sugest&otilde;es de melhorias, 
                atrav&eacute;s de mensagens de nossos clientes e, claro, gerenciar os dados dos m&oacute;dulos.</p>
        </div>
    </div>
    ";
        // line 50
        echo "    <div class=\"row\">
        <div class=\"col-md-12 text-center\">
            <h4>Universais</h4>
        </div>
    </div>
    <div class=\"row text-center v-links-administracao\">
        <div class=\"col-md-12\">
            <div class=\"btn-group\">
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_paises");
        echo "\" class=\"btn btn-primary\">Gerenciar Pa&iacute;ses</a>
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_estados");
        echo "\" class=\"btn btn-primary\">Gerenciar Estados</a>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_locais");
        echo "\" class=\"btn btn-primary\">Gerenciar Locais</a>
                <a href=\"";
        // line 61
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
                <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_horarios");
        echo "\" class=\"btn btn-primary\">Gerenciar Hor&aacute;rios</a>
                <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_paradas");
        echo "\" class=\"btn btn-primary\">Gerenciar Paradas</a>
                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_empresas");
        echo "\" class=\"btn btn-primary\">Gerenciar Empresas</a>
                <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_itinerarios");
        echo "\" class=\"btn btn-primary\">Gerenciar Itiner&aacute;rios</a>
                <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_horarios_itinerarios");
        echo "\" class=\"btn btn-primary\">Gerenciar Hor&aacute;rios Itiner&aacute;rios</a>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"form-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-lable\" 
     aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"modal-lable\">Novo Aviso</h4>
      </div>
      <div class=\"modal-body\">
          <form id=\"form-cadastra-recado\" action=\"#\" method=\"POST\">
              ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRecado"]) ? $context["formRecado"] : null), 'widget');
        echo "
          </form> 
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"btn-enviar-recado\">Enviar</button>
      </div>
    </div>
  </div>
</div>";
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
        return array (  108 => 93,  89 => 77,  85 => 76,  81 => 75,  77 => 74,  73 => 73,  58 => 61,  54 => 60,  50 => 59,  46 => 58,  36 => 50,  24 => 4,  19 => 1,);
    }
}
