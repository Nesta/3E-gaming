<?php

/* themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig */
class __TwigTemplate_a569836e8d470d702c4e9991195e2d27c5138f819ab902525a834e78335d4723 extends Twig_Template
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
        $tags = array("if" => 20, "set" => 22, "include" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'include'),
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

        // line 16
        echo "
<div class=\"js-text-format-wrapper text-format-wrapper js-form-item\">
 \t";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
 
  ";
        // line 20
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 21
            echo "    ";
            // line 22
            $context["classes"] = array(0 => ((            // line 23
(isset($context["aria_description"]) ? $context["aria_description"] : null)) ? ("description") : ("")));
            // line 26
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig", 26)->display($context);
            // line 27
            echo "  ";
        }
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  62 => 27,  59 => 26,  57 => 23,  56 => 22,  54 => 21,  52 => 20,  47 => 18,  43 => 16,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a text format-enabled form element.
 *
 * Available variables:
 * - children: Text format element children.
 * - description: Text format element description.
 * - attributes: HTML attributes for the containing element.
 * - aria_description: Flag for whether or not an ARIA description has been
 *   added to the description container.
 *
 * @see template_preprocess_text_format_wrapper()
 */
#}

<div class=\"js-text-format-wrapper text-format-wrapper js-form-item\">
 \t{{ children }}
 
  {% if description %}
    {%
      set classes = [
        aria_description ? 'description',
      ]
    %}
    {% include '@material_admin/misc/description.html.twig' %}
  {% endif %}
</div>
";
    }
}
