<?php

/* themes/contrib/material_admin/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_fd192eeaebb6211678858dce8fb6147bd620f0774ca0e35d70059f940bbace86 extends Twig_Template
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
        $tags = array("if" => 21);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 12
        echo "<ul class=\"collapsible exposed-form-collapsible\" data-collapsible=\"accordion\">
  <li>
    <div class=\"collapsible-header\">
      <a class=\"btn btn-floating\">
        <i class=\"material-icons\" aria-hidden=\"true\" title=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Filter")));
        echo "\">filter_list</i>
      </a>
      <div class=\"exposed-form-chips\"></div>
    </div>
    <div class=\"collapsible-body\">
      ";
        // line 21
        if ( !twig_test_empty((isset($context["q"]) ? $context["q"] : null))) {
            // line 22
            echo "        ";
            // line 26
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true));
            echo "
      ";
        }
        // line 28
        echo "      <div class=\"form--inline clearfix\">
        ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
      </div>
    </div>
  </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  67 => 28,  61 => 26,  59 => 22,  57 => 21,  49 => 16,  43 => 12,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a views exposed form.
 *
 * Available variables:
 * - form: A render element representing the form.
 *
 * @see template_preprocess_views_exposed_form()
 */
#}
<ul class=\"collapsible exposed-form-collapsible\" data-collapsible=\"accordion\">
  <li>
    <div class=\"collapsible-header\">
      <a class=\"btn btn-floating\">
        <i class=\"material-icons\" aria-hidden=\"true\" title=\"{{ 'Filter' | t }}\">filter_list</i>
      </a>
      <div class=\"exposed-form-chips\"></div>
    </div>
    <div class=\"collapsible-body\">
      {% if q is not empty %}
        {#
          This ensures that, if clean URLs are off, the 'q' is added first,
          as a hidden form element, so that it shows up first in the POST URL.
        #}
      {{ q }}
      {% endif %}
      <div class=\"form--inline clearfix\">
        {{ form }}
      </div>
    </div>
  </li>
</ul>
";
    }
}
