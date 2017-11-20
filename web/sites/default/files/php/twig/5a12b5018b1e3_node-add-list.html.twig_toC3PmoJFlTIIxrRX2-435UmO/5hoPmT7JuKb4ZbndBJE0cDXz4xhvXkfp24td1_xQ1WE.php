<?php

/* themes/contrib/material_admin/templates/node/node-add-list.html.twig */
class __TwigTemplate_5dbb369ba3e4c436f0d816c5171488d9f2570ee8d7d1f09a51829e6f748d38df extends Twig_Template
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
        $tags = array("if" => 18, "trans" => 20, "for" => 21, "set" => 28);
        $filters = array();
        $functions = array("path" => 22);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans', 'for', 'set'),
                array(),
                array('path')
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
        if ( !twig_test_empty((isset($context["types"]) ? $context["types"] : null))) {
            // line 19
            echo "  <div class=\"collection with-header\">
    <div class=\"collection-item row\"><h4 class=\"collection-item-title col s12\">";
            // line 20
            echo t("Add New Content", array());
            echo "</h4></div>
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["type_id"] => $context["type"]) {
                // line 22
                echo "      <a class=\"collection-item row\" href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getPath("node.add", array("node_type" => $context["type_id"])), "html", null, true));
                echo "\">
       <span class=\"collection-item-title col s12\" >";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true));
                echo "</span> <span class=\"collection-item-description col s12\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true));
                echo "</span></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type_id'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
";
        } else {
            // line 27
            echo "  <p>
    ";
            // line 28
            $context["create_content"] = $this->env->getExtension('drupal_core')->getPath("node.type_add");
            // line 29
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\" class=\"btn\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 30
(isset($context["create_content"]) ? $context["create_content"] : null), ));
            // line 32
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/node/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  82 => 30,  80 => 29,  78 => 28,  75 => 27,  71 => 25,  61 => 23,  56 => 22,  52 => 21,  48 => 20,  45 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to list node types available for adding content.
 *
 * This list is displayed on the Add content admin page.
 *
 * Available variables:
 * - types: A list of content types, each with the following properties:
 *   - add_link: Link to create a piece of content of this type.
 *   - description: Description of this type of content.
 *
 * @see template_preprocess_node_add_list()
 *
 * @ingroup themeable
 */
#}
{% if types is not empty %}
  <div class=\"collection with-header\">
    <div class=\"collection-item row\"><h4 class=\"collection-item-title col s12\">{% trans %}Add New Content{% endtrans %}</h4></div>
    {% for type_id,type in types %}
      <a class=\"collection-item row\" href=\"{{ path('node.add', {'node_type': type_id }) }}\">
       <span class=\"collection-item-title col s12\" >{{type.label}}</span> <span class=\"collection-item-description col s12\">{{ type.description }}</span></a>
    {% endfor %}
</div>
{% else %}
  <p>
    {% set create_content = path('node.type_add') %}
    {% trans %}
      You have not created any content types yet. Go to the <a href=\"{{ create_content }}\" class=\"btn\">content type creation page</a> to add a new content type.
    {% endtrans %}
  </p>
{% endif %}";
    }
}
