<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3e2bae3d78466d2ab84a6c55ba4631857f7e2dd709062083c51d31d857fcb13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_4b44519191f900212415f5a14557006617c684057dae79b35f60b7946b5db4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b44519191f900212415f5a14557006617c684057dae79b35f60b7946b5db4b2->enter($__internal_4b44519191f900212415f5a14557006617c684057dae79b35f60b7946b5db4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b44519191f900212415f5a14557006617c684057dae79b35f60b7946b5db4b2->leave($__internal_4b44519191f900212415f5a14557006617c684057dae79b35f60b7946b5db4b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d10bf684217316e63a66214eded52a39af41ced98c64823406eed704dc7dee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d10bf684217316e63a66214eded52a39af41ced98c64823406eed704dc7dee8->enter($__internal_9d10bf684217316e63a66214eded52a39af41ced98c64823406eed704dc7dee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9d10bf684217316e63a66214eded52a39af41ced98c64823406eed704dc7dee8->leave($__internal_9d10bf684217316e63a66214eded52a39af41ced98c64823406eed704dc7dee8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
