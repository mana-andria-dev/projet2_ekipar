<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_31cf7bef96b4a3e260580ef55ecbb902f634a0a1700df984b852bcb3eac533c0 extends Twig_Template
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
        $__internal_960bd9db46e74a951f0ea18ac379505cda282e09a3045259b248af260da55b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960bd9db46e74a951f0ea18ac379505cda282e09a3045259b248af260da55b8a->enter($__internal_960bd9db46e74a951f0ea18ac379505cda282e09a3045259b248af260da55b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960bd9db46e74a951f0ea18ac379505cda282e09a3045259b248af260da55b8a->leave($__internal_960bd9db46e74a951f0ea18ac379505cda282e09a3045259b248af260da55b8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_422ab836875d85454818b11423a78990087a6a9352be2483b57691f9307859b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422ab836875d85454818b11423a78990087a6a9352be2483b57691f9307859b3->enter($__internal_422ab836875d85454818b11423a78990087a6a9352be2483b57691f9307859b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_422ab836875d85454818b11423a78990087a6a9352be2483b57691f9307859b3->leave($__internal_422ab836875d85454818b11423a78990087a6a9352be2483b57691f9307859b3_prof);

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
