<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_1ae8ce8bc89a9579fc7dfa25f3e3d365250ede7d528285164f32ef97e552ba7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_55087d7f3973aaa48b0621b534f2669e15e7d37f2828bf63076c4b7bd0423f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55087d7f3973aaa48b0621b534f2669e15e7d37f2828bf63076c4b7bd0423f93->enter($__internal_55087d7f3973aaa48b0621b534f2669e15e7d37f2828bf63076c4b7bd0423f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55087d7f3973aaa48b0621b534f2669e15e7d37f2828bf63076c4b7bd0423f93->leave($__internal_55087d7f3973aaa48b0621b534f2669e15e7d37f2828bf63076c4b7bd0423f93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b03320f90bf50bf10189cbd191e99f007d47b2c0fb8ae14134d10a6a4697bd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03320f90bf50bf10189cbd191e99f007d47b2c0fb8ae14134d10a6a4697bd8d->enter($__internal_b03320f90bf50bf10189cbd191e99f007d47b2c0fb8ae14134d10a6a4697bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b03320f90bf50bf10189cbd191e99f007d47b2c0fb8ae14134d10a6a4697bd8d->leave($__internal_b03320f90bf50bf10189cbd191e99f007d47b2c0fb8ae14134d10a6a4697bd8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
