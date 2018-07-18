<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b145475e93d92c584ae5d5c64a6f683a884205ccaf603a14f8bf5e386b78a38f extends Twig_Template
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
        $__internal_3324ca3f96806273b2f4090b1e7f75275d2df6eb1cd3b6087f92f2f9e1dc52d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3324ca3f96806273b2f4090b1e7f75275d2df6eb1cd3b6087f92f2f9e1dc52d2->enter($__internal_3324ca3f96806273b2f4090b1e7f75275d2df6eb1cd3b6087f92f2f9e1dc52d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3324ca3f96806273b2f4090b1e7f75275d2df6eb1cd3b6087f92f2f9e1dc52d2->leave($__internal_3324ca3f96806273b2f4090b1e7f75275d2df6eb1cd3b6087f92f2f9e1dc52d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
