<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_52b1611d6cb3923a3250725fd72c2e253bba00cf1a3c04f583840f0b217b47e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f804ab337a18cf262e6633174da716b0bc1adab5a99fd947137d0936dc991fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f804ab337a18cf262e6633174da716b0bc1adab5a99fd947137d0936dc991fb5->enter($__internal_f804ab337a18cf262e6633174da716b0bc1adab5a99fd947137d0936dc991fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f804ab337a18cf262e6633174da716b0bc1adab5a99fd947137d0936dc991fb5->leave($__internal_f804ab337a18cf262e6633174da716b0bc1adab5a99fd947137d0936dc991fb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319d1f26f65380153715976cb155998e0db277ebb419621dd265e1289958f840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319d1f26f65380153715976cb155998e0db277ebb419621dd265e1289958f840->enter($__internal_319d1f26f65380153715976cb155998e0db277ebb419621dd265e1289958f840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_319d1f26f65380153715976cb155998e0db277ebb419621dd265e1289958f840->leave($__internal_319d1f26f65380153715976cb155998e0db277ebb419621dd265e1289958f840_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
