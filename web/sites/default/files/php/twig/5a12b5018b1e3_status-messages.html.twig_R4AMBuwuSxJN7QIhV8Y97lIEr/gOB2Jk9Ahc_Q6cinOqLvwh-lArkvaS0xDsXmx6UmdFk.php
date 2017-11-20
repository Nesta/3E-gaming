<?php

/* themes/contrib/material_admin/templates/misc/status-messages.html.twig */
class __TwigTemplate_402d30c0bef6a3deba187e63b9e096b000b360847daa073f4b16c763cdd2e334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 25, "for" => 26, "set" => 28, "if" => 34);
        $filters = array("without" => 33, "length" => 37, "first" => 58);
        $functions = array("attach_library" => 24);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'for', 'set', 'if'),
                array('without', 'length', 'first'),
                array('attach_library')
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

        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("material_admin/notifications"), "html", null, true));
        echo "
";
        // line 25
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 30
$context["type"]));
            // line 33
            echo "<div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">
  ";
            // line 34
            if (($context["type"] == "error")) {
                // line 35
                echo "  <div role=\"alert\">
    ";
            }
            // line 36
            echo " ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 37
                echo "    <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2> ";
            }
            echo " ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 38
                echo "    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <div class=\"message-header\"> <span class=\"card-title\"><span class=\"message-number\">";
                // line 42
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_length_filter($this->env, $context["messages"]), "html", null, true));
                echo "</span>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "s</span></div>
            <ol class=\"messages__list message-content\">
              ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            </ol>
          </div>
        </div>
      </div>
    </div>
    ";
            } else {
                // line 53
                echo "    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <div class=\"message-header\"><span class=\"card-title\">";
                // line 57
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</span></div>
            <div class=\"message-content\">";
                // line 58
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</div>
          </div>
        </div>
      </div>
    </div>
    ";
            }
            // line 63
            echo " ";
            if (($context["type"] == "error")) {
                // line 64
                echo "  </div>
  ";
            }
            // line 66
            echo "</div>
  ";
            // line 68
            echo "  ";
            $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 68,  146 => 66,  142 => 64,  139 => 63,  130 => 58,  126 => 57,  120 => 53,  112 => 47,  103 => 45,  99 => 44,  92 => 42,  86 => 38,  79 => 37,  76 => 36,  72 => 35,  70 => 34,  63 => 33,  61 => 30,  60 => 28,  58 => 27,  54 => 26,  48 => 25,  44 => 24,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
{{ attach_library('material_admin/notifications') }}
{% block messages %}
{% for type, messages in message_list %}
  {%
    set classes = [
      'messages',
      'messages--' ~ type,
    ]
  %}
<div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\" {{ attributes.addClass(classes)|without( 'role', 'aria-label') }}>
  {% if type == 'error' %}
  <div role=\"alert\">
    {% endif %} {% if status_headings[type] %}
    <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2> {% endif %} {% if messages|length > 1 %}
    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <div class=\"message-header\"> <span class=\"card-title\"><span class=\"message-number\">{{messages|length}}</span>{{ status_headings[type] }}s</span></div>
            <ol class=\"messages__list message-content\">
              {% for message in messages %}
              <li class=\"messages__item\">{{ message }}</li>
              {% endfor %}
            </ol>
          </div>
        </div>
      </div>
    </div>
    {% else %}
    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <div class=\"message-header\"><span class=\"card-title\">{{ status_headings[type] }}</span></div>
            <div class=\"message-content\">{{ messages|first }}</div>
          </div>
        </div>
      </div>
    </div>
    {% endif %} {% if type == 'error' %}
  </div>
  {% endif %}
</div>
  {# Remove type specific classes. #}
  {% set attributes = attributes.removeClass(classes) %}
{% endfor %}
{% endblock messages %}
";
    }
}
