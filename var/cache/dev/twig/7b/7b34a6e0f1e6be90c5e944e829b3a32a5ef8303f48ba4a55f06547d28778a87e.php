<?php

/* AppBundle:Registration:register.html.twig */
class __TwigTemplate_71f1094e5c2e3687e0532882b2e09c318f37ab916577a995cca36df13b0c1c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Registration:register.html.twig", 2);
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
        $__internal_296908b848835203885e823a3e89115fa56463fd3c37acbe82a4fec8a5b064da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296908b848835203885e823a3e89115fa56463fd3c37acbe82a4fec8a5b064da->enter($__internal_296908b848835203885e823a3e89115fa56463fd3c37acbe82a4fec8a5b064da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296908b848835203885e823a3e89115fa56463fd3c37acbe82a4fec8a5b064da->leave($__internal_296908b848835203885e823a3e89115fa56463fd3c37acbe82a4fec8a5b064da_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20c408823152f1604e299f2e19a1c5fd6016281644256519e1d7106b48d8a0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c408823152f1604e299f2e19a1c5fd6016281644256519e1d7106b48d8a0a8->enter($__internal_20c408823152f1604e299f2e19a1c5fd6016281644256519e1d7106b48d8a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_20c408823152f1604e299f2e19a1c5fd6016281644256519e1d7106b48d8a0a8->leave($__internal_20c408823152f1604e299f2e19a1c5fd6016281644256519e1d7106b48d8a0a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:register.html.twig";
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
", "AppBundle:Registration:register.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle/Resources/views/Registration/register.html.twig");
    }
}
