<?php

/* ERBundle:Membre:admin.html.twig */
class __TwigTemplate_6d505bc1f00193efb14159e803a60bc582cde09c411e8cde4efc6beed4cbe992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::membre.html.twig", "ERBundle:Membre:admin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::membre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_653058bed9d8f772942b0a7cb81816848a9d117d10e9270e826325abde90b639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653058bed9d8f772942b0a7cb81816848a9d117d10e9270e826325abde90b639->enter($__internal_653058bed9d8f772942b0a7cb81816848a9d117d10e9270e826325abde90b639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653058bed9d8f772942b0a7cb81816848a9d117d10e9270e826325abde90b639->leave($__internal_653058bed9d8f772942b0a7cb81816848a9d117d10e9270e826325abde90b639_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_afae1e9060bdd1c689894199b1ef7626236cd10e528443e072d96bfc25a07728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afae1e9060bdd1c689894199b1ef7626236cd10e528443e072d96bfc25a07728->enter($__internal_afae1e9060bdd1c689894199b1ef7626236cd10e528443e072d96bfc25a07728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<style type=\"text/css\">
\t\ttd {
\t\t\tborder: none !important;
\t\t\tcolor: white !important;
\t\t}
\t</style>
\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; background: #d80c0c; color: white; text-align: center;\"
\t\t>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"label label-info\">
\t\t\t\t\tCette page est reservée à l'administration
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_afae1e9060bdd1c689894199b1ef7626236cd10e528443e072d96bfc25a07728->leave($__internal_afae1e9060bdd1c689894199b1ef7626236cd10e528443e072d96bfc25a07728_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:admin.html.twig";
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
        return new Twig_Source("{% extends '::membre.html.twig' %}

\t{% block content %}
\t<style type=\"text/css\">
\t\ttd {
\t\t\tborder: none !important;
\t\t\tcolor: white !important;
\t\t}
\t</style>
\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; background: #d80c0c; color: white; text-align: center;\"
\t\t>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"label label-info\">
\t\t\t\t\tCette page est reservée à l'administration
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}", "ERBundle:Membre:admin.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/admin.html.twig");
    }
}
