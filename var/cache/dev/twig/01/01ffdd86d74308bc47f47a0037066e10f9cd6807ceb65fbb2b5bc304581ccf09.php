<?php

/* @App/Registration/email.txt.twig */
class __TwigTemplate_5d28a34d3ebb08c16f4992d37afceefe28f9e7693a87f503fbb42ce017258ecd extends Twig_Template
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
        $__internal_5930930b44e4488fe90dcb46ea88f51dac12b1a88697c118449ee36b6c76c1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5930930b44e4488fe90dcb46ea88f51dac12b1a88697c118449ee36b6c76c1c6->enter($__internal_5930930b44e4488fe90dcb46ea88f51dac12b1a88697c118449ee36b6c76c1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5930930b44e4488fe90dcb46ea88f51dac12b1a88697c118449ee36b6c76c1c6->leave($__internal_5930930b44e4488fe90dcb46ea88f51dac12b1a88697c118449ee36b6c76c1c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_08cc155bbadc290b64577992b57bc22c1e25a6a182859ff32ba46810f6fe80d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cc155bbadc290b64577992b57bc22c1e25a6a182859ff32ba46810f6fe80d2->enter($__internal_08cc155bbadc290b64577992b57bc22c1e25a6a182859ff32ba46810f6fe80d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_08cc155bbadc290b64577992b57bc22c1e25a6a182859ff32ba46810f6fe80d2->leave($__internal_08cc155bbadc290b64577992b57bc22c1e25a6a182859ff32ba46810f6fe80d2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_67f7b05ab387cec91137dd9a495805f40edcab72aab09fd0ba28503ad69e23a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f7b05ab387cec91137dd9a495805f40edcab72aab09fd0ba28503ad69e23a6->enter($__internal_67f7b05ab387cec91137dd9a495805f40edcab72aab09fd0ba28503ad69e23a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_67f7b05ab387cec91137dd9a495805f40edcab72aab09fd0ba28503ad69e23a6->leave($__internal_67f7b05ab387cec91137dd9a495805f40edcab72aab09fd0ba28503ad69e23a6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_27c533974d521b269a545c2e673d204e522e7fa48a02486686646718626fa294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c533974d521b269a545c2e673d204e522e7fa48a02486686646718626fa294->enter($__internal_27c533974d521b269a545c2e673d204e522e7fa48a02486686646718626fa294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_27c533974d521b269a545c2e673d204e522e7fa48a02486686646718626fa294->leave($__internal_27c533974d521b269a545c2e673d204e522e7fa48a02486686646718626fa294_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/email.txt.twig";
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
", "@App/Registration/email.txt.twig", "E:\\wamp\\www\\user\\src\\AppBundle\\Resources\\Views\\Registration\\email.txt.twig");
    }
}
