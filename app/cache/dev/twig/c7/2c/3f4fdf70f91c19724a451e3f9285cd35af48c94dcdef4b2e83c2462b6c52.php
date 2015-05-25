<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_c72c3f4fdf70f91c19724a451e3f9285cd35af48c94dcdef4b2e83c2462b6c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("JMSTranslationBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script language=\"javascript\" type=\"text/javascript\">
        \$(document).ready(function() {
            var updateMessagePath = ";
        // line 8
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")), "domain" => (isset($context["selectedDomain"]) ? $context["selectedDomain"] : $this->getContext($context, "selectedDomain")), "locale" => (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")))));
        echo ";
        
            \$('#config select').change(function() {
                \$(this).parent().submit();
            });
            
            ";
        // line 14
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === true)) {
            // line 15
            echo "            \$('textarea')
                .blur(function() {
                    var self = this;
                    \$.ajax(updateMessagePath + '?id=' + encodeURIComponent(\$(this).data('id')), {
                        type: 'POST',
                        headers: {'X-HTTP-METHOD-OVERRIDE': 'PUT'},
                        data: {'_method': 'PUT', 'message': \$(this).val()},
                        error: function() {
                            \$(self).parent().prepend('<div class=\"alert-message error\">Translation could not be saved</div>');
                        },
                        success: function() {
                            \$(self).parent().prepend('<div class=\"alert-message success\">Translation was saved.</div>');
                        },
                        complete: function() {
                            var parent = \$(self).parent();
                            \$(self).data('timeoutId', setTimeout(function() {
                                \$(self).data('timeoutId', undefined);
                                parent.children('.alert-message').fadeOut(300, function() { \$(this).remove(); });
                            }, 10000));
                        }
                    });
                })
                .focus(function() {
                    this.select();
                    
                    var timeoutId = \$(this).data('timeoutId');
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                        \$(this).data('timeoutId', undefined);
                    }
                    
                    \$(this).parent().children('.alert-message').remove();
                })
            ;
            ";
        }
        // line 50
        echo "        });
    </script>
";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "
    <form id=\"config\" action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 59
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "\"";
            if (($context["config"] == (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </select>
    
        <select name=\"domain\" class=\"span3\">
            ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : $this->getContext($context, "domains")));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 65
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\"";
            if (($context["domain"] == (isset($context["selectedDomain"]) ? $context["selectedDomain"] : $this->getContext($context, "selectedDomain")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </select>
        
        <select name=\"locale\" class=\"span2\">
            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 71
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"";
            if (($context["locale"] == (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </select>
    </form>
    
    ";
        // line 76
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === false)) {
            // line 77
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 81
        echo "    
    ";
        // line 82
        if (("xliff" != (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")))) {
            // line 83
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format. 
        
        <br /><br />
        
        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 92
        echo "
    <h2>Available Messages</h2>
    
    ";
        // line 95
        if ( !twig_test_empty((isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")))) {
            // line 96
            echo "    <h3>New Messages</h3>
    ";
            // line 97
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")))));
            // line 98
            echo "    ";
        }
        // line 99
        echo "    
    ";
        // line 100
        if ( !twig_test_empty((isset($context["existingMessages"]) ? $context["existingMessages"] : $this->getContext($context, "existingMessages")))) {
            // line 101
            echo "    <h3>Existing Messages</h3>
    ";
            // line 102
            $this->env->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig")->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) ? $context["existingMessages"] : $this->getContext($context, "existingMessages")))));
            // line 103
            echo "    ";
        }
        // line 104
        echo "
";
    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 104,  242 => 103,  240 => 102,  237 => 101,  235 => 100,  232 => 99,  229 => 98,  227 => 97,  224 => 96,  222 => 95,  217 => 92,  209 => 89,  201 => 83,  199 => 82,  196 => 81,  190 => 78,  187 => 77,  185 => 76,  180 => 73,  165 => 71,  161 => 70,  156 => 67,  141 => 65,  137 => 64,  132 => 61,  117 => 59,  113 => 58,  108 => 56,  105 => 55,  102 => 54,  96 => 50,  59 => 15,  57 => 14,  48 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
