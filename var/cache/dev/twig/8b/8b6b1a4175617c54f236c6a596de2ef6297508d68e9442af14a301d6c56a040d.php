<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3de8a252a87ce73f17d305043ec208500fc8a79f3642b52a80ec3695159e2c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6f71f5931c853fa4d3b3a09c579d7ca5ed23517958a51c22f460b1c6e2cdc44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f71f5931c853fa4d3b3a09c579d7ca5ed23517958a51c22f460b1c6e2cdc44d->enter($__internal_6f71f5931c853fa4d3b3a09c579d7ca5ed23517958a51c22f460b1c6e2cdc44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f71f5931c853fa4d3b3a09c579d7ca5ed23517958a51c22f460b1c6e2cdc44d->leave($__internal_6f71f5931c853fa4d3b3a09c579d7ca5ed23517958a51c22f460b1c6e2cdc44d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18118519c282599f6f401a5d5e992131439b8076327bcc4a2d706b91a4e2d2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18118519c282599f6f401a5d5e992131439b8076327bcc4a2d706b91a4e2d2e3->enter($__internal_18118519c282599f6f401a5d5e992131439b8076327bcc4a2d706b91a4e2d2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_18118519c282599f6f401a5d5e992131439b8076327bcc4a2d706b91a4e2d2e3->leave($__internal_18118519c282599f6f401a5d5e992131439b8076327bcc4a2d706b91a4e2d2e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
