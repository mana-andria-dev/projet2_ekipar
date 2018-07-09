<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_cd8b6cf2c8f3246971d11a36a894ebdcbfbc0a3c0d8a63292be2a855d775831c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Registration/register.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bcb548fbf59609892376cc43091dd501129d346e430b8c64aa09846f6646e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcb548fbf59609892376cc43091dd501129d346e430b8c64aa09846f6646e83->enter($__internal_4bcb548fbf59609892376cc43091dd501129d346e430b8c64aa09846f6646e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bcb548fbf59609892376cc43091dd501129d346e430b8c64aa09846f6646e83->leave($__internal_4bcb548fbf59609892376cc43091dd501129d346e430b8c64aa09846f6646e83_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f122513adae0d12c939328bfc6f2759745e9488f1f696fbd05e9b3fa0e9c62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f122513adae0d12c939328bfc6f2759745e9488f1f696fbd05e9b3fa0e9c62a->enter($__internal_8f122513adae0d12c939328bfc6f2759745e9488f1f696fbd05e9b3fa0e9c62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t";
        // line 6
        echo "\t<div class=\"login-container\">
\t\t";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")));
        // line 11
        echo "
\t\t
\t\t    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t    
\t\t        <input class=\"login login-submit\" type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t     <div class=\"login-help\">
              <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
            </div>
\t";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
 \t</div>
";
        
        $__internal_8f122513adae0d12c939328bfc6f2759745e9488f1f696fbd05e9b3fa0e9c62a->leave($__internal_8f122513adae0d12c939328bfc6f2759745e9488f1f696fbd05e9b3fa0e9c62a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  61 => 17,  56 => 15,  51 => 13,  47 => 11,  45 => 7,  42 => 6,  40 => 5,  34 => 4,  11 => 2,);
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
{% extends \"::base.html.twig\" %}

{% block fos_user_content %}
\t{% trans_default_domain 'FOSUserBundle' %}
\t<div class=\"login-container\">
\t\t{{ form_start(form, {
\t\t\t'method': 'post',
\t\t\t'action': path('fos_user_registration_register')
\t\t\t}) 
\t\t}}
\t\t
\t\t    {{ form_widget(form) }}
\t\t    
\t\t        <input class=\"login login-submit\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
\t\t     <div class=\"login-help\">
              <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            </div>
\t{{ form_end(form) }}
 \t</div>
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle\\Resources\\Views\\Registration\\register.html.twig");
    }
}
