<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6d1ff275910ad0afd996225c68dd63a94480ac1123f529904192182bb1f57b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_062aa21f85f0121891f1150384777edb186c24a22a969a32fb78b5083f6a02c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062aa21f85f0121891f1150384777edb186c24a22a969a32fb78b5083f6a02c9->enter($__internal_062aa21f85f0121891f1150384777edb186c24a22a969a32fb78b5083f6a02c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_062aa21f85f0121891f1150384777edb186c24a22a969a32fb78b5083f6a02c9->leave($__internal_062aa21f85f0121891f1150384777edb186c24a22a969a32fb78b5083f6a02c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c62dabd76fd8564cb5b9de952ed41a5abf5739d0df214f6065ed9f1114b61ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62dabd76fd8564cb5b9de952ed41a5abf5739d0df214f6065ed9f1114b61ad2->enter($__internal_c62dabd76fd8564cb5b9de952ed41a5abf5739d0df214f6065ed9f1114b61ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c62dabd76fd8564cb5b9de952ed41a5abf5739d0df214f6065ed9f1114b61ad2->leave($__internal_c62dabd76fd8564cb5b9de952ed41a5abf5739d0df214f6065ed9f1114b61ad2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
