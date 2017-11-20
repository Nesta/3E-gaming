<?php

/* themes/contrib/material_admin/templates/admin/admin-block-content.html.twig */
class __TwigTemplate_86cd264271d8819c2671a1b1c32aad94f8b709993f33591828dfd2726147d5ae extends Twig_Template
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
        $tags = array("set" => 18, "if" => 24, "for" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
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

        // line 18
        $context["classes"] = array(0 => "list-group", 1 => ((        // line 20
(isset($context["compact"]) ? $context["compact"] : null)) ? ("compact") : ("")), 2 => "collection");
        // line 24
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 25
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "      <a class=\"list-group__link collection-item row\" href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\">
        <span class=\"collection-item-title col s12\">";
                // line 28
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo "</span>
      ";
                // line 29
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 30
                    echo "        <span class=\"list-group__description collection-item-description col s12\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true));
                    echo "</span>
      ";
                }
                // line 32
                echo "    </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/admin/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  74 => 32,  68 => 30,  66 => 29,  62 => 28,  57 => 27,  53 => 26,  48 => 25,  46 => 24,  44 => 20,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the content of an administrative block.
 *
 * Available variables:
 * - content: A list containing information about the block. Each element
 *   of the array represents an administrative menu item, and must at least
 *   contain the keys 'title', 'link_path', and 'localized_options', which are
 *   passed to l(). A 'description' key may also be provided.
 * - attributes: HTML attributes to be added to the element.
 * - compact: Boolean indicating whether compact mode is turned on or not.
 *
 * @see template_preprocess_admin_block_content()
 */
#}
{%
  set classes = [
    'list-group',
    compact ? 'compact',
    'collection',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% for item in content %}
      <a class=\"list-group__link collection-item row\" href=\"{{item.url}}\">
        <span class=\"collection-item-title col s12\">{{ item.title }}</span>
      {% if item.description %}
        <span class=\"list-group__description collection-item-description col s12\">{{ item.description }}</span>
      {% endif %}
    </a>
    {% endfor %}
  </div>
{% endif %}
";
    }
}
