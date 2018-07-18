<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bc176dc0bb4236bdf849413b3bb10e41882b08b8a8d3c6e1faa7ac0905ca144e extends Twig_Template
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
        $__internal_04ce2cd1e846a9af3e6430529e849f46ebc65ea76a001eb56cc1325d1a0e73d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ce2cd1e846a9af3e6430529e849f46ebc65ea76a001eb56cc1325d1a0e73d2->enter($__internal_04ce2cd1e846a9af3e6430529e849f46ebc65ea76a001eb56cc1325d1a0e73d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_04ce2cd1e846a9af3e6430529e849f46ebc65ea76a001eb56cc1325d1a0e73d2->leave($__internal_04ce2cd1e846a9af3e6430529e849f46ebc65ea76a001eb56cc1325d1a0e73d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
