<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_a3ae5fc5e6acd0de33e3874ed0986e280c122aeb8260806885f8d3ef1e5aa177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_402641eaee1c62b92532a4af8647a5c15cc4b604bc83a4ce44ba81d442208d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402641eaee1c62b92532a4af8647a5c15cc4b604bc83a4ce44ba81d442208d11->enter($__internal_402641eaee1c62b92532a4af8647a5c15cc4b604bc83a4ce44ba81d442208d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402641eaee1c62b92532a4af8647a5c15cc4b604bc83a4ce44ba81d442208d11->leave($__internal_402641eaee1c62b92532a4af8647a5c15cc4b604bc83a4ce44ba81d442208d11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_334519a77e55956bc9a2c896bde3597ab762f1227a5d7e79a0102676c2bf747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334519a77e55956bc9a2c896bde3597ab762f1227a5d7e79a0102676c2bf747c->enter($__internal_334519a77e55956bc9a2c896bde3597ab762f1227a5d7e79a0102676c2bf747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_334519a77e55956bc9a2c896bde3597ab762f1227a5d7e79a0102676c2bf747c->leave($__internal_334519a77e55956bc9a2c896bde3597ab762f1227a5d7e79a0102676c2bf747c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
