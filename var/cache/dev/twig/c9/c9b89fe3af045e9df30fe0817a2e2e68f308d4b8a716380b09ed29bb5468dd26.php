<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cb37b9901c8e81c766c0d4e7c7ca00d891553640908d7f5a04e747525837009b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ce6c437c016e206ddb465368900d60ef6d88c5135903daa3af5857a9f5adb338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6c437c016e206ddb465368900d60ef6d88c5135903daa3af5857a9f5adb338->enter($__internal_ce6c437c016e206ddb465368900d60ef6d88c5135903daa3af5857a9f5adb338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6c437c016e206ddb465368900d60ef6d88c5135903daa3af5857a9f5adb338->leave($__internal_ce6c437c016e206ddb465368900d60ef6d88c5135903daa3af5857a9f5adb338_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82d0bd584039b633e067ef13f78492647792f22dd90412a0d39352813f0c1379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d0bd584039b633e067ef13f78492647792f22dd90412a0d39352813f0c1379->enter($__internal_82d0bd584039b633e067ef13f78492647792f22dd90412a0d39352813f0c1379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_82d0bd584039b633e067ef13f78492647792f22dd90412a0d39352813f0c1379->leave($__internal_82d0bd584039b633e067ef13f78492647792f22dd90412a0d39352813f0c1379_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
