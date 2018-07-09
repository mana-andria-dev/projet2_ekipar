<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e4a46c6517d10dd2ac472744e23310a18b8b6b5b3edb5605e7db1b0eff483646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Security/login.html.twig", 3);
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
        $__internal_bfed17d723b0007fabb3ebd1e2ece3c74b9a7808112526ba34c5c9e9e6658691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfed17d723b0007fabb3ebd1e2ece3c74b9a7808112526ba34c5c9e9e6658691->enter($__internal_bfed17d723b0007fabb3ebd1e2ece3c74b9a7808112526ba34c5c9e9e6658691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfed17d723b0007fabb3ebd1e2ece3c74b9a7808112526ba34c5c9e9e6658691->leave($__internal_bfed17d723b0007fabb3ebd1e2ece3c74b9a7808112526ba34c5c9e9e6658691_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75f06a50ca926f091f04692f8ec6be483b810c0a7e91e658cfa3e2efb8ae0f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f06a50ca926f091f04692f8ec6be483b810c0a7e91e658cfa3e2efb8ae0f60->enter($__internal_75f06a50ca926f091f04692f8ec6be483b810c0a7e91e658cfa3e2efb8ae0f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"login-container\">
            <h1>Se connecter</h1><br>
            <form>
                <label for=\"username\">Nom utilisateur :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                <label for=\"password\">Mot de passe:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">Se souvenir de moi</label>
                <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" />
            </form>
            <div class=\"login-help\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a> || <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Oublier mot de passe</a>
            </div>
        </div>
    </form>
";
        
        $__internal_75f06a50ca926f091f04692f8ec6be483b810c0a7e91e658cfa3e2efb8ae0f60->leave($__internal_75f06a50ca926f091f04692f8ec6be483b810c0a7e91e658cfa3e2efb8ae0f60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  62 => 14,  54 => 9,  49 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}
{% extends \"::base.html.twig\" %}
{% block fos_user_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        <div class=\"login-container\">
            <h1>Se connecter</h1><br>
            <form>
                <label for=\"username\">Nom utilisateur :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                <label for=\"password\">Mot de passe:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">Se souvenir de moi</label>
                <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" />
            </form>
            <div class=\"login-help\">
                <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a> || <a href=\"{{ path('fos_user_resetting_request') }}\">Oublier mot de passe</a>
            </div>
        </div>
    </form>
{% endblock fos_user_content %}

", "@FOSUser/Security/login.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle\\Resources\\Views\\Security\\login.html.twig");
    }
}
