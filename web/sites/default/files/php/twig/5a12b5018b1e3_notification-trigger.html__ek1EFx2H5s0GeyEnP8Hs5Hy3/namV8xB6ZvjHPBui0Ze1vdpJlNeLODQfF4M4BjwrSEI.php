<?php

/* @material_admin/misc/notification-trigger.html.twig */
class __TwigTemplate_b8a16abd2751918ecee607ef4aaa19d6c3ca17a4bf8888c686e735a42ac1463a extends Twig_Template
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
        $tags = array("trans" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans'),
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

        // line 6
        echo "<div class=\"collection right\" id=\"notification-wrapper\">
  <a class=\"modal-trigger collection-item message-trigger waves-effect\" href=\"#messageContainer\"><i class=\"material-icons\">inbox</i> <span class=\"mt-text hide-on-med-and-down\">";
        // line 7
        echo t("Notifications", array());
        echo "</span><span class=\"badge messages--status\">0</span><span class=\"badge messages--warning\">0</span><span class=\"badge messages--error\">0</span></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/notification-trigger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 6,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Notifcation for status messages
#}
<div class=\"collection right\" id=\"notification-wrapper\">
  <a class=\"modal-trigger collection-item message-trigger waves-effect\" href=\"#messageContainer\"><i class=\"material-icons\">inbox</i> <span class=\"mt-text hide-on-med-and-down\">{% trans %} Notifications {% endtrans %}</span><span class=\"badge messages--status\">0</span><span class=\"badge messages--warning\">0</span><span class=\"badge messages--error\">0</span></a>
</div>
";
    }
}
