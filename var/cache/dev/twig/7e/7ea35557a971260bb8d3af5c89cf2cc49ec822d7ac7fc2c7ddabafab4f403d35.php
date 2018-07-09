<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_29447eb37151098cc0a0d4eaae93db5dc579c97b0529375a90f7f6d27b7e92d2 extends Twig_Template
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
        $__internal_4c0ffe31c474cc279e3649d38eb776a242fb559cf904629ac077bc3d87d042cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0ffe31c474cc279e3649d38eb776a242fb559cf904629ac077bc3d87d042cd->enter($__internal_4c0ffe31c474cc279e3649d38eb776a242fb559cf904629ac077bc3d87d042cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4c0ffe31c474cc279e3649d38eb776a242fb559cf904629ac077bc3d87d042cd->leave($__internal_4c0ffe31c474cc279e3649d38eb776a242fb559cf904629ac077bc3d87d042cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
