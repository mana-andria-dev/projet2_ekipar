<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_75f98dca19f6fe15742619f62331652fec3644d144386cb76962b9e6cbdb639c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_015d48d12ec275075d1d09a073f3d83e21349acb25f7a7862436b0f90aa3bb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015d48d12ec275075d1d09a073f3d83e21349acb25f7a7862436b0f90aa3bb81->enter($__internal_015d48d12ec275075d1d09a073f3d83e21349acb25f7a7862436b0f90aa3bb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015d48d12ec275075d1d09a073f3d83e21349acb25f7a7862436b0f90aa3bb81->leave($__internal_015d48d12ec275075d1d09a073f3d83e21349acb25f7a7862436b0f90aa3bb81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf1f25f29c04667e8e34464271192152e17f1d7224effae66e724ec823fb5027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1f25f29c04667e8e34464271192152e17f1d7224effae66e724ec823fb5027->enter($__internal_bf1f25f29c04667e8e34464271192152e17f1d7224effae66e724ec823fb5027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_bf1f25f29c04667e8e34464271192152e17f1d7224effae66e724ec823fb5027->leave($__internal_bf1f25f29c04667e8e34464271192152e17f1d7224effae66e724ec823fb5027_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
