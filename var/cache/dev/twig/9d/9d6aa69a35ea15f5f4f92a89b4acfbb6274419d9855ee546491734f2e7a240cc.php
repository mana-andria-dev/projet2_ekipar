<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7535a17f56462719609f9c1d51b875c6bb235a8dd320df8328dab7ad3b6cb055 extends Twig_Template
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
        $__internal_678b54f8dbe6c60dcb3b9fad09eea981a90f3bc4d473e9079443f12299c00e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678b54f8dbe6c60dcb3b9fad09eea981a90f3bc4d473e9079443f12299c00e90->enter($__internal_678b54f8dbe6c60dcb3b9fad09eea981a90f3bc4d473e9079443f12299c00e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_678b54f8dbe6c60dcb3b9fad09eea981a90f3bc4d473e9079443f12299c00e90->leave($__internal_678b54f8dbe6c60dcb3b9fad09eea981a90f3bc4d473e9079443f12299c00e90_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_25ec1cabff90f720951240e2fabb7103c19bbaa25762bd66317fa4820cd5666f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ec1cabff90f720951240e2fabb7103c19bbaa25762bd66317fa4820cd5666f->enter($__internal_25ec1cabff90f720951240e2fabb7103c19bbaa25762bd66317fa4820cd5666f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_25ec1cabff90f720951240e2fabb7103c19bbaa25762bd66317fa4820cd5666f->leave($__internal_25ec1cabff90f720951240e2fabb7103c19bbaa25762bd66317fa4820cd5666f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a7ae1a4cea73c946fb7e775502943a2cd2e5586f1b9c8c962fda490099f7efeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ae1a4cea73c946fb7e775502943a2cd2e5586f1b9c8c962fda490099f7efeb->enter($__internal_a7ae1a4cea73c946fb7e775502943a2cd2e5586f1b9c8c962fda490099f7efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a7ae1a4cea73c946fb7e775502943a2cd2e5586f1b9c8c962fda490099f7efeb->leave($__internal_a7ae1a4cea73c946fb7e775502943a2cd2e5586f1b9c8c962fda490099f7efeb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9faf293fa65eb6b7de88d94fd5ace81524d04135e67fe1da4e61f391d0f4781f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faf293fa65eb6b7de88d94fd5ace81524d04135e67fe1da4e61f391d0f4781f->enter($__internal_9faf293fa65eb6b7de88d94fd5ace81524d04135e67fe1da4e61f391d0f4781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9faf293fa65eb6b7de88d94fd5ace81524d04135e67fe1da4e61f391d0f4781f->leave($__internal_9faf293fa65eb6b7de88d94fd5ace81524d04135e67fe1da4e61f391d0f4781f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
