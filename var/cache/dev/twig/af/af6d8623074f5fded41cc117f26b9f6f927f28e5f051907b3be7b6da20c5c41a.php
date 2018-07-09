<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_58e39a78dc404c1518116e9b5a9e1e64bed0a4431166b8348003ba5f2bb0b454 extends Twig_Template
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
        $__internal_8e6014d8e392d8d4358dc805bfd38a42665f0c92f0f0a7a9dfef446d9b0c0dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6014d8e392d8d4358dc805bfd38a42665f0c92f0f0a7a9dfef446d9b0c0dfa->enter($__internal_8e6014d8e392d8d4358dc805bfd38a42665f0c92f0f0a7a9dfef446d9b0c0dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e6014d8e392d8d4358dc805bfd38a42665f0c92f0f0a7a9dfef446d9b0c0dfa->leave($__internal_8e6014d8e392d8d4358dc805bfd38a42665f0c92f0f0a7a9dfef446d9b0c0dfa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e62a6deefb9ef24bb8579be5bdf11665faa7caf92191d31521652ef6c3288e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e62a6deefb9ef24bb8579be5bdf11665faa7caf92191d31521652ef6c3288e5->enter($__internal_0e62a6deefb9ef24bb8579be5bdf11665faa7caf92191d31521652ef6c3288e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0e62a6deefb9ef24bb8579be5bdf11665faa7caf92191d31521652ef6c3288e5->leave($__internal_0e62a6deefb9ef24bb8579be5bdf11665faa7caf92191d31521652ef6c3288e5_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
