<?php

/* themes/contrib/material_admin/templates/admin/views-ui-views-listing-table.html.twig */
class __TwigTemplate_abb37a77a5eda4ce197b036193bc30bcbecf841c6daa233f193666f092b3f135 extends Twig_Template
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
        $tags = array("set" => 19, "for" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for'),
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

        // line 19
        $context["classes"] = array(0 => "responsive-enabled", 1 => "bordered", 2 => "highlight");
        // line 25
        echo "<div class=\"card\">
<table";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <thead>
    <tr>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) ? $context["headers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 30
            echo "        <th";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["header"], "attributes", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["header"], "data", array()), "html", null, true));
            echo "</th>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tr>
  </thead>
  <tbody>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 36
            echo "      <tr";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
        <td class=\"views-ui-view-name\">
          <h3 data-drupal-selector=\"views-table-filter-text-source\">";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "view_name", array()), "data", array()), "html", null, true));
            echo "</h3>
        </td>
        <td class=\"views-ui-view-machine-name\" data-drupal-selector=\"views-table-filter-text-source\">
          ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "machine_name", array()), "data", array()), "html", null, true));
            echo "
        </td>
        <td class=\"views-ui-view-description\" data-drupal-selector=\"views-table-filter-text-source\">
          ";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "description", array()), "data", array()), "html", null, true));
            echo "
        </td>
        <td class=\"views-ui-view-displays\">
          ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "displays", array()), "data", array()), "html", null, true));
            echo "
        </td>
        <td class=\"views-ui-view-operations\">
          ";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "data", array()), "operations", array()), "data", array()), "html", null, true));
            echo "
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "  </tbody>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/admin/views-ui-views-listing-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  108 => 50,  102 => 47,  96 => 44,  90 => 41,  84 => 38,  78 => 36,  74 => 35,  69 => 32,  58 => 30,  54 => 29,  48 => 26,  45 => 25,  43 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for views listing table.
 *
 * Available variables:
 * - headers: Contains table headers.
 * - rows: Contains multiple rows. Each row contains:
 *   - view_name: The human-readable name of the view.
 *   - machine_name: Machine name of the view.
 *   - description: The description of the view.
 *   - displays: List of displays attached to the view.
 *   - operations: List of available operations.
 *
 * @see template_preprocess_views_ui_views_listing_table()
 */
#}
{%
  set classes = [
  'responsive-enabled',
  'bordered',
  'highlight',
  ]
%}
<div class=\"card\">
<table{{ attributes.addClass(classes) }}>
  <thead>
    <tr>
      {% for header in headers %}
        <th{{ header.attributes }}>{{ header.data }}</th>
      {% endfor %}
    </tr>
  </thead>
  <tbody>
    {% for row in rows %}
      <tr{{ row.attributes }}>
        <td class=\"views-ui-view-name\">
          <h3 data-drupal-selector=\"views-table-filter-text-source\">{{ row.data.view_name.data }}</h3>
        </td>
        <td class=\"views-ui-view-machine-name\" data-drupal-selector=\"views-table-filter-text-source\">
          {{ row.data.machine_name.data }}
        </td>
        <td class=\"views-ui-view-description\" data-drupal-selector=\"views-table-filter-text-source\">
          {{ row.data.description.data }}
        </td>
        <td class=\"views-ui-view-displays\">
          {{ row.data.displays.data }}
        </td>
        <td class=\"views-ui-view-operations\">
          {{ row.data.operations.data }}
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
</div>
";
    }
}
