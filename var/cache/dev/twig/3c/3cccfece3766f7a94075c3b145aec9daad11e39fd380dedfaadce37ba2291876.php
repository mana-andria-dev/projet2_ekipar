<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6f19dd52b82a58ba450cc5769045110452102aeb1e25c7273a70d9801fa534b5 extends Twig_Template
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
        $__internal_a88ccbbf45868bf569ecc61d271064f304b00c4f0c4dee41119e8b4e62c4e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88ccbbf45868bf569ecc61d271064f304b00c4f0c4dee41119e8b4e62c4e874->enter($__internal_a88ccbbf45868bf569ecc61d271064f304b00c4f0c4dee41119e8b4e62c4e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88ccbbf45868bf569ecc61d271064f304b00c4f0c4dee41119e8b4e62c4e874->leave($__internal_a88ccbbf45868bf569ecc61d271064f304b00c4f0c4dee41119e8b4e62c4e874_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d7deaa2c427800ffe0d1e860eded6a32c40ac0a4856efaad7084b5cc939b85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7deaa2c427800ffe0d1e860eded6a32c40ac0a4856efaad7084b5cc939b85f->enter($__internal_5d7deaa2c427800ffe0d1e860eded6a32c40ac0a4856efaad7084b5cc939b85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5d7deaa2c427800ffe0d1e860eded6a32c40ac0a4856efaad7084b5cc939b85f->leave($__internal_5d7deaa2c427800ffe0d1e860eded6a32c40ac0a4856efaad7084b5cc939b85f_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
