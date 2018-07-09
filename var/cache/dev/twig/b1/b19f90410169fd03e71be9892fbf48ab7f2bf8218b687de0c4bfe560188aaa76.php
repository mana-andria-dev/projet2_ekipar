<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e30ac7bea5cb37b0cb5f807058bdf83ee4fd80329c3bef311e2ba136ca2c8c0a extends Twig_Template
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
        $__internal_d4de7b717ebd751b44d826ca63d6085921df7f42d988c3cf486237310169b4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4de7b717ebd751b44d826ca63d6085921df7f42d988c3cf486237310169b4fa->enter($__internal_d4de7b717ebd751b44d826ca63d6085921df7f42d988c3cf486237310169b4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d4de7b717ebd751b44d826ca63d6085921df7f42d988c3cf486237310169b4fa->leave($__internal_d4de7b717ebd751b44d826ca63d6085921df7f42d988c3cf486237310169b4fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
