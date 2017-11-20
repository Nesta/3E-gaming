<?php

/* themes/contrib/material_admin/templates/form/input--file.html.twig */
class __TwigTemplate_46b55bad87c0f4b2584eb0eac8e2e489c6353587a090f7f7766914ce7a91c019 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo "<div class=\"btn file-upload-btn\">
\t<span><i class=\"material-icons\">file_upload</i> </span>
\t<input";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />
</div>
\t";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "   
\t<div class=\"file-path-wrapper\">
    <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload\">
 \t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/form/input--file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  47 => 15,  43 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 */
#}
<div class=\"btn file-upload-btn\">
\t<span><i class=\"material-icons\">file_upload</i> </span>
\t<input{{ attributes }} />
</div>
\t{{ children }}   
\t<div class=\"file-path-wrapper\">
    <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload\">
 \t</div>
";
    }
}
