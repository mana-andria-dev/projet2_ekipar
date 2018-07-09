<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_20450762c45df37e339c01847b2b83aa5a0d34f25c889ed4366eb2d7130bee20 extends Twig_Template
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
        $__internal_7d9e7337a7cdc9e98087e2f4d61d73441b50bdf27c43e3a0286db45b2641dae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9e7337a7cdc9e98087e2f4d61d73441b50bdf27c43e3a0286db45b2641dae4->enter($__internal_7d9e7337a7cdc9e98087e2f4d61d73441b50bdf27c43e3a0286db45b2641dae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d9e7337a7cdc9e98087e2f4d61d73441b50bdf27c43e3a0286db45b2641dae4->leave($__internal_7d9e7337a7cdc9e98087e2f4d61d73441b50bdf27c43e3a0286db45b2641dae4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2c3738f016df62db06283653f2af8a36384c24049f273b618c8afe158d530855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3738f016df62db06283653f2af8a36384c24049f273b618c8afe158d530855->enter($__internal_2c3738f016df62db06283653f2af8a36384c24049f273b618c8afe158d530855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2c3738f016df62db06283653f2af8a36384c24049f273b618c8afe158d530855->leave($__internal_2c3738f016df62db06283653f2af8a36384c24049f273b618c8afe158d530855_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e39ed5578efdf88ffedc59de5c3824940530cd50473848a166d5a3cfa79e862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e39ed5578efdf88ffedc59de5c3824940530cd50473848a166d5a3cfa79e862->enter($__internal_3e39ed5578efdf88ffedc59de5c3824940530cd50473848a166d5a3cfa79e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e39ed5578efdf88ffedc59de5c3824940530cd50473848a166d5a3cfa79e862->leave($__internal_3e39ed5578efdf88ffedc59de5c3824940530cd50473848a166d5a3cfa79e862_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8d70760903c1ce7a1c692ab82329c9006421bcdd20d20203827afa39cc8487c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d70760903c1ce7a1c692ab82329c9006421bcdd20d20203827afa39cc8487c5->enter($__internal_8d70760903c1ce7a1c692ab82329c9006421bcdd20d20203827afa39cc8487c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8d70760903c1ce7a1c692ab82329c9006421bcdd20d20203827afa39cc8487c5->leave($__internal_8d70760903c1ce7a1c692ab82329c9006421bcdd20d20203827afa39cc8487c5_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
