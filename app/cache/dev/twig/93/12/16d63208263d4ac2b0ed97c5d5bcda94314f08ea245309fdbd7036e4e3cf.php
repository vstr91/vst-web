<?php

/* CircularSiteBundle:Admin:Mensagem/form.html.twig */
class __TwigTemplate_931216d63208263d4ac2b0ed97c5d5bcda94314f08ea245309fdbd7036e4e3cf extends Twig_Template
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
        echo "<form id=\"form-mensagem\" 
      action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_mensagens_cadastra", array("id_mensagem" => $this->getAttribute((isset($context["mensagem"]) ? $context["mensagem"] : $this->getContext($context, "mensagem")), "id", array()))), "html", null, true);
        echo "\" 
      method=\"POST\" ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" class=\"hidden\" id=\"btn-submit\" value=\"Cadastrar\" />
    </p>
</form>
<script type=\"text/javascript\">
    ";
        // line 18
        echo "    
    \$(document).ready(function(){
        \$('.editor').trumbowyg({
            btns: [
                ['viewHTML'],
                ['formatting'],
                'btnGrp-semantic',
                ['superscript', 'subscript'],
                ['link'],
                'btnGrp-justify',
                'btnGrp-lists',
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ],
            removeformatPasted: true
        });
        
        \$('#btn-editar').click(function(){
            \$('#btn-submit').click();
        });
        
    });
    
</script>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin:Mensagem/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 18,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
