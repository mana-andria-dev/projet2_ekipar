<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1f51ad950883a64fa32c3e6559d693d3df81c1bb02cf52cb87d9c1679827181d extends Twig_Template
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
        $__internal_29990aa966251c1ec733bc3195a69b9c03c762ebd02a91ca39de4b4344e5e9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29990aa966251c1ec733bc3195a69b9c03c762ebd02a91ca39de4b4344e5e9c1->enter($__internal_29990aa966251c1ec733bc3195a69b9c03c762ebd02a91ca39de4b4344e5e9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29990aa966251c1ec733bc3195a69b9c03c762ebd02a91ca39de4b4344e5e9c1->leave($__internal_29990aa966251c1ec733bc3195a69b9c03c762ebd02a91ca39de4b4344e5e9c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d44dbbe6d620e039fee12cd52a3d5cc974a0640b352879a8440e5107600db2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44dbbe6d620e039fee12cd52a3d5cc974a0640b352879a8440e5107600db2c8->enter($__internal_d44dbbe6d620e039fee12cd52a3d5cc974a0640b352879a8440e5107600db2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d44dbbe6d620e039fee12cd52a3d5cc974a0640b352879a8440e5107600db2c8->leave($__internal_d44dbbe6d620e039fee12cd52a3d5cc974a0640b352879a8440e5107600db2c8_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
