<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a04cc34af2333db22ab8fc31fed018243479215aa5e2632cc26e90dda46f8318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_029f3238e3c77bc792edb350191fad7a3c2a3bfd5c75c87ee6b9cb097314e101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029f3238e3c77bc792edb350191fad7a3c2a3bfd5c75c87ee6b9cb097314e101->enter($__internal_029f3238e3c77bc792edb350191fad7a3c2a3bfd5c75c87ee6b9cb097314e101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_029f3238e3c77bc792edb350191fad7a3c2a3bfd5c75c87ee6b9cb097314e101->leave($__internal_029f3238e3c77bc792edb350191fad7a3c2a3bfd5c75c87ee6b9cb097314e101_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fa66cffac8cfa8d0988234de1e4aa94eeeccb29f04fb24b7db5eb5ccf8a945c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa66cffac8cfa8d0988234de1e4aa94eeeccb29f04fb24b7db5eb5ccf8a945c->enter($__internal_9fa66cffac8cfa8d0988234de1e4aa94eeeccb29f04fb24b7db5eb5ccf8a945c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9fa66cffac8cfa8d0988234de1e4aa94eeeccb29f04fb24b7db5eb5ccf8a945c->leave($__internal_9fa66cffac8cfa8d0988234de1e4aa94eeeccb29f04fb24b7db5eb5ccf8a945c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
