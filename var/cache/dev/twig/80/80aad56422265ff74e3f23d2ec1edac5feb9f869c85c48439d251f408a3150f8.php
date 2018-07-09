<?php

/* @App/Registration/register.html.twig */
class __TwigTemplate_d250432bc20c945dd8509f4f3ca10ea66a61bc6727e3d9db95920b6f60328b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Registration/register.html.twig", 2);
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
        $__internal_6651af96e47065131771a47c3ee7293904619d07d81af907bf431557e58cdcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6651af96e47065131771a47c3ee7293904619d07d81af907bf431557e58cdcf2->enter($__internal_6651af96e47065131771a47c3ee7293904619d07d81af907bf431557e58cdcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6651af96e47065131771a47c3ee7293904619d07d81af907bf431557e58cdcf2->leave($__internal_6651af96e47065131771a47c3ee7293904619d07d81af907bf431557e58cdcf2_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b25053af432efa71781874563bf5fd9bae4c498008801bb49f482b114e165b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25053af432efa71781874563bf5fd9bae4c498008801bb49f482b114e165b10->enter($__internal_b25053af432efa71781874563bf5fd9bae4c498008801bb49f482b114e165b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b25053af432efa71781874563bf5fd9bae4c498008801bb49f482b114e165b10->leave($__internal_b25053af432efa71781874563bf5fd9bae4c498008801bb49f482b114e165b10_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/register.html.twig";
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
", "@App/Registration/register.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle\\Resources\\Views\\Registration\\register.html.twig");
    }
}
