<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_38d10a569850127f77add40baca9b41f44b5d8e97bfdcc025b0bfbc0d7f7635e extends Twig_Template
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
        $__internal_fb22774cb3681174806f4018ab6e0966a454072da3e6fef15186b528f09b4428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb22774cb3681174806f4018ab6e0966a454072da3e6fef15186b528f09b4428->enter($__internal_fb22774cb3681174806f4018ab6e0966a454072da3e6fef15186b528f09b4428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb22774cb3681174806f4018ab6e0966a454072da3e6fef15186b528f09b4428->leave($__internal_fb22774cb3681174806f4018ab6e0966a454072da3e6fef15186b528f09b4428_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a24db0ab6df65ba00acf5b4a46d2c65bbc1fe877bacad515c97bcdbd92eb2657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24db0ab6df65ba00acf5b4a46d2c65bbc1fe877bacad515c97bcdbd92eb2657->enter($__internal_a24db0ab6df65ba00acf5b4a46d2c65bbc1fe877bacad515c97bcdbd92eb2657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a24db0ab6df65ba00acf5b4a46d2c65bbc1fe877bacad515c97bcdbd92eb2657->leave($__internal_a24db0ab6df65ba00acf5b4a46d2c65bbc1fe877bacad515c97bcdbd92eb2657_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
