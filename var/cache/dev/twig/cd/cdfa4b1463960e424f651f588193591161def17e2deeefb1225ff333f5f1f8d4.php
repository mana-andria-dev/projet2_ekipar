<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d719bde817d96fc924729a739cf0eb98cd8515de0d13e08482259925f9aeded5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc23aa3cc360c94c85498e0eb7ef736c9ae76252e027b1d1183d3d60ef270f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc23aa3cc360c94c85498e0eb7ef736c9ae76252e027b1d1183d3d60ef270f4f->enter($__internal_dc23aa3cc360c94c85498e0eb7ef736c9ae76252e027b1d1183d3d60ef270f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dc23aa3cc360c94c85498e0eb7ef736c9ae76252e027b1d1183d3d60ef270f4f->leave($__internal_dc23aa3cc360c94c85498e0eb7ef736c9ae76252e027b1d1183d3d60ef270f4f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_179428376da5467f733685f589b0fdfc1868a8212eea690b503093091226498f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179428376da5467f733685f589b0fdfc1868a8212eea690b503093091226498f->enter($__internal_179428376da5467f733685f589b0fdfc1868a8212eea690b503093091226498f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_179428376da5467f733685f589b0fdfc1868a8212eea690b503093091226498f->leave($__internal_179428376da5467f733685f589b0fdfc1868a8212eea690b503093091226498f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b43c5d6fd443410dec1775a6cabb15416e50b9a6d7f077f12ad645b1b05ff9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43c5d6fd443410dec1775a6cabb15416e50b9a6d7f077f12ad645b1b05ff9e0->enter($__internal_b43c5d6fd443410dec1775a6cabb15416e50b9a6d7f077f12ad645b1b05ff9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b43c5d6fd443410dec1775a6cabb15416e50b9a6d7f077f12ad645b1b05ff9e0->leave($__internal_b43c5d6fd443410dec1775a6cabb15416e50b9a6d7f077f12ad645b1b05ff9e0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e0b69b27f45088d5dbaa01168fac5f111687de4950da9c558b64e7035eedc101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b69b27f45088d5dbaa01168fac5f111687de4950da9c558b64e7035eedc101->enter($__internal_e0b69b27f45088d5dbaa01168fac5f111687de4950da9c558b64e7035eedc101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e0b69b27f45088d5dbaa01168fac5f111687de4950da9c558b64e7035eedc101->leave($__internal_e0b69b27f45088d5dbaa01168fac5f111687de4950da9c558b64e7035eedc101_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
