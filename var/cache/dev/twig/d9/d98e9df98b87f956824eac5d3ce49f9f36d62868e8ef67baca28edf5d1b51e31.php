<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a4883a42def8a7d4056c94048c90a96639ea973e48b33e5a4d84fbda87dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4274f5de23508ba2c4492f6dcbfb46dc440db7f919be2144091b8ec3913885a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4274f5de23508ba2c4492f6dcbfb46dc440db7f919be2144091b8ec3913885a2->enter($__internal_4274f5de23508ba2c4492f6dcbfb46dc440db7f919be2144091b8ec3913885a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4274f5de23508ba2c4492f6dcbfb46dc440db7f919be2144091b8ec3913885a2->leave($__internal_4274f5de23508ba2c4492f6dcbfb46dc440db7f919be2144091b8ec3913885a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_227cd869c51d455901a2624076b9598cadf60b335353b7041cd1f511b5fb24c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227cd869c51d455901a2624076b9598cadf60b335353b7041cd1f511b5fb24c1->enter($__internal_227cd869c51d455901a2624076b9598cadf60b335353b7041cd1f511b5fb24c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_227cd869c51d455901a2624076b9598cadf60b335353b7041cd1f511b5fb24c1->leave($__internal_227cd869c51d455901a2624076b9598cadf60b335353b7041cd1f511b5fb24c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d8db47681af57110fdd63c6fb0a4d49c773499cbcf2298687951ab0087254da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8db47681af57110fdd63c6fb0a4d49c773499cbcf2298687951ab0087254da->enter($__internal_6d8db47681af57110fdd63c6fb0a4d49c773499cbcf2298687951ab0087254da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d8db47681af57110fdd63c6fb0a4d49c773499cbcf2298687951ab0087254da->leave($__internal_6d8db47681af57110fdd63c6fb0a4d49c773499cbcf2298687951ab0087254da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74f3867a87e6ccec2fd56682e9b4fd9abea9737124c174362cf8600b1816927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74f3867a87e6ccec2fd56682e9b4fd9abea9737124c174362cf8600b1816927->enter($__internal_a74f3867a87e6ccec2fd56682e9b4fd9abea9737124c174362cf8600b1816927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a74f3867a87e6ccec2fd56682e9b4fd9abea9737124c174362cf8600b1816927->leave($__internal_a74f3867a87e6ccec2fd56682e9b4fd9abea9737124c174362cf8600b1816927_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
