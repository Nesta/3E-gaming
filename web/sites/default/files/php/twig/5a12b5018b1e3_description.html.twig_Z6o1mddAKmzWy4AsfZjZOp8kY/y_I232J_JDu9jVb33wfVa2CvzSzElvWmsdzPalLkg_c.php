<?php

/* @material_admin/misc/description.html.twig */
class __TwigTemplate_d9df392ccccf054dd8162487b0d567b2315ea4edc40a9620ced8cb3cf08865b0 extends Twig_Template
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
        $tags = array("set" => 14, "if" => 20);
        $filters = array("e" => 31);
        $functions = array("create_attribute" => 24, "render_var" => 31);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('e'),
                array('create_attribute', 'render_var')
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
        echo "
";
        // line 14
        $context["description_classes"] = array(0 => "description", 1 => (((        // line 16
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_iterable((isset($context["description"]) ? $context["description"] : null))) {
            // line 21
            echo "  ";
            // line 22
            $context["description"] = array("content" =>             // line 23
(isset($context["description"]) ? $context["description"] : null), "attributes" => $this->env->getExtension('drupal_core')->createAttribute(array()));
        }
        // line 28
        echo "
";
        // line 29
        if ( !twig_test_empty($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 30
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
            echo ">
    <a class=\"tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-html=\"true\" data-tooltip=\"";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())), "html_attr"));
            echo "\">More info <i class=\"material-icons\" aria-hidden=\"true\">help</i></a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  65 => 30,  63 => 29,  60 => 28,  57 => 23,  56 => 22,  54 => 21,  52 => 20,  49 => 19,  47 => 16,  46 => 14,  43 => 12,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Description styling
 *
 * Available variables:
 * - description: Either a singleton (markup), or an array in the format:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
#}

{%
  set description_classes = [
    'description',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}

{% if description is not iterable %}
  {%
    set description = {
      content: description,
      attributes: create_attribute({}),
    }
  %}
{% endif %}

{% if description.content is not empty %}
  <div{{ description.attributes.addClass(description_classes) }}>
    <a class=\"tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-html=\"true\" data-tooltip=\"{{ render_var(description.content) | e('html_attr') }}\">More info <i class=\"material-icons\" aria-hidden=\"true\">help</i></a>
  </div>
{% endif %}
";
    }
}
