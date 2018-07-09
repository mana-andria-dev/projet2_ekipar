<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_621d27e20a9dc5b9832d2cc97b44c212d85c6dea4b98b093989ce41db9e1fc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a4b4a94717d62b40fec31f7d1be1c69cd58957c1775384bb7dc74d5c71d5081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4a94717d62b40fec31f7d1be1c69cd58957c1775384bb7dc74d5c71d5081e->enter($__internal_a4b4a94717d62b40fec31f7d1be1c69cd58957c1775384bb7dc74d5c71d5081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b4a94717d62b40fec31f7d1be1c69cd58957c1775384bb7dc74d5c71d5081e->leave($__internal_a4b4a94717d62b40fec31f7d1be1c69cd58957c1775384bb7dc74d5c71d5081e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce13665348557bfbd398dd9efaddbf7bd868faf1c72ca53b2a14aa83995e8b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce13665348557bfbd398dd9efaddbf7bd868faf1c72ca53b2a14aa83995e8b71->enter($__internal_ce13665348557bfbd398dd9efaddbf7bd868faf1c72ca53b2a14aa83995e8b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ce13665348557bfbd398dd9efaddbf7bd868faf1c72ca53b2a14aa83995e8b71->leave($__internal_ce13665348557bfbd398dd9efaddbf7bd868faf1c72ca53b2a14aa83995e8b71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
