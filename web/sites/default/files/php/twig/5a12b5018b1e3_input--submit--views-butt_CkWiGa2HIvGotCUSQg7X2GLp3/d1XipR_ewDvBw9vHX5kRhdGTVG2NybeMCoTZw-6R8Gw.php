<?php

/* themes/contrib/material_admin/templates/buttons/input--submit--views-button-cancel.html.twig */
class __TwigTemplate_3a9d832a101eb564dd7536094e1920a1909af3ad44d3886652c2e94bce1f3a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input--submit--button.html.twig", "themes/contrib/material_admin/templates/buttons/input--submit--views-button-cancel.html.twig", 1);
        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input--submit--button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_icon($context, array $blocks = array())
    {
        // line 16
        echo "  cancel
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/buttons/input--submit--views-button-cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  52 => 15,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"input--submit--button.html.twig\" %}
{#
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

{% block icon %}
  cancel
{% endblock %}";
    }
}
