<?php

/* themes/contrib/material_admin/templates/admin/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_03d5dbedc668706a776c9558182a7a3e68bee225bd84aa63d3cbe3786ec4d7dd extends Twig_Template
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
        $tags = array("set" => 19, "if" => 28);
        $filters = array("clean_class" => 23, "t" => 31);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
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

        // line 19
        $context["classes"] = array(0 => "views-ui-display-tab-bucket", 1 => "collection with-header", 2 => "z-depth-1", 3 => ((        // line 23
(isset($context["name"]) ? $context["name"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["name"]) ? $context["name"] : null))) : ("")), 4 => ((        // line 24
(isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 27
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 28
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 29
            echo "<h2 class=\"collection-header no-bottom-border views-ui-display-tab-bucket__title small-header grey lighten-4\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
  ";
        } elseif ($this->getAttribute(        // line 30
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "access"), "method")) {
            // line 31
            echo "    <h2 class=\"collection-header no-bottom-border views-ui-display-tab-bucket__title small-header grey lighten-4\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Access")));
            echo "</h3>";
        }
        // line 33
        echo "  ";
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["actions"]) ? $context["actions"] : null), "html", null, true));
        }
        // line 36
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/admin/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  69 => 34,  66 => 33,  61 => 31,  59 => 30,  54 => 29,  52 => 28,  47 => 27,  45 => 24,  44 => 23,  43 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for each \"box\" on the display query edit screen.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the container element.
 * - actions: Action links such as \"Add\", \"And/Or, Rearrange\" for the content.
 * - title: The title of the bucket, e.g. \"Fields\", \"Filter Criteria\", etc.
 * - content: Content items such as fields or settings in this container.
 * - name: The name of the bucket, e.g. \"Fields\", \"Filter Criteria\", etc.
 * - overridden: A boolean indicating the setting has been overridden from the
 *   default.
 *
 * @see template_preprocess_views_ui_display_tab_bucket()
 */
#}
{%
  set classes = [
    'views-ui-display-tab-bucket',
    'collection with-header',
    'z-depth-1',
    name ? name|clean_class,
    overridden ? 'overridden',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if title -%}
    <h2 class=\"collection-header no-bottom-border views-ui-display-tab-bucket__title small-header grey lighten-4\">{{ title }}</h3>
  {% elseif attributes.hasClass('access') %}
    <h2 class=\"collection-header no-bottom-border views-ui-display-tab-bucket__title small-header grey lighten-4\">{{ 'Access' | t }}</h3>
  {%- endif %}
  {% if actions -%}
    {{ actions }}
  {%- endif %}
  {{ content }}
</div>
";
    }
}
