<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bac81ac8f71ec9c66fa89c04f440c6f72861e041e09d016e68c0e0c3b3c70933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f7cdf04b7b3bb01f63425ad345662408d7a8a2cbe8aa29dc1b2d13d852e6da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7cdf04b7b3bb01f63425ad345662408d7a8a2cbe8aa29dc1b2d13d852e6da5->enter($__internal_0f7cdf04b7b3bb01f63425ad345662408d7a8a2cbe8aa29dc1b2d13d852e6da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7cdf04b7b3bb01f63425ad345662408d7a8a2cbe8aa29dc1b2d13d852e6da5->leave($__internal_0f7cdf04b7b3bb01f63425ad345662408d7a8a2cbe8aa29dc1b2d13d852e6da5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f065fe803bc4e9140132a838763ae8a8cc71f4def434dbb86c7210eb639bb004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f065fe803bc4e9140132a838763ae8a8cc71f4def434dbb86c7210eb639bb004->enter($__internal_f065fe803bc4e9140132a838763ae8a8cc71f4def434dbb86c7210eb639bb004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f065fe803bc4e9140132a838763ae8a8cc71f4def434dbb86c7210eb639bb004->leave($__internal_f065fe803bc4e9140132a838763ae8a8cc71f4def434dbb86c7210eb639bb004_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
