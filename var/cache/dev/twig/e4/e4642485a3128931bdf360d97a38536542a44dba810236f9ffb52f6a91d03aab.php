<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_fa30721ae95e720904ebdf98961edcdb5afefb738ce650928dda6988f857267e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_452695f3af322597ab5fd7e8a4e9ce93d78293947a4100cd8553e6aa48b5ff27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452695f3af322597ab5fd7e8a4e9ce93d78293947a4100cd8553e6aa48b5ff27->enter($__internal_452695f3af322597ab5fd7e8a4e9ce93d78293947a4100cd8553e6aa48b5ff27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452695f3af322597ab5fd7e8a4e9ce93d78293947a4100cd8553e6aa48b5ff27->leave($__internal_452695f3af322597ab5fd7e8a4e9ce93d78293947a4100cd8553e6aa48b5ff27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b461c8df24c610f8e74cc74b8f96b412e6ca108131b54a59ca83c30f424cab45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b461c8df24c610f8e74cc74b8f96b412e6ca108131b54a59ca83c30f424cab45->enter($__internal_b461c8df24c610f8e74cc74b8f96b412e6ca108131b54a59ca83c30f424cab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b461c8df24c610f8e74cc74b8f96b412e6ca108131b54a59ca83c30f424cab45->leave($__internal_b461c8df24c610f8e74cc74b8f96b412e6ca108131b54a59ca83c30f424cab45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
