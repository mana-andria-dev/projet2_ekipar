<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_54078ef6c1696ff9684644d7f4ead7e74dcbf2a2281cce69de273a275079f272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_076bfac43fdfbd8d546dd0824e5af31a7ff0240a043b4921b476db05d1398294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076bfac43fdfbd8d546dd0824e5af31a7ff0240a043b4921b476db05d1398294->enter($__internal_076bfac43fdfbd8d546dd0824e5af31a7ff0240a043b4921b476db05d1398294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_076bfac43fdfbd8d546dd0824e5af31a7ff0240a043b4921b476db05d1398294->leave($__internal_076bfac43fdfbd8d546dd0824e5af31a7ff0240a043b4921b476db05d1398294_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1616c7d11366a67156ec4fe27469b5244b1ee19fdf017fed5ce13b7ed014ffdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1616c7d11366a67156ec4fe27469b5244b1ee19fdf017fed5ce13b7ed014ffdb->enter($__internal_1616c7d11366a67156ec4fe27469b5244b1ee19fdf017fed5ce13b7ed014ffdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1616c7d11366a67156ec4fe27469b5244b1ee19fdf017fed5ce13b7ed014ffdb->leave($__internal_1616c7d11366a67156ec4fe27469b5244b1ee19fdf017fed5ce13b7ed014ffdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
