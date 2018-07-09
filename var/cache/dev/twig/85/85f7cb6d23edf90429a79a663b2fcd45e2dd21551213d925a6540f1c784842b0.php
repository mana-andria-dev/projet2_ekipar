<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c26d83c1dc3b07de864d8782138cb510e9177c17349d119c06d9b4d783f2e7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e15cc3f85e98eb35cb19da647b8c7edff042b1a91c5b000fc6a274b701188a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15cc3f85e98eb35cb19da647b8c7edff042b1a91c5b000fc6a274b701188a78->enter($__internal_e15cc3f85e98eb35cb19da647b8c7edff042b1a91c5b000fc6a274b701188a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15cc3f85e98eb35cb19da647b8c7edff042b1a91c5b000fc6a274b701188a78->leave($__internal_e15cc3f85e98eb35cb19da647b8c7edff042b1a91c5b000fc6a274b701188a78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37b38e1d9d39d20fa36a9bbb8181f68b9b27279c105aab8076d0553e6e39c947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b38e1d9d39d20fa36a9bbb8181f68b9b27279c105aab8076d0553e6e39c947->enter($__internal_37b38e1d9d39d20fa36a9bbb8181f68b9b27279c105aab8076d0553e6e39c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_37b38e1d9d39d20fa36a9bbb8181f68b9b27279c105aab8076d0553e6e39c947->leave($__internal_37b38e1d9d39d20fa36a9bbb8181f68b9b27279c105aab8076d0553e6e39c947_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
