<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_bda8318442bdb78c907aff86c8454035b64be7437e12bfd827a6ba7d0aad5206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e68e24398a30c7a54f9a47ea33818041cd40e3e576a965c850639973f695f835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68e24398a30c7a54f9a47ea33818041cd40e3e576a965c850639973f695f835->enter($__internal_e68e24398a30c7a54f9a47ea33818041cd40e3e576a965c850639973f695f835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68e24398a30c7a54f9a47ea33818041cd40e3e576a965c850639973f695f835->leave($__internal_e68e24398a30c7a54f9a47ea33818041cd40e3e576a965c850639973f695f835_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5b1e8fcf2602eabcf496d4fbf611933a9e8ead8c51f85cf7962997ef34a729d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b1e8fcf2602eabcf496d4fbf611933a9e8ead8c51f85cf7962997ef34a729d->enter($__internal_b5b1e8fcf2602eabcf496d4fbf611933a9e8ead8c51f85cf7962997ef34a729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b5b1e8fcf2602eabcf496d4fbf611933a9e8ead8c51f85cf7962997ef34a729d->leave($__internal_b5b1e8fcf2602eabcf496d4fbf611933a9e8ead8c51f85cf7962997ef34a729d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
