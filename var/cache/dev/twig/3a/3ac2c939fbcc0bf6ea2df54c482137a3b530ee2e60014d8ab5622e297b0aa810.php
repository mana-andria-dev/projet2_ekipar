<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_17cb044f53c575c6e7ad4d842ca909d4da6a77949c75b0a50501ea280bdbf188 extends Twig_Template
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
        $__internal_c5e4dd685757aa4e1dc1fb92bf56f669c51e249941d3571cc1aa5c7fc0ab62b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e4dd685757aa4e1dc1fb92bf56f669c51e249941d3571cc1aa5c7fc0ab62b8->enter($__internal_c5e4dd685757aa4e1dc1fb92bf56f669c51e249941d3571cc1aa5c7fc0ab62b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5e4dd685757aa4e1dc1fb92bf56f669c51e249941d3571cc1aa5c7fc0ab62b8->leave($__internal_c5e4dd685757aa4e1dc1fb92bf56f669c51e249941d3571cc1aa5c7fc0ab62b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
