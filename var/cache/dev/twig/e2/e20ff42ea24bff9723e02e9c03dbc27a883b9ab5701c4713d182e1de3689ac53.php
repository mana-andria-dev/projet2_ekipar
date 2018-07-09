<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_1a7ceca7f8f7c4ed24e15c93991c530a8b8372020be1b4a347d4db14d0c16589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_3b2f026a7faf72f5d945fa95b1fce6ec1a6cabe5efc11fb1090b4710f3d97242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2f026a7faf72f5d945fa95b1fce6ec1a6cabe5efc11fb1090b4710f3d97242->enter($__internal_3b2f026a7faf72f5d945fa95b1fce6ec1a6cabe5efc11fb1090b4710f3d97242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2f026a7faf72f5d945fa95b1fce6ec1a6cabe5efc11fb1090b4710f3d97242->leave($__internal_3b2f026a7faf72f5d945fa95b1fce6ec1a6cabe5efc11fb1090b4710f3d97242_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93052f42c2d0e8625e0573b4fcab120620e00b168eb8ace4257138971ee0f12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93052f42c2d0e8625e0573b4fcab120620e00b168eb8ace4257138971ee0f12a->enter($__internal_93052f42c2d0e8625e0573b4fcab120620e00b168eb8ace4257138971ee0f12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_93052f42c2d0e8625e0573b4fcab120620e00b168eb8ace4257138971ee0f12a->leave($__internal_93052f42c2d0e8625e0573b4fcab120620e00b168eb8ace4257138971ee0f12a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
