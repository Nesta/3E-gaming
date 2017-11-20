<?php

/* themes/contrib/material_admin/templates/navigation/links--dropbutton.html.twig */
class __TwigTemplate_92e12a824ff9b5118b92bb6da6dd373e13706daed7a8e31d2325360c31212450 extends Twig_Template
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
        $tags = array("set" => 35, "if" => 37, "trans" => 54, "for" => 59);
        $filters = array("length" => 52);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'for'),
                array('length'),
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

        // line 34
        echo "
";
        // line 35
        $context["manage_btn_classses"] = "dropdown-button btn grey lighten-3 grey-text text-darken-2";
        // line 36
        echo "  
";
        // line 37
        if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "views-ui-settings-bucket-operations"), "method") || ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) == "views-display-extra-actions"))) {
            // line 38
            echo "  ";
            $context["btn_classses"] = "dropdown-button ellipsis-icon btn btn-flat darken-3 text-darken-2";
        } elseif ($this->getAttribute(        // line 39
(isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "views-bulk-form-dropdown"), "method")) {
            // line 40
            echo "  ";
            $context["btn_classses"] = "dropdown-button btn btn-floating pulse";
        } else {
            // line 42
            echo "  ";
            $context["btn_classses"] = "dropdown-button ellipsis-icon btn grey lighten-3 grey-text text-darken-2";
        }
        // line 44
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 45
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 46
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array())) {
                    // line 47
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 49
                    echo "<h2";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 52
            if ((twig_length_filter($this->env, (isset($context["links"]) ? $context["links"] : null)) > 1)) {
                // line 53
                if ($this->getAttribute((isset($context["links"]) ? $context["links"] : null), "publish", array())) {
                    // line 54
                    echo "<a class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["manage_btn_classses"]) ? $context["manage_btn_classses"] : null), "html", null, true));
                    echo "\" href=\"#\" data-constrainWidth=\"0\">";
                    echo t("MANAGE", array());
                    echo "</a>";
                } else {
                    // line 56
                    echo "<a class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["btn_classses"]) ? $context["btn_classses"] : null), "html", null, true));
                    echo "\" href=\"#\" data-constrainWidth=\"0\"><i class=\"material-icons\" aria-hidden=\"true\">more_vert</i></a>";
                }
                // line 58
                echo "<ul";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown-content"), "method"), "html", null, true));
                echo ">";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 60
                    echo "<li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 61
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 62
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                    } elseif ($this->getAttribute(                    // line 63
$context["item"], "text_attributes", array())) {
                        // line 64
                        echo "<span";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                        echo "</span>";
                    } else {
                        // line 66
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    }
                    // line 68
                    echo "</li>
      <li class=\"divider\"></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "</ul>";
            } else {
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 74
                    echo "<li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "single-btn-wrapper"), "method"), "html", null, true));
                    echo ">";
                    // line 75
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 76
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                    } elseif ($this->getAttribute(                    // line 77
$context["item"], "text_attributes", array())) {
                        // line 78
                        echo "<span";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                        echo "</span>";
                    } else {
                        // line 80
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    }
                    // line 82
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/navigation/links--dropbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 82,  165 => 80,  158 => 78,  156 => 77,  154 => 76,  152 => 75,  148 => 74,  144 => 73,  141 => 71,  134 => 68,  131 => 66,  124 => 64,  122 => 63,  120 => 62,  118 => 61,  114 => 60,  110 => 59,  106 => 58,  101 => 56,  94 => 54,  92 => 53,  90 => 52,  82 => 49,  72 => 47,  70 => 46,  68 => 45,  66 => 44,  62 => 42,  58 => 40,  56 => 39,  53 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a set of links.
 *
 * Available variables:
 * - attributes: Attributes for the UL containing the list of links.
 * - links: Links to be output.
 *   Each link will have the following elements:
 *   - title: The link text.
 *   - href: The link URL. If omitted, the 'title' is shown as a plain text
 *     item in the links list. If 'href' is supplied, the entire link is passed
 *     to l() as its \$options parameter.
 *   - attributes: (optional) HTML attributes for the anchor, or for the <span>
 *     tag if no 'href' is supplied.
 * - heading: (optional) A heading to precede the links.
 *   - text: The heading text.
 *   - level: The heading level (e.g. 'h2', 'h3').
 *   - attributes: (optional) A keyed list of attributes for the heading.
 *   If the heading is a string, it will be used as the text of the heading and
 *   the level will default to 'h2'.
 *
 *   Headings should be used on navigation menus and any list of links that
 *   consistently appears on multiple pages. To make the heading invisible use
 *   the 'visually-hidden' CSS class. Do not use 'display:none', which
 *   removes it from screen readers and assistive technology. Headings allow
 *   screen reader and keyboard only users to navigate to or skip the links.
 *   See http://juicystudio.com/article/screen-readers-display-none.php and
 *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @see template_preprocess_links()
 */
#}

{% set manage_btn_classses = 'dropdown-button btn grey lighten-3 grey-text text-darken-2' %}
  
{% if attributes.hasClass('views-ui-settings-bucket-operations') or attributes.id == 'views-display-extra-actions' %}
  {% set btn_classses = 'dropdown-button ellipsis-icon btn btn-flat darken-3 text-darken-2' %}
{% elseif attributes.hasClass('views-bulk-form-dropdown') %}
  {% set btn_classses = 'dropdown-button btn btn-floating pulse' %}
{% else %}
  {% set btn_classses = 'dropdown-button ellipsis-icon btn grey lighten-3 grey-text text-darken-2' %}
{% endif %}
{% if links -%}
  {%- if heading -%}
    {%- if heading.level -%}
      <{{ heading.level }}{{ heading.attributes }}>{{ heading.text }}</{{ heading.level }}>
    {%- else -%}
      <h2{{ heading.attributes }}>{{ heading.text }}</h2>
    {%- endif -%}
  {%- endif -%}
  {%- if links|length > 1 -%}
    {%- if links.publish -%}
     <a class=\"{{ manage_btn_classses }}\" href=\"#\" data-constrainWidth=\"0\">{% trans %}MANAGE{% endtrans %}</a>
     {%- else -%}
     <a class=\"{{ btn_classses }}\" href=\"#\" data-constrainWidth=\"0\"><i class=\"material-icons\" aria-hidden=\"true\">more_vert</i></a>
    {%- endif -%}
  <ul{{ attributes.addClass('dropdown-content') }}>
    {%- for item in links -%}
      <li{{ item.attributes }}>
        {%- if item.link -%}
          {{ item.link }}
        {%- elseif item.text_attributes -%}
          <span{{ item.text_attributes }}>{{ item.text }}</span>
        {%- else -%}
          {{ item.text }}
        {%- endif -%}
      </li>
      <li class=\"divider\"></li>
    {%- endfor -%}
  </ul>
  {%- else -%}
   {%- for item in links -%}
      <li{{ item.attributes.addClass('single-btn-wrapper') }}>
        {%- if item.link -%}
          {{ item.link }}
        {%- elseif item.text_attributes -%}
          <span{{ item.text_attributes }}>{{ item.text }}</span>
        {%- else -%}
          {{ item.text }}
        {%- endif -%}
      </li>
    {%- endfor -%}
{%- endif %}
{%- endif %}
";
    }
}
