<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_08fc08999c9ce875c29ab585d9828f9050641121f6b179384d8b4cb72373e2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_718a6692718b9d2843f8179effb883801524c91a716b854e4ff56f70b3a88cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718a6692718b9d2843f8179effb883801524c91a716b854e4ff56f70b3a88cdb->enter($__internal_718a6692718b9d2843f8179effb883801524c91a716b854e4ff56f70b3a88cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718a6692718b9d2843f8179effb883801524c91a716b854e4ff56f70b3a88cdb->leave($__internal_718a6692718b9d2843f8179effb883801524c91a716b854e4ff56f70b3a88cdb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa00f7cccd64cf63c54a3e6ed35ae906ee52264f5c8a96016ec9dd8a74dea8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa00f7cccd64cf63c54a3e6ed35ae906ee52264f5c8a96016ec9dd8a74dea8e5->enter($__internal_aa00f7cccd64cf63c54a3e6ed35ae906ee52264f5c8a96016ec9dd8a74dea8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aa00f7cccd64cf63c54a3e6ed35ae906ee52264f5c8a96016ec9dd8a74dea8e5->leave($__internal_aa00f7cccd64cf63c54a3e6ed35ae906ee52264f5c8a96016ec9dd8a74dea8e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
