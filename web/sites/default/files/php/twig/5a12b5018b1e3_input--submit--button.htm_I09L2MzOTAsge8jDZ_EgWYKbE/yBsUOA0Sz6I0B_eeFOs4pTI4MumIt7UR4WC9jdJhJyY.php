<?php

/* input--submit--button.html.twig */
class __TwigTemplate_1e0d2e5e4dfda01694652b83fb4ae29c7a12ce8ee649cebb80e5cabf5849a7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 15, "block" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo "
";
        // line 15
        $context["classes"] = array(0 => "waves-effect", 1 => "waves-light", 2 => "btn");
        // line 21
        echo "
<button";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo "><i class=\"material-icons\">";
        $this->displayBlock('icon', $context, $blocks);
        echo "</i> <span>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "value", array()), "html", null, true));
        echo "</span></button>";
    }

    public function block_icon($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "input--submit--button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  49 => 21,  47 => 15,  44 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 */
#}

{%
  set classes = [
  'waves-effect', 
  'waves-light', 
  'btn'
  ]
 %}

<button{{ attributes.addClass(classes) }}><i class=\"material-icons\">{% block icon %}{% endblock %}</i> <span>{{ attributes.value }}</span></button>";
    }
}
