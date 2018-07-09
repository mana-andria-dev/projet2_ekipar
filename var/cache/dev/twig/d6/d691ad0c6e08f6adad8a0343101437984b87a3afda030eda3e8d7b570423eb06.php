<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cb93dca9a6cfa60e09e3e06dd1b52521d1c0a866ff47aaac77a052a9c69b82db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_db9c41f28a918bf0e3c8e3a46f24a8e37478a957b1481995b0b3b62c05fe5c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9c41f28a918bf0e3c8e3a46f24a8e37478a957b1481995b0b3b62c05fe5c9a->enter($__internal_db9c41f28a918bf0e3c8e3a46f24a8e37478a957b1481995b0b3b62c05fe5c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db9c41f28a918bf0e3c8e3a46f24a8e37478a957b1481995b0b3b62c05fe5c9a->leave($__internal_db9c41f28a918bf0e3c8e3a46f24a8e37478a957b1481995b0b3b62c05fe5c9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08fa25bf0ad4f62c132ec7f9d7dde27575d3adda7a72bd54a1576de419196c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fa25bf0ad4f62c132ec7f9d7dde27575d3adda7a72bd54a1576de419196c48->enter($__internal_08fa25bf0ad4f62c132ec7f9d7dde27575d3adda7a72bd54a1576de419196c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_08fa25bf0ad4f62c132ec7f9d7dde27575d3adda7a72bd54a1576de419196c48->leave($__internal_08fa25bf0ad4f62c132ec7f9d7dde27575d3adda7a72bd54a1576de419196c48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
