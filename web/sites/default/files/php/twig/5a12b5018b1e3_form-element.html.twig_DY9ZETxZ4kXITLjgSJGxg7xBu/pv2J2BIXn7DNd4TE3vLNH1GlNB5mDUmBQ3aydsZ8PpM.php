<?php

/* themes/contrib/material_admin/templates/form/form-element.html.twig */
class __TwigTemplate_17ce489c2e05114442915ede193f227c76e11de8f720b80b4434bcf28f2d881a extends Twig_Template
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
        $tags = array("set" => 48, "if" => 70, "include" => 94);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'include'),
                array('clean_class'),
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

        // line 48
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
(isset($context["type"]) ? $context["type"] : null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["type"]) ? $context["type"] : null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
(isset($context["name"]) ? $context["name"] : null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
(isset($context["name"]) ? $context["name"] : null))), 6 => (((        // line 55
(isset($context["label_display"]) ? $context["label_display"] : null) == "none")) ? ("form-no-label") : ("")), 7 => ((twig_in_filter(        // line 56
(isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-has-label") : ("")), 8 => (((        // line 57
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")), 9 => ((twig_in_filter(        // line 58
(isset($context["type"]) ? $context["type"] : null), array(0 => "textfield", 1 => "select", 2 => "password", 3 => "email", 4 => "number", 5 => "tel", 6 => "search", 7 => "url", 8 => "path", 9 => "entity_autocomplete", 10 => "file", 11 => "managed_file", 12 => "upload"))) ? ("input-field") : ("")), 10 => ((twig_in_filter(        // line 59
(isset($context["type"]) ? $context["type"] : null), array(0 => "file", 1 => "managed_file", 2 => "upload"))) ? ("file-field") : ("")), 11 => (((        // line 60
(isset($context["prefix"]) ? $context["prefix"] : null) &&  !(isset($context["suffix"]) ? $context["suffix"] : null))) ? ("has-prefix") : ("")), 12 => (((        // line 61
(isset($context["suffix"]) ? $context["suffix"] : null) &&  !(isset($context["prefix"]) ? $context["prefix"] : null))) ? ("has-suffix") : ("")), 13 => (((        // line 62
(isset($context["prefix"]) ? $context["prefix"] : null) && (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("has-prefix-and-suffix") : ("")), 14 => ((        // line 63
(isset($context["errors"]) ? $context["errors"] : null)) ? ("form-item--error") : ("")), 15 => ((preg_match("/value=\"[^\"]+\"/",         // line 64
(isset($context["children"]) ? $context["children"] : null))) ? ("has-initial-content") : ("")), 16 => ((preg_match("/placeholder=\"[^\"]+\"/",         // line 65
(isset($context["children"]) ? $context["children"] : null))) ? ("has-placeholder") : ("")), 17 => (((        // line 66
(isset($context["description_display"]) ? $context["description_display"] : null) == "after")) ? ("has-description-after") : ("")));
        // line 69
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 70
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 71
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 73
        echo "  ";
        if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
            // line 74
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
            echo "</span>
  ";
        }
        // line 76
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 77
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 81
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        // line 82
        if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
            // line 83
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
            echo "</span>
  ";
        }
        // line 85
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 86
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 88
        echo "  ";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 89
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 93
        echo "  ";
        if (twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible"))) {
            // line 94
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/contrib/material_admin/templates/form/form-element.html.twig", 94)->display($context);
            // line 95
            echo "  ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 96,  137 => 95,  134 => 94,  131 => 93,  125 => 90,  122 => 89,  119 => 88,  113 => 86,  110 => 85,  104 => 83,  102 => 82,  97 => 81,  91 => 78,  86 => 77,  83 => 76,  77 => 74,  74 => 73,  68 => 71,  66 => 70,  61 => 69,  59 => 66,  58 => 65,  57 => 64,  56 => 63,  55 => 62,  54 => 61,  53 => 60,  52 => 59,  51 => 58,  50 => 57,  49 => 56,  48 => 55,  47 => 54,  46 => 53,  45 => 52,  44 => 51,  43 => 48,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-type-' ~ type|clean_class,
    'form-type-' ~ type|clean_class,
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    label_display == 'none' ? 'form-no-label',
    label_display in ['after', 'before'] ? 'form-has-label',
    disabled == 'disabled' ? 'form-disabled',
    type in ['textfield', 'select', 'password', 'email', 'number', 'tel', 'search', 'url', 'path', 'entity_autocomplete', 'file', 'managed_file', 'upload'] ? 'input-field',
    type in ['file', 'managed_file', 'upload'] ? 'file-field',
    prefix and not suffix ? 'has-prefix',
    suffix and not prefix ?  'has-suffix',
    prefix and suffix ? 'has-prefix-and-suffix',
    errors ? 'form-item--error',
    children matches '/value=\"[^\"]+\"/' ? 'has-initial-content',
    children matches '/placeholder=\"[^\"]+\"/' ? 'has-placeholder',
    description_display == 'after' ? 'has-description-after',
]
%}
<div{{ attributes.addClass(classes) }}>
  {% if label_display in ['before', 'invisible'] %}
    {{ label }}
  {% endif %}
  {% if prefix is not empty %}
    <span class=\"field-prefix\">{{ prefix }}</span>
  {% endif %}
  {% if description_display == 'before' and description.content %}
    <div{{ description.attributes }}>
      {{ description.content }}
    </div>
  {% endif %}
  {{ children }}
  {% if suffix is not empty %}
    <span class=\"field-suffix\">{{ suffix }}</span>
  {% endif %}
  {% if label_display == 'after' %}
    {{ label }}
  {% endif %}
  {% if errors %}
    <div class=\"form-item--error-message\">
      <strong>{{ errors }}</strong>
    </div>
  {% endif %}
  {% if description_display in ['after', 'invisible'] %}
    {% include '@material_admin/misc/description.html.twig' %}
  {% endif %}
</div>
";
    }
}
