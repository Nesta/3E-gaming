<?php

/* themes/contrib/material_admin/templates/form/input--submit.html.twig */
class __TwigTemplate_6e99efb9ab3c6fc00452b124df6b6cbcade7c84d901d7c9ca3fa2be1932fd52e extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        // line 14
        if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "visually-hidden"), "method") || $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "js-hide"), "method"))) {
            // line 15
            echo "  <input";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "js-hide"), "method"), "html", null, true));
            echo " />";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
";
        } else {
            // line 17
            echo "  ";
            // line 18
            echo "  ";
            if ( !preg_match("/^add-display.*\$/", $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()))) {
                // line 19
                echo "    <i class=\"waves-effect waves-light waves-input-wrapper button btn\">
      <input";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "waves-button-input"), "method"), "html", null, true));
                echo " />";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
    </i>
  ";
            } else {
                // line 23
                echo "    <input";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                echo " />";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/form/input--submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  64 => 20,  61 => 19,  58 => 18,  56 => 17,  48 => 15,  46 => 14,  43 => 13,);
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

{% if attributes.hasClass('visually-hidden') or  attributes.hasClass('js-hide') %}
  <input{{ attributes.addClass('js-hide') }} />{{ children }}
{% else %}
  {# Views UI does not use core's dropbutton for adding displays #}
  {% if not (attributes.class matches '/^add-display.*\$/') %}
    <i class=\"waves-effect waves-light waves-input-wrapper button btn\">
      <input{{ attributes.addClass('waves-button-input') }} />{{ children }}
    </i>
  {% else %}
    <input{{ attributes }} />{{ children }}
  {% endif %}
{% endif %}
";
    }
}
