<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e458cef60b0e18302b3d04e05b3804163183e201e8568def1d4e078018d6c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_cc88c39d9db9a24c564636ad0094ad9347e5692c451400f3dfbe074baa792372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc88c39d9db9a24c564636ad0094ad9347e5692c451400f3dfbe074baa792372->enter($__internal_cc88c39d9db9a24c564636ad0094ad9347e5692c451400f3dfbe074baa792372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc88c39d9db9a24c564636ad0094ad9347e5692c451400f3dfbe074baa792372->leave($__internal_cc88c39d9db9a24c564636ad0094ad9347e5692c451400f3dfbe074baa792372_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_251de30933b8314930d5a4a0c2a7c035b5c15f6bdd286e8331b1107e690f1f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251de30933b8314930d5a4a0c2a7c035b5c15f6bdd286e8331b1107e690f1f07->enter($__internal_251de30933b8314930d5a4a0c2a7c035b5c15f6bdd286e8331b1107e690f1f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_251de30933b8314930d5a4a0c2a7c035b5c15f6bdd286e8331b1107e690f1f07->leave($__internal_251de30933b8314930d5a4a0c2a7c035b5c15f6bdd286e8331b1107e690f1f07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_383c5ed24371baca01a8d100437b361dde26ae5052428b386dc8f7a672e1bf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383c5ed24371baca01a8d100437b361dde26ae5052428b386dc8f7a672e1bf68->enter($__internal_383c5ed24371baca01a8d100437b361dde26ae5052428b386dc8f7a672e1bf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_383c5ed24371baca01a8d100437b361dde26ae5052428b386dc8f7a672e1bf68->leave($__internal_383c5ed24371baca01a8d100437b361dde26ae5052428b386dc8f7a672e1bf68_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_58232e536cd0a2f4694f94d496e9ddbdcd56fdab638509e5550b2935acd8b75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58232e536cd0a2f4694f94d496e9ddbdcd56fdab638509e5550b2935acd8b75c->enter($__internal_58232e536cd0a2f4694f94d496e9ddbdcd56fdab638509e5550b2935acd8b75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_58232e536cd0a2f4694f94d496e9ddbdcd56fdab638509e5550b2935acd8b75c->leave($__internal_58232e536cd0a2f4694f94d496e9ddbdcd56fdab638509e5550b2935acd8b75c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
