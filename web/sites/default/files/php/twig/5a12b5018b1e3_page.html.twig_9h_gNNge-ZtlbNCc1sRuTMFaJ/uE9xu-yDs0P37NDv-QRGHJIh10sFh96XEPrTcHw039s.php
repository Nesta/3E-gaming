<?php

/* themes/contrib/material_admin/templates/layout/page.html.twig */
class __TwigTemplate_9c2ce35b8aaa55cfb590f87eacad4cfe9aa772366becb23d22f545b05eb3c39b extends Twig_Template
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
        $tags = array("set" => 46, "include" => 52, "if" => 58);
        $filters = array("trim" => 47, "striptags" => 47, "render" => 47);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'include', 'if'),
                array('trim', 'striptags', 'render'),
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

        // line 45
        echo "
 ";
        // line 46
        $context["utility_nav_classes"] = array(0 => ((( !twig_test_empty(trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute(        // line 47
(isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()))))) ||  !twig_test_empty(trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()))))))) ? ("utility-wrapper") : ("")));
        // line 50
        echo "
<div class=\"layout-container\">
  ";
        // line 52
        $this->loadTemplate("@material_admin/misc/notification-drawer.html.twig", "themes/contrib/material_admin/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        echo "  <header class=\"header-wrapper shadow\" role=\"banner\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      ";
        // line 56
        $this->loadTemplate("@material_admin/misc/notification-trigger.html.twig", "themes/contrib/material_admin/templates/layout/page.html.twig", 56)->display($context);
        // line 57
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo " 
      ";
        // line 58
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "status", array())) {
            // line 59
            echo "        </div>
      ";
        }
        // line 61
        echo "    </div>
  </header>
  <section";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["utility_nav_classes"]) ? $context["utility_nav_classes"] : null)), "method"), "html", null, true));
        echo ">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
    </div>
    </div>
  </section>
  <section class=\"highlighted-wrapper\">
      ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
  </section>
  <main role=\"main-wrapper\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 77
        echo "      <div class=\"layout-content\">
        ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>";
        // line 79
        echo " ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 80
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
      ";
        }
        // line 83
        echo " ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 84
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
      ";
        }
        // line 88
        echo "    </div>
    </div>
  </main>
  ";
        // line 91
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 92
            echo "  <footer role=\"contentinfo\">
    <div clas=\"row material-container\">
      ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
  ";
        }
        // line 98
        echo "</div>";
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 99,  149 => 98,  142 => 94,  138 => 92,  136 => 91,  131 => 88,  125 => 85,  122 => 84,  119 => 83,  113 => 81,  110 => 80,  107 => 79,  103 => 78,  100 => 77,  92 => 71,  83 => 66,  77 => 63,  73 => 61,  69 => 59,  67 => 58,  62 => 57,  60 => 56,  55 => 53,  53 => 52,  49 => 50,  47 => 47,  46 => 46,  43 => 45,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

 {% set utility_nav_classes = [
    page.breadcrumb|render|striptags|trim is not empty or page.primary_menu |render|striptags|trim is not empty  ? 'utility-wrapper',
   ]
 %}

<div class=\"layout-container\">
  {% include '@material_admin/misc/notification-drawer.html.twig' %}
  <header class=\"header-wrapper shadow\" role=\"banner\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      {% include '@material_admin/misc/notification-trigger.html.twig' %}
      {{ page.header }} 
      {% if page.status %}
        </div>
      {% endif %}
    </div>
  </header>
  <section{{ attributes.addClass(utility_nav_classes)}}>
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      {{ page.primary_menu }}{{ page.breadcrumb }}
    </div>
    </div>
  </section>
  <section class=\"highlighted-wrapper\">
      {{ page.highlighted }}
  </section>
  <main role=\"main-wrapper\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      <div class=\"layout-content\">
        {{ page.content }}
      </div>{# /.layout-content #} {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
      {% endif %} {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
      {% endif %}
    </div>
    </div>
  </main>
  {% if page.footer %}
  <footer role=\"contentinfo\">
    <div clas=\"row material-container\">
      {{ page.footer }}
    </div>
  </footer>
  {% endif %}
</div>{# /.layout-container #}

";
    }
}
