<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1746b251dd51929979c28661dae2cbf4184a19723f36f8e469e9324ce5b885a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_64908ad69e60578b2eda26589227d09ab1b85a3b7767851a7a56fd22fa0bfb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64908ad69e60578b2eda26589227d09ab1b85a3b7767851a7a56fd22fa0bfb06->enter($__internal_64908ad69e60578b2eda26589227d09ab1b85a3b7767851a7a56fd22fa0bfb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64908ad69e60578b2eda26589227d09ab1b85a3b7767851a7a56fd22fa0bfb06->leave($__internal_64908ad69e60578b2eda26589227d09ab1b85a3b7767851a7a56fd22fa0bfb06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95a648ca00f7a9d9c6e55df0dc57d4dae18277cbbfc57b3986d63f9bd7b1bce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a648ca00f7a9d9c6e55df0dc57d4dae18277cbbfc57b3986d63f9bd7b1bce2->enter($__internal_95a648ca00f7a9d9c6e55df0dc57d4dae18277cbbfc57b3986d63f9bd7b1bce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_95a648ca00f7a9d9c6e55df0dc57d4dae18277cbbfc57b3986d63f9bd7b1bce2->leave($__internal_95a648ca00f7a9d9c6e55df0dc57d4dae18277cbbfc57b3986d63f9bd7b1bce2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
