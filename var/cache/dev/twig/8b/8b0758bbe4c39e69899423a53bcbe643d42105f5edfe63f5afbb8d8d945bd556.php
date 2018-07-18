<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1c3caee0d9f405a523f65a72f8496c55c9677301d4c46d3df7a5a48e6ccc69c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a13caff590b298378db130505691933b21110c94578fe36c113b8d643e916246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13caff590b298378db130505691933b21110c94578fe36c113b8d643e916246->enter($__internal_a13caff590b298378db130505691933b21110c94578fe36c113b8d643e916246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13caff590b298378db130505691933b21110c94578fe36c113b8d643e916246->leave($__internal_a13caff590b298378db130505691933b21110c94578fe36c113b8d643e916246_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_449334dfb6484a86863bf19c2d5fb4a66e5a81b9dcfdc5df128139a85e8f78a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449334dfb6484a86863bf19c2d5fb4a66e5a81b9dcfdc5df128139a85e8f78a5->enter($__internal_449334dfb6484a86863bf19c2d5fb4a66e5a81b9dcfdc5df128139a85e8f78a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_449334dfb6484a86863bf19c2d5fb4a66e5a81b9dcfdc5df128139a85e8f78a5->leave($__internal_449334dfb6484a86863bf19c2d5fb4a66e5a81b9dcfdc5df128139a85e8f78a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
