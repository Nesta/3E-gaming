<?php

/* themes/contrib/material_admin/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_bf3fd196217a714a00b910a70a75ecb06ff3117c644130ba86cc72f378e9978b extends Twig_Template
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
        $tags = array("for" => 32, "set" => 34, "if" => 58);
        $filters = array("safe_join" => 59);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('safe_join'),
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

        // line 31
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_groups"]) ? $context["theme_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 33
            echo "    ";
            // line 34
            $context["theme_group_classes"] = array(0 => "system-themes-list", 1 => ("system-themes-list-" . $this->getAttribute(            // line 36
$context["theme_group"], "state", array())), 2 => "clearfix");
            // line 40
            echo "   <div class=\"row\"><h2 class=\"small-header col s12\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "title", array()), "html", null, true));
            echo "</h2></div>
    <div";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme_group"], "attributes", array()), "addClass", array(0 => (isset($context["theme_group_classes"]) ? $context["theme_group_classes"] : null)), "method"), "html", null, true));
            echo ">
      
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 44
                echo "        ";
                // line 45
                $context["theme_classes"] = array(0 => (($this->getAttribute(                // line 46
$context["theme"], "is_default", array())) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 47
$context["theme"], "is_admin", array())) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "col", 4 => "s12", 5 => "m6", 6 => "l4", 7 => "xl3");
                // line 56
                echo "        <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "attributes", array()), "addClass", array(0 => (isset($context["theme_classes"]) ? $context["theme_classes"] : null)), "method"), "html", null, true));
                echo ">
          <div class=\"card large sticky-action\">
                         ";
                // line 58
                if (($this->getAttribute($context["theme"], "notes", array()) && $this->getAttribute($context["theme"], "is_admin", array()))) {
                    // line 59
                    echo "                 <span class=\"theme-status-indicator\"> <i class=\"material-icons\">edit</i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute($context["theme"], "notes", array()), ", ")));
                    echo "</span>
                ";
                }
                // line 61
                echo "              ";
                if (($this->getAttribute($context["theme"], "notes", array()) && $this->getAttribute($context["theme"], "is_default", array()))) {
                    // line 62
                    echo "                 <span class=\"theme-status-indicator\"><i class=\"material-icons\">star</i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute($context["theme"], "notes", array()), ", ")));
                    echo "</span>";
                }
                // line 64
                echo "<div class=\"card-image waves-effect waves-block waves-light\">
              ";
                // line 65
                if ($this->getAttribute($context["theme"], "screenshot", array())) {
                    echo " <span class=\"activator\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "screenshot", array()), "html", null, true));
                    echo "</span> ";
                }
                // line 66
                echo "            </div>
            <div class=\"card-content theme-info\">
              <span class=\"card-title activator grey-text text-darken-4\"><span class=\"theme-name\">";
                // line 68
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true));
                echo "</span><i class=\"material-icons right\" aria-hidden=\"true\">more_vert</i></span>
            </div>
            <div class=\"card-reveal\">
              <span class=\"card-title grey-text text-darken-4\">";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true));
                echo "<i class=\"material-icons right\" aria-hidden=\"true\">close</i></span>
              <p>";
                // line 72
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "description", array()), "html", null, true));
                echo "</p>
              <p> ";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true));
                echo "</p>
            </div>
            <div class=\"card-action\">
              ";
                // line 76
                echo " 
              ";
                // line 77
                if ($this->getAttribute($context["theme"], "incompatible", array())) {
                    // line 78
                    echo "              <div class=\"incompatible\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "incompatible", array()), "html", null, true));
                    echo "</div>
              ";
                } else {
                    // line 79
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "operations", array()), "html", null, true));
                    echo " ";
                }
                // line 80
                echo "            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 86,  157 => 84,  148 => 80,  143 => 79,  137 => 78,  135 => 77,  132 => 76,  126 => 73,  122 => 72,  118 => 71,  112 => 68,  108 => 66,  102 => 65,  99 => 64,  94 => 62,  91 => 61,  85 => 59,  83 => 58,  77 => 56,  75 => 47,  74 => 46,  73 => 45,  71 => 44,  67 => 43,  62 => 41,  57 => 40,  55 => 36,  54 => 34,  52 => 33,  48 => 32,  43 => 31,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the Appearance page.
 *
 * Available variables:
 * - attributes: HTML attributes for the main container.
 * - theme_groups: A list of theme groups. Each theme group contains:
 *   - attributes: HTML attributes specific to this theme group.
 *   - title: Title for the theme group.
 *   - state: State of the theme group, e.g. installed or uninstalled.
 *   - themes: A list of themes within the theme group. Each theme contains:
 *     - attributes: HTML attributes specific to this theme.
 *     - screenshot: A screenshot representing the theme.
 *     - description: Description of the theme.
 *     - name: Theme name.
 *     - version: The theme's version number.
 *     - is_default: Boolean indicating whether the theme is the default theme
 *       or not.
 *     - is_admin: Boolean indicating whether the theme is the admin theme or
 *       not.
 *     - notes: Identifies what context this theme is being used in, e.g.,
 *       default theme, admin theme.
 *     - incompatible: Text describing any compatibility issues.
 *     - operations: A list of operation links, e.g., Settings, Enable, Disable,
 *       etc. these links should only be displayed if the theme is compatible.
 *
 * @see template_preprocess_system_themes_page()
 */
#}
<div{{ attributes }}>
  {% for theme_group in theme_groups %}
    {%
      set theme_group_classes = [
        'system-themes-list',
        'system-themes-list-' ~ theme_group.state,
        'clearfix',
      ]
    %}
   <div class=\"row\"><h2 class=\"small-header col s12\">{{ theme_group.title }}</h2></div>
    <div{{ theme_group.attributes.addClass(theme_group_classes) }}>
      
      {% for theme in theme_group.themes %}
        {%
          set theme_classes = [
            theme.is_default ? 'theme-default',
            theme.is_admin ? 'theme-admin',
            'theme-selector',
            'col',
            's12',
            'm6',
            'l4',
            'xl3'
          ]
        %}
        <div{{ theme.attributes.addClass(theme_classes) }}>
          <div class=\"card large sticky-action\">
                         {% if theme.notes and theme.is_admin %}
                 <span class=\"theme-status-indicator\"> <i class=\"material-icons\">edit</i> {{ theme.notes|safe_join(', ') }}</span>
                {% endif %}
              {% if theme.notes and theme.is_default %}
                 <span class=\"theme-status-indicator\"><i class=\"material-icons\">star</i> {{ theme.notes|safe_join(', ') }}</span>
              {%- endif -%}
            <div class=\"card-image waves-effect waves-block waves-light\">
              {% if theme.screenshot %} <span class=\"activator\">{{ theme.screenshot}}</span> {% endif %}
            </div>
            <div class=\"card-content theme-info\">
              <span class=\"card-title activator grey-text text-darken-4\"><span class=\"theme-name\">{{- theme.name }}</span><i class=\"material-icons right\" aria-hidden=\"true\">more_vert</i></span>
            </div>
            <div class=\"card-reveal\">
              <span class=\"card-title grey-text text-darken-4\">{{- theme.name }}<i class=\"material-icons right\" aria-hidden=\"true\">close</i></span>
              <p>{{ theme.description }}</p>
              <p> {{ theme.version -}} </p>
            </div>
            <div class=\"card-action\">
              {# Display operation links if the theme is compatible. #} 
              {% if theme.incompatible %}
              <div class=\"incompatible\">{{ theme.incompatible }}</div>
              {% else %} {{ theme.operations }} {% endif %}
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
  {% endfor %}
</div>
";
    }
}
